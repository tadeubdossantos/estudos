/*
    Array
    - Conjunto de dados que podem ser acessados por um índice
    - Índice: Posição exata onde se encontra uma determinada informação em um conjunto de informações 
*/

let idadeFamilia = [26,45,50,17];
console.log(idadeFamilia)    //Exibe todos os valores do array 

console.log(idadeFamilia[2]);   //Exibe o valor da 3º posição do array (o 1º índice corresponde a 0)

// Observação 01: cada posição do array pode ser de qualquer tipo de dado
let aleatorio = [true, 45, "Hoje o dia está lindo !!!"];

// Observação 02: os arrays também fazem parte dos objetos
console.log(idadeFamilia.length);   //Exibe a propriedade que tem a informação da quantidade de posições do array