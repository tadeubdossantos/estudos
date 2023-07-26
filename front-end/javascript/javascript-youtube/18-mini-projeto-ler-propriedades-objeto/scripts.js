/*
    Projeto: Ler propriedades de um objeto 
    - Exibir somente as propriedades do tipo string que estão no objeto
*/

//Objeto com informações de um filme qualquer
const filme = {
    titulo: "Vingadores",
    ano: 2008,
    personagem: "Thor"
};

//Função para retornar as propriedades do tipo string
function exibirPropriedades(obj){
    for (prop in obj){
        if (typeof obj[prop] === 'string'){
            console.log(prop+":"+obj[prop])
        }
    }
}

exibirPropriedades(filme);