<?php

namespace Forseti\Bot\Ponto\PageObject;

use Forseti\Bot\Ponto\Enums\Url;
use Forseti\Bot\Ponto\Parser\TokenParser;

class TokenPageObject extends AbstrctPageObject
{
    public function getResponseToken()
    {
        return $response = $this->request("GET", Url::LOGIN);
    }

    public function getHtmlToken()
    {
        return $this->getResponseToken()->getBody()->getContents();
    }

    public function getParserToken()
    {
        return new TokenParser($this->getHtmlToken());
    }
}