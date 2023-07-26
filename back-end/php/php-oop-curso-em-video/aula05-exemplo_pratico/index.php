<?php
    require "conta.class.php";
    
    $c1 = new Conta();
    $c1->abrirConta("cp", "0013", "Tadeu B. dos Santos");
    $c1->consultarSaldo();
    $c1->depositar(2000);
    $c1->consultarSaldo();
    $c1->pagarMensal();
    $c1->consultarSaldo();
    $c1->sacar(3000);

    $c2 = new Conta();
    $c2->abrirConta("cc", "0017", "Ariane Cristina de Moraes");
    $c2->consultarSaldo();
    $c2->sacar(50);
    $c2->fecharConta();
?>