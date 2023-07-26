<?php
    
    require_once "visitante.class.php";
    require_once "aluno.class.php";
    require_once "professor.class.php";
    require_once "bolsista.class.php";
    require_once "tecnico.class.php";
    
    $p[0] = new Visitante();    
    $p[0]->setNome("Pedro");    
    $p[0]->setIdade(30);
    $p[0]->setSexo("Masculino");    
    print_r($p[0]);
    echo "<hr/>";

    $p[1] = new Aluno();    
    $p[1]->setNome("Patricia");    
    $p[1]->setIdade(30);
    $p[1]->setSexo("Feminino");
    $p[1]->setCurso("Veterinaria");
    $p[1]->setMatricula("0001");
    $p[1]->pagarMensalidade();        
    print_r($p[1]);
    echo "<hr/>";

    $p[2] = new Bolsista();    
    $p[2]->setNome("Tadeu");    
    $p[2]->setIdade(29);
    $p[2]->setSexo("Masculino");
    $p[2]->setCurso("Engenharia Civil");
    $p[2]->setMatricula("0002");
    $p[2]->setBolsa(12.5);
    $p[2]->pagarMensalidade();    
    print_r($p[2]);
    echo "<hr/>";

    $p[3] = new Professor();    
    $p[3]->setNome("Antonio");    
    $p[3]->setIdade(59);
    $p[3]->setSexo("Masculino");
    $p[3]->setEspecialidade("Matematica");
    $p[3]->setSalario(2500);
    $p[3]->fazerAniversario();
    print_r($p[3]);
    echo "<hr/>";

    $p[4] = new Tecnico();    
    $p[4]->setNome("Cleber");    
    $p[4]->setIdade(24);
    $p[4]->setSexo("Masculino");
    $p[4]->fazerAniversario();
    $p[4]->setCurso("Redes de Computadores");
    $p[4]->setMatricula("0005");
    $p[4]->pagarMensalidade();        
    $p[4]->praticar();
    print_r($p[4]);
    echo "<hr/>";
    
    
    
?>