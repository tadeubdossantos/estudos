<?php
    
    require_once "pessoa.class.php";
    require_once "funcionario.class.php";
    require_once "professor.class.php";
    require_once "aluno.class.php";

    $p[0] = new Pessoa();
    $p[1] = new Aluno();
    $p[2] = new Professor();
    $p[3] = new Funcionario();

    $p[0]->setNome("Pedro");
    $p[1]->setNome("Maria");
    $p[2]->setNome("Claudio");
    $p[3]->setNome("Fabiana");

    $p[0]->setIdade(30);
    $p[1]->setIdade(15);
    $p[2]->setIdade(45);
    $p[3]->setIdade(30);

    $p[0]->setSexo("Masculino");
    $p[1]->setSexo("Feminino");
    $p[2]->setSexo("Masculino");
    $p[3]->setSexo("Feminino");

    $p[0]->fazerAniversario();
    $p[1]->setCurso("Informatica Basica");
    $p[2]->setSalario(2500.75);
    $p[3]->setSetor("Estoque");

    $p[1]->cancelarMatr();
    $p[2]->receberAumento(550.20);
    $p[3]->mudarTrabalho("Auxiliar Administrativo");
        
    print_r($p[0]);
    echo "</br>";
    print_r($p[1]);
     echo "</br>";
    print_r($p[2]);
     echo "</br>";
    print_r($p[3]);
    
?>