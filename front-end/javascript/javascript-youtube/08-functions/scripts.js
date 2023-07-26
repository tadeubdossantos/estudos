/*
    Fuctions ou Funções
     - Base de todo software
     - Controla o fluxo de execução para entrada e saída de dados
     - Nomear funções:
        - Regra recomendada: Verbo + Substantivo
*/

let corSite = "Azul";

function resetarCor(){
    corSite = "Nenhuma Cor";
}

console.log(corSite);   //Exibe a cor inicial
resetarCor();           //Executa a função que vai resetar a cor
console.log(corSite);   //Exibe a cor depois da execução da função

//Exemplo de função com passagem de parâmetro (passar variável como argumento da função)
function inserirCor(cor){
    corSite = cor;
}

inserirCor("Vermelho"); //Adiciona a cor vermelha
console.log(corSite);   //Exibe a cor adicionada

//Exemplo de função com 2 parâmetros para ser passado
function inserirCorTonalidade(cor, tonalidade){
    corSite = cor + tonalidade;
}

inserirCorTonalidade("verde", " claro");    //Adiciona a cor verde claro 
console.log(corSite);                       //Exibe a cor e a tonalidade adicionada
