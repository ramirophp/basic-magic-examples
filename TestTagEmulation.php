<?php

require_once './TestEtiqueta.php';
require_once './TestAtributos.php';

echo "<br>";
setTag($etiqueta,'div');
setAttrs($atributos,['class' => 'myDiv', 'id' => "myDiv"]);
$tag_attrs = getTag($etiqueta).getAttrs($atributos);
setTag($etiqueta,$tag_attrs);
prtTag($etiqueta);
echo "<br>";
setTag($etiqueta,'video');
setAttrs($atributos,['!' => 'controls loop autoplay']);
$tag_attrs = getTag($etiqueta).getAttrs($atributos);
setTag($etiqueta,$tag_attrs);
prtTag($etiqueta);