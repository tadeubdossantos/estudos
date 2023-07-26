<html>
<head>
    <title>Exércicio de PHP POO</title>
</head>
<body>
    <pre>
        <?php

        require_once "video.class.php";
        require_once "gafanhoto.class.php";
        require_once "visualizacao.class.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML");

        print_r($v);

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 23, "F", "creuzita");    
        print_r($g); 

        $vis[0] = new visualizacao($g[0],$v[2]);
        print_r($vis[0]);
        $vis[1] = new visualizacao($g[0],$v[1]);
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        print_r($vis);
        ?>        
    </pre>
</body>
</html>
