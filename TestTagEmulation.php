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

?>

<h1>Do Magic</h1>

<?php
    use Rmo\Magic;
    $char = new Magic;
    setTag($etiqueta,'html');
    prtTag($etiqueta);
    echo "<br>&nbsp;&nbsp;";
    setTag($etiqueta,'head');
    prtTag($etiqueta);
    echo "&nbsp;&nbsp;";
    setTag($etiqueta, getChar($char) . 'head');
    prtTag($etiqueta);
    echo "<br>&nbsp;&nbsp;";
    setTag($etiqueta,'body');
    prtTag($etiqueta);
    echo "&nbsp;&nbsp;";
    setTag($etiqueta, getChar($char) . 'body');
    prtTag($etiqueta);
    echo "<br>";
    setTag($etiqueta, getChar($char) . 'html');
    prtTag($etiqueta);

?>