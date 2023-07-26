<?php
    
    require_once "livro.class.php";
   

    $p[0] = new Pessoa("Ariane Cristina de Moraes", 24, "F");
    $p[1] = new Pessoa("Tadeu Bispo dos Santos", 29, "M");
    $p[2] = new Pessoa("Patricia Bispo dos Santos", 28, "F");

    $l[0] = new Livro("Historia da Idade Media", "Joao da Sinta", 300, $p[0]);
    $l[1] = new Livro("Ditadura e suas Consequencias", "Fagner Amoedo", 500, $p[0]);
    $l[2] = new Livro("PHP OOP", "Fabio Melo", 200, $p[1]);

    $l[0]->folhear(500);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    $l[1]->detalhes();
    $l[2]->detalhes();
?>