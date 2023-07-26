    <?php
 
    //O uso de Classe DateTime deixa os tipos de dados de tempo fortemente tipada
    //A classe também possui mais funcionalidades se comparado a somente usar a função date()
    //É mais prático trabalhar com dados de tempo com o tipo de classe DateTime    

    //Instanciação de uma nova data e horário
    $dt = new Datetime();
    //Formatar a data atual e horário atual
    echo $dt->format("d/m/Y H:i:s");   //Expressão igual à função date()
    
    echo "<br/>";

    //Instanciação de uma nova data e horário
    $dt = new Datetime();
    //Adicionar 15 dias sobre a data atual
    $periodo = new DateInterval("P15D");
    $dt->add($periodo);
    //Formatar a data atual e horário atual
    echo $dt->format("d/m/Y H:i:s");   //Expressão igual à função date()
       
    echo "<br/>";
?>


    
    