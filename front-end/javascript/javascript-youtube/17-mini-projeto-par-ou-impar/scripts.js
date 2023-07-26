/*
    Projeto: Par ou Impar
    - Entrar com um número 
    - Exibir para cada número antes até o informado se eles são pares ou impares*/

function exibirTipo(limite){
    for (let i = 0; i <= limite; i++){
        if (i % 2 == 0)
            console.log("O número "+i+" é par !");
        else
            console.log("O número "+i+" é impar!");
    }
}

exibirTipo(10)