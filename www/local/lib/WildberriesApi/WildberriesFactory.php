<?php
namespace Placestart\WildberriesApi;

use Placestart\WildberriesApi\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\HttpOptions;
use Symfony\Component\HttpClient\Psr18Client;

class WildberriesFactory
{
    function __construct()
    {
    }

    public static function create(string $apiKey): Client
    {
        $httpClient = (new Psr18Client())->withOptions(
            (new HttpOptions())
                ->setBaseUri('https://content-api.wildberries.ru')
                ->setHeader('Authorization', $apiKey)
                ->toArray()
        );

        return Client::create($httpClient);
    }
}