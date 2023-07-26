<?php
    echo "<p>Controle Remoto</p>";
    require_once "controleremoto.class.php";

    $c = new controleremoto();
    $c->ligar();
    $c->abrirMenu();
    $c->play();
    $c->maisVolume(5);
    $c->abrirMenu();
    $c->desligar();
    $c->pause();

    
    //$c->getVolume();
   
?>