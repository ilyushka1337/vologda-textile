<?php

namespace Placestart\WildberriesApi\Exception;

class GetApiV2HistoryGoodsTaskUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Placestart\WildberriesApi\Model\Response401
     */
    private $response401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\Response401 $response401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Пользователь не авторизован');
        $this->response401 = $response401;
        $this->response = $response;
    }
    public function getResponse401(): \Placestart\WildberriesApi\Model\Response401
    {
        return $this->response401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}