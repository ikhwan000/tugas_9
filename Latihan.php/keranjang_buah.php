<?php
    require_once 'class_fruit.php';

    $vario = new motor();
    $mio = new motor();

    $mio->set_name('mio');
    $mio->set_color('biru');
    $vario->set_name('vario');
    $vario->set_color('hitam');

    echo 'Nama motor '.$mio->get_name().' Warnanya '.$mio->get_color();
    echo '<br/>Nama motor '.$vario->get_name().' Warnanya '.$vario->get_color();
?>