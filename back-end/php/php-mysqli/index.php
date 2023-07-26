<!DOCTYPE HTML>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>PHP com Mysqli para Iniciantes </title>
</head>
<body>
    <?php
        require 'config.php';
        require 'connection.php';
        require 'database.php';
        
        /*
        $nome   = "Tadeu 'Bispo'";
        $dados  = array(
            'nome' => "Tadeu 'Bispo'",
            'idade' => 29
        ); 
        
        $dados = DBEscape($dados);
        var_dump($dados);
    
        $query  = "INSERT INTO clientes (nome) VALUES ('Tadeu Bispo dos Santos')";
        $result = DBExecute($query);
        var_dump($result);
        */
        
        $table      = 'clientes';
        $cliente    = array(
                'nome'  => 'Tadeu Bispo',
                'email' => 'tadeub.dossantos@gmail.com',
                'idade' => 29,
                'status' => 1        
        );
        
        /*$grava = DBCreate($table, $cliente);
        if ($grava == true){
            echo "Cadastro Realizado com Sucesso!";
        }
        else{
            echo "Cadastro não Realizado! Houve algum erro!";
        }*/
    
        /*
        $table  = "Clientes";
        $fields = "nome, idade";
        $params = "WHERE status = 0";
        var_dump(DBRead($table, $fields, $params));
        */
        
        /*
        $cliente = array(
            "status"    => 2,
            "idade"     => 28
        );
            
        $result = DBUpdate("clientes", $cliente, "id = 1");
        if ($result){
            echo "Atualização Realizada com Sucesso!";
        }
        else{
            echo "Atualização não Realizada! Ocorreu algum problema!";
        }
        */
    
        
        $result = DBDelete("clientes", "idade='29'");
        if ($result){
            echo "Exclusão Realizada com Sucesso!";
        }
        else{
            echo "Exclusão não Realizada! Ocorreu algum problema!";
        }
    
    
  
    ?>
</body>
</html>