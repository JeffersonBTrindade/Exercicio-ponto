<?php

namespace Forseti\Bot\Ponto\Parser;

use Forseti\Bot\Ponto\Iterator\PainelIterator;

class PainelParser extends AbstractParser
{
    public function getIterator()
    {
        return new PainelIterator($this->crawler->filterXPath("//body/div/main/div[1]/div/div/table/tbody/tr"));
    }
}

/*//body/div/main/div[1]/div/div/table/tbody/tr*/
////*[@id='app']/main/div[1]/div/div/table/tbody/tr