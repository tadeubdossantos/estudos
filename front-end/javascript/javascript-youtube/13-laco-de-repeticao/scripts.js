/*
    Exemplo:
    - Imagina-se que nós precisamos escrever "Estou aprendendo" 5 vezes
*/

//Maneira não eficiente (é recomendável usar laços de repetição)
console.log("Estou aprendendo");
console.log("Estou aprendendo");
console.log("Estou aprendendo");
console.log("Estou aprendendo");
console.log("Estou aprendendo");

/*
    Loop ou Laços de repetição:
    - For
    - While
    - Do..While
    - For..In
    - For.Of
*/

/*
    For
    - 1º Parametro: Inicializa um contador ou índice
    - 2º Parametro: Estabelece a condição para o laço executar
    - 3º Parametro: Incrementa o contador ou índice
*/
for (let i = 0; i < 5; i++){
    console.log("Estou aprendendo"); 
}

/*
    While
    - Deverá declarar a variável de índice (contador) fora do loop
    - Somente informa a condição
*/

let j = 5;

while(j >= 1){
    console.log("Estou aprendendo"); 
    j--;
}

/*
    Do While
    - Deverá declarar a variável de índice (contador) fora do loop
    - Somente informa a condição lá em baixo
    - Vai executar no mínimo uma vez, independente da condição
    - Pouco usado se comparado ao For e o While
*/
let l = 0;

do{
    console.log("Estou aprendendo");
    l++;
}while(l<5)

/*
    For..In
    - Acessar propriedades de um objeto ou elementos de um array
    - Usa-se o conceito de key-value (chave e valor)
*/
const pessoa = {
    nome: "Joao",   //key-value, onde chave é "nome" e o valor é "joao"
    idade: 25
};

for(let chave in pessoa){   
    console.log(chave);         //Imprime o indice de propriedade
    console.log(pessoa[chave])  //Imprime o valor da propriedade
}

/*
     For..Of
     - Forma mais simples de trabalhar com iteração sobre arrays
     - Mais simplicado que o For..In
*/

const cores = ['Vermelho', 'Azul', 'Verde'];

for(let cor of cores){
    console.log(cor);
}



