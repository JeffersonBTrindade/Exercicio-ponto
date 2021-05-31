<?php

use Forseti\Bot\Ponto\PageObject\PainelPageObject;
use Forseti\Bot\Ponto\PageObject\TokenPageObject;

require __DIR__ . "/../vendor/autoload.php";

$clientPageObject = new PainelPageObject();

$html = $clientPageObject->setEmail("jefferson.trindade@forseti.com.br")
    ->setPassword("Jefferson24190823")
    ->getParserLogin();

$html = $clientPageObject->getParserLogin()->getIterator()->current();

var_dump($html);

