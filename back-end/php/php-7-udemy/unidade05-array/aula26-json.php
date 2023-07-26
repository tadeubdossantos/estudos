<?php
    //JSON - JavaScript Object Natation
    //Um tipo de arquivo que todas as linguagens de programação podem gerar
    //É um formtado de comunicação que facilita a integração de sistema (interoperabilidade)
    //Com JSON eu pego as variáveis de array e serializo, ou seja, consigo vê-las em arquivos de texto

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

    //Gerar JSON de um array
    echo json_encode($pessoas);         
    
    echo "<br/>";

    //Gerar um array a partir do JSON
    $json = '[{"nome":"Tadeu","idade":29},{"nome":"Patr\u00edcia","idade":28}]';
    $data = json_decode($json,true);   //Parametro "true" para criar array, caso contrário cria-se objeto
    var_dump($data);

    echo "<br/>";
    
    //Gerar um objeto a partir do JSON
    $json = '[{"nome":"Tadeu","idade":29},{"nome":"Patr\u00edcia","idade":28}]';
    $data = json_decode($json);   //Sem o parametro "true" cria-se objeto ao invés do array
    var_dump($data);
?>




    
    