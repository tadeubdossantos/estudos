<?php
    
    require_once "video.class.php";
    require_once "gafanhoto.class.php";

    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML");
    
    echo "<pre>";
    print_r($v);
    echo "</pre>";

    $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
    $g[1] = new Gafanhoto("Creuza", 23, "F", "creuzita");
    echo "<pre>";
    print_r($g);
    echo "</pre>";
?>