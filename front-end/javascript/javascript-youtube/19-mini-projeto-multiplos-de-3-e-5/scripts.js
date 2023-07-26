/*
    Projeto: Múltiplos de 3 e 5
    - Somar todos os números múltiplos de 3 e 5
*/


function somar(limite){
    let totalSoma = 0;
    
    for (let i = 0; i <= limite; i++){
        if ((i % 3 == 0) && (i % 5 == 0)) totalSoma += i;       
    }
    return totalSoma;
}

somar(10);