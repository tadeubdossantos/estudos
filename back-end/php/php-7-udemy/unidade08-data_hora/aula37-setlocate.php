<?php
 
    //Função "Setlocale" para trazer o nome do dia, semana e mês em português ou outro idioma
    //Padrão de Linguagem lidar com isso no Linux é um padrão e no Windows é outro padrão
    //Outra variação é a questão da inclusão utf-8
    //Portanto, é melhor deixar o código indepedentend de plataforma ao adicionar o padrão do Linux ('pt_BR'), Windows ('portuguese') e utf-8 ('pt_BR.utf-8')

    //Mudar toda a configuração de localização para português
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");   

    //A tabela caracteres e expressões de formatação é diferente da função date
    echo strftime("%A %B");

?>


    
    