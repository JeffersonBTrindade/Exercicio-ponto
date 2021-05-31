<?php

namespace Forseti\Bot\Ponto\Singleton;

use GuzzleHttp\Client;

trait Singleton
{
    private static $instance;

    public static function getInstance(): Client
    {
        if (self::$instance === NULL) {
            self::$instance = self::createInstance();
        }

        return self::$instance;
    }
}