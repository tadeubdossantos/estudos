/*
    Projeto: retornar o maior número entre dois 
*/


//Definição da função
function retornarMaiorNumero(num1, num2){
    if (num1 > num2){
        return num1;
    }
    else{
        return num2;
    }
}

//Exibição do maior valor
let result = retornarMaiorNumero(1,2);
console.log(result);
