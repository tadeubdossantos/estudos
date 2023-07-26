/*
    Projeto FizzBuzz
    - Cai muito em entrevista de emprego
    - Se o valor for divisível por 3 vai retornar "Fizz"
    - Se o valor for divisível por 5 vaiu retornar "Buzz"
    - Se o valor for divisível por 3 e 5 vai retornar "FizzBuzz"
    - Se o valor não for divisível por 3 e nem por 5 vai ser retornado o mesmo valor 
    - Se o valor não for um número deve-se retornar uma mensagem informando que não é número
*/

function fizzBuzz(entrada){
    if (typeof entrada !== 'number')
        return 'Não é um número !';
    else{
        if (entrada % 3 === 0 && entrada % 5 === 0)
            return 'FizzBuzz !';        
        if (entrada % 3 === 0)
            return 'Fizz !';        
        if (entrada % 5 === 0)
            return 'Buzz !';
    }
}

const result = fizzBuzz(20);
console.log(result);