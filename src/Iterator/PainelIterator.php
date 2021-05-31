<?php

namespace Forseti\Bot\Ponto\Iterator;

class PainelIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $objeto = new \stdClass();

        $objeto->inicio = $node->getElementsByTagName("td")->item(0)->textContent;
        $objeto->intervalo = $node->getElementsByTagName("td")->item(1)->textContent;
        $objeto->fimIntervalo = $node->getElementsByTagName("td")->item(2)->textContent;
        $objeto->fim = $node->getElementsByTagName("td")->item(3)->textContent;

        return $objeto;
    }
}