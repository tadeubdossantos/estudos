<?php
    
    require_once "mamifero.class.php";
    require_once "reptil.class.php";
    require_once "peixe.class.php";
    require_once "ave.class.php";    
        
    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $p = new Peixe();

    $m->setPeso(33.5);
    $m->locomover();
    $a->locomover();
    $r->locomover();
    $p->locomover();
    
    require_once "canguru.class.php";    
    require_once "cachorro.class.php";  
    require_once "cobra.class.php";   
    require_once "tartaruga.class.php"; 
    require_once "goldfish.class.php"; 
    require_once "arara.class.php";    
    
    $c = new Cachorro();
    $k = new Canguru();
    $t = new Tartaruga();
    
    $m->locomover();
    $c->locomover();
    $k->locomover();
    $t->locomover();
    
    $m->emitirSom();
    $c->emitirSom();
    $k->emitirSom();
    
?>