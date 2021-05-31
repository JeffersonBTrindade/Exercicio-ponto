<?php

namespace Forseti\Bot\Ponto\PageObject;

use Forseti\Bot\Ponto\Singleton\ClientSingleton;
use Forseti\Bot\Ponto\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;

abstract class AbstrctPageObject
{
    use ForsetiLoggerTrait;
    protected $client;

    public function __construct()
    {
        $this->client = ClientSingleton::getInstance();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (GuzzleException $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        } catch (\Exception $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        }
    }
}