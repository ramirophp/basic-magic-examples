<?php

require_once __DIR__ . '/vendor/autoload.php';

use Rmo\Atributos;

$atributos = new Atributos;

setAttrs($atributos,[
    '!' => 'defer',
    'class' => 'claseTest',
    'id' => 'idTest',
    '!' => 'controls loop autoplay',
]);

prtAttrs($atributos);