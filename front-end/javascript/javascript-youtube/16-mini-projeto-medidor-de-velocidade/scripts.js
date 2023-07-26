/*
    Projeto: verificador de velocidade
    - Vai verificar a velocidade dos veiculos e determinar quantos pontos os motoristas vão receber na carteira
    - A velocidade máxima permita vai ser de 70 km/h
    - A cada 5 km acima do limite ganha-se 1 ponto na carteira
    - Usar a função Math.floor() para arredondar os valores da velocidades
    - Caso os pontos serem maiores que 12 a carteira é suspendida
*/

function verificadorVelocidade(velocidade){
    const velocidadeMax = 70;
    const kmPorPonto = 5;
    if (velocidade > velocidadeMax){
        let diferenca = velocidade - velocidadeMax;
        pontos = Math.floor(diferenca / kmPorPonto);
        
        if (pontos > 12)
            return "Habilitação está suspensa, pois levou "+pontos+" pontos na carteira !";
        else
            return "Levou "+pontos+" na carteira de habilitação !";              
    }
    else
        return "Velocidade adequada !";
}

console.log(verificadorVelocidade(180)); 