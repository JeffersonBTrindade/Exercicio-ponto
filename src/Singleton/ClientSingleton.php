<?php

namespace Forseti\Bot\Ponto\Singleton;

use Forseti\Bot\Ponto\Enums\Url;
use Forseti\Bot\Ponto\PageObject\TokenPageObject;
use GuzzleHttp\Client;

class ClientSingleton
{
    use Singleton;

    public static function createInstance()
    {
        $config = [
            "verify" => false,
            "cookies" => true,
            "debug" => false,
            "allow_redirects" => true,
            "headers" => [
                'User-Agent' => Url::USER
            ]
        ];

        return new Client($config);
    }
}