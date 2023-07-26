/*
    2 Tipos de funções
    - Realiza uma tarefa, não devolve nada
    - Faz um cálculo ou operação e retorna algo
*/

//Não devolve nada
function dizerNome(){
    console.log("Tadeu");
}

dizerNome();

//Realiza operação e retorna algo
function multiplicarPorDois(valor){
    return valor*2;
}

let resultado = multiplicarPorDois(5);

console.log(resultado);