<?php

namespace Forseti\Bot\Ponto\PageObject;

use Forseti\Bot\Ponto\Bean\LoginBean;
use Forseti\Bot\Ponto\Enums\Url;
use Forseti\Bot\Ponto\Parser\PainelParser;
use GuzzleHttp\Psr7\Response;

class PainelPageObject extends AbstrctPageObject
{
    use LoginBean;

    public function getResponseLogin()
    {
        /*$objeto = [
            "form_params" => [
                "_token" => (new TokenPageObject())->getParser()->getToken(),
                "email" => $this->email,
                "password" => $this->password
            ]
        ];*/

        return $this->request("POST", Url::LOGIN, [
            "form_params" => [
                "_token" => (new TokenPageObject())->getParserToken()->getToken(),
                "email" => $this->email,
                "password" => $this->password
            ]
        ]);
    }

    public function getHtmlLogin()
    {
        return $this->getResponseLogin()->getBody()->getContents();
    }

    public function getParserLogin()
    {
        return new PainelParser($this->getHtmlLogin());
    }
}