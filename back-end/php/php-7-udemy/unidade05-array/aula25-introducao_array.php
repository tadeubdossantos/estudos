<?php
    //Todo array inicia em zero
    //Todo array com somente uma dimensão é chamado de vetor
    //Um array propriamente dito possui mais de uma dimensão (Array Bidimensional, Array Tridimensional e assim por diante)


    $frutas = array("Laranja", "Maça", "Banana", "Abacate");        //Inicialização de um array, mais especificamente um vetor
    print_r($frutas);

    echo "<br/>";
    
    //Criação e Inicialização de um array de 2 dimensões
    $carros[0][0] = "GM"; 
    $carros[0][1] = "Cobalt"; 
    $carros[0][2] = "Onix"; 
    $carros[0][3] = "Camaro"; 

    $carros[1][0] = "Ford"; 
    $carros[1][1] = "Fiesta"; 
    $carros[1][2] = "Fusion"; 
    $carros[1][3] = "Ecosport";

    echo $carros[0][3];
    echo "<br/>";
    echo end($carros[1]);   //Retorna o último item do grupo 
    
     echo "<br/>";
    
    //Criação de um array de 3 dimensões
    $pessoas = array();
    
    array_push($pessoas, array(     //Adiciona conteúdo (um outro array) em um array já criado
        'nome' => "Tadeu",
        'idade' => 29
    ));

     array_push($pessoas, array(     //Adiciona conteúdo (um outro array) em um array já criado
        'nome' => "Patrícia",
        'idade' => 28
    ));

    print_r($pessoas);
    echo "<br/>";
    print_r($pessoas[0]);           //Retornar informações da primeira pessoa
    echo "<br/>";
    print_r($pessoas[1]['nome']);           //Retornar o nome da segunda pessoa
?>


    
    