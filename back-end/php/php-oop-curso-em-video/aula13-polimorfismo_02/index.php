<?php
    require_once "mamifero.class.php";
    require_once "lobo.class.php";
    require_once "cachorro.class.php";

    $m = new Mamifero();
    $m->emitirSom();

    $l = new Lobo();
    $l->emitirSom();
    
    $c = new Cachorro();
    $c->emitirSom();
    $c->reagirFrase("Ola");
    $c->reagirFrase("Vai apanhar!");
    $c->reagirHora(11,45);
    $c->reagirHora(21,00);
    $c->reagirDono(false);
    $c->reagirIdadePeso(2, 12.5);
    $c->reagirIdadePeso(17, 4.5);
?>