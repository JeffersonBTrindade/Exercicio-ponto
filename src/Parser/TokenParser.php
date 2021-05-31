<?php

namespace Forseti\Bot\Ponto\Parser;

class TokenParser extends AbstractParser
{
    public function getToken()
    {
        return $this->crawler->filterXPath('//body/div/main/div/div/div/div/div[2]/form/input')->attr("value");
    }
}//*[@id="app"]/main/div/div/div/div/div[2]/form/input