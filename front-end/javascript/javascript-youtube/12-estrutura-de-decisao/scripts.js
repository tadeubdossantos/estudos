/*
    Expressões Condicionais:
    - If...Else
    - Swith...Case
*/

/*
    Exemplo de If...Else:    
    - Se a hora estiver entre as 06:00 até 12:00 vamos exibir "Bom dia!"
    - Se estiver entre 12:00 até 18:00 vamos exibir "Boa tarde!"
    - Caso contrário vamos exibir "Boa noite!"
*/

let hora = 10;  //10 horas

if(hora > 6 && hora <12){   //Céódigo a ser executado se a condição for verdadeira
    console.log("Bom dia!");   
}
else if(hora > 12 && hora < 18){   //Código a ser executado se a condição for verdadeira
    console.log("Boa tarde!");
}
else{   //Código a ser executado caso nenhuma das condições anteriores forem verdadeiras
    console.log("Boa noite!");
}

/*
    Exemplo de Swith...Case
    - Usuário comum, gerente e diretor
*/

let permissao; 

permissao = "comum";

switch(permissao){
    case 'comum':   //Condição que a variável permissao posusi o valor "comum"
    console.log("Usuário Comum!");
    break;          //Encerrar o fluxo de execução

    case 'gerente': //Condição que a variável permissao posusi o valor "gerente"
    console.log("Usuário Gerente!");
    break;          //Encerrar o fluxo de execução

    case 'diretor': //Condição que a variável permissao posusi o valor "diretor"
    console.log("Usuário Diretor!");
    break;          //Encerrar o fluxo de execução

    default:    //Comando executado caso não atenda nenhuma das condições acima
    console.log("Usuário não reconhecido!");    
}

