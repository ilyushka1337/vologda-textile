<?php
namespace Placestart\Core;

use \Bitrix\Main\HttpResponse;

class HtmlResponse extends HttpResponse
{
    public function __construct(string $htmlContent)
    {
        parent::__construct();
        $this->addHeader("Content-Type", "text/html; charset=UTF-8");
        $this->setContent($htmlContent);
    }
}
