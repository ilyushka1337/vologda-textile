<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Mail\Event;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;
use Placestart\Core\HtmlResponse;
use Respect\Validation\Validator as V;
use Respect\Validation\Exceptions;

class OrderFormSectionComponent extends Boilerplate implements Controllerable
{
    protected static $name = "Форма 'Хотите сделать заказ?'";

    public function __construct(\CBitrixComponent $component = null)
    {
        Loader::requireModule('sprint.options');
        parent::__construct($component);
    }

    protected function getData()
    {
        $this->arResult['SITE_PHONE'] = sprint_options_get('SITE_PHONE');
        $this->arResult['SITE_EMAIL'] = sprint_options_get('SITE_EMAIL');
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }

    public function configureActions()
    {
        return [
            'order' => [
                'prefilters' => [
                    new ActionFilter\Csrf(),
                    new ActionFilter\HttpMethod(
                        [ActionFilter\HttpMethod::METHOD_POST]
                    ),
                ],
                'postfilters' => []
            ]
        ];
    }

    public function orderAction(string $phone, string $fio, string $email, string $comment)
    {
        $result = [
            'phone' => $phone,
            'fio' => $fio,
            'email' => $email,
            'comment' => $comment,
            'status' => 'success'
        ];

        $v = V::key('phone', V::phone())->key('email', V::email())->key('fio', V::notBlank())->key('comment', V::stringVal());

        try {
            $v->assert($result);
        } catch (Exceptions\NestedValidationException $e) {
            $result['errors'] = $e->getMessages();
            $result['status'] = 'invalid';
            return new HtmlResponse(tpl("forms/order-form", $result));
        }

        $event = Event::send([
            "EVENT_NAME" => "ORDER",
            "LID" => "s1",
            "C_FIELDS" => [
                "PHONE" => $result["phone"],
                "EMAIL" => $result["email"],
                "FIO" => $result["fio"],
                "COMMENT" => $result["comment"],
            ],
        ]);

        if (!$event->isSuccess()) {
            $result["status"] = "event_error";
            $result["errors"] = $event->getErrorMessages();
        }

        return new HtmlResponse(tpl("forms/order-form", $result));
    }
}