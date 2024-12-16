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

class FeedbackSectionComponent extends Boilerplate implements Controllerable
{
    protected static $name = "Форма 'Возникли вопросы?'";

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
            'feedback' => [
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

    public function feedbackAction(string $phone)
    {
        $result = [
            'phone' => $phone,
            'status' => 'success'
        ];

        $v = V::key('phone', V::phone());

        try {
            $v->assert($result);
        } catch (Exceptions\NestedValidationException $e) {
            $result['errors'] = $e->getMessages();
            $result['status'] = 'invalid';
            return new HtmlResponse(tpl("forms/callback-form", $result));
        }

        $event = Event::send([
            "EVENT_NAME" => "FEEDBACK",
            "LID" => "s1",
            "C_FIELDS" => [
                "PHONE" => $result["phone"],
            ],
        ]);

        if (!$event->isSuccess()) {
            $result["status"] = "event_error";
            $result["errors"] = $event->getErrorMessages();
        }

        return new HtmlResponse(tpl("forms/callback-form", $result));
    }
}