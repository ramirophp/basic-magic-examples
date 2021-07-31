<?php

require_once __DIR__ . '/vendor/autoload.php';
#Test de la clase etiqueta
    use Rmo\Etiqueta;

    $etiqueta = new Etiqueta;
    //Making a doctype
    setTag($etiqueta,'doctype');

    $tag = getTag($etiqueta);

    $tag = html5($etiqueta,$tag);

    setTag($etiqueta,$tag);

    prtTag($etiqueta);
#