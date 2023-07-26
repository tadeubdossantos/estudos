<?php
    
    // Foreach (Para cada) - Para cada item que existe execute. (Usado para arrays)
    
    $meses = array(
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"    
    );

    foreach($meses as $mes){            //Cada valor diferente do array é armazenado pela variavel "$mes" em cada laço
        echo "O mês é ".$mes."<br/>";
    }

    $pilotos = array(
        "Rubens Barrichelo", "David Coulthard", "Michal Shumacher", "Mika Hakinnen",
        "Jarno Trulli", "Jason Button", "Felipe Massa", "Eddie Irvine",
        "Juan Pablo Montoya", "Fernando Alonso", "Ralf Shumacher", "Robert Kubica"    
    );

    echo "<br/>";

    echo "TREINO CLASSIFICATÓRIO PARA O GRANDE GP DO BRASIL<br/>";
    foreach($pilotos as $posicao => $piloto){            //A variável "$posicao" armazena as diferentes posições do vetores a cada laço 
        echo ($posicao+1)."º - ".$piloto."<br/>";
    }

    echo "<br/>";

    echo "FICHA CADASTRAL</br></br>";
?>
    <form>
        <label>Nome:</label>
        <input type="text" name="nome">
        <label>Data de Nascimento</label>
        <input type="date" name="nascimento">
        <input type="submit" name="ok">
    <form>
    <br/>
    <br/>
<?php
    
    if (isset($_GET)){
        
        foreach ($_GET as $key => $value){
            echo "Nome do Campo: ".$key."<br/>";
            echo "Valor do Campo: ".$value."<br/>";
            echo "<hr/>";
            
        }
     }
        
?>  

    
    