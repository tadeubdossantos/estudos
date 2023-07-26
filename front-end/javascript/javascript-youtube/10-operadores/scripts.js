/*
    Tipos de Operadores:
    - Aritméticos (Matemáticos)
    - Atribuição
    - Comparação
    - Lógicos
    - Bitwise
*/

//Operadores Aritméticos
let salario = 100;
console.log(salario + salario);     //Soma
console.log(salario - salario);     //Subtração
console.log(salario * salario);     //Multiplicação
console.log(salario / salario);     //Divisão
console.log(salario ** salario);    //Exponencial

//Operadores ++ --
let idade = 18;
console.log(idade++);   //Adiciona 1 unidade, mas não exibe o valor já atribuido
console.log(idade);     //Já exibe o valor adiciona 1 unidade
console.log(++idade);   //Adiciona 1 unidade, e já exibe essa 1 unidade a mais adicionada

console.log(idade--);   //Decrementa 1 unidade, mas não exibe o valor já decrementado
console.log(idade);     //Já exibe o valor decrementado 1 unidade
console.log(++idade);   //Decrementa 1 unidade, e já exibe essa 1 unidade decrementadaa

//Operadores de Atribuição - usado para atribuir valores em variáveis
let valeAlimentacao = 100;
//valeAlimentacao = valeAlimentacao + valeAlimentacao;
valeAlimentacao += valeAlimentacao; 
//valeAlimentacao = valeAlimentacao - valeAlimentacao;
valeAlimentacao -= valeAlimentacao;

/*
    Operadores de Igualdade
    - Igualdade Estritra: compara os valores e também o tipo de dado
    - Igualdade Solta: compara somente os valores e ignora o tipo de dado
*/

console.log(1 === 1);   //Compara os valores e também o tipo de dado (retorna verdadeiro)
console.log('1' === 1)  //Compara os valores e também o tipo de dado (retorna falso)

console.log(1 == 1);    //Compara somente os valores (retorna verdadeiro)
console.log('1' == 1)   //Compara somente os valores (retorna verdadeiro) (não recomendável !!!)

/*
    Operador Ternário - permite fazer operações sem o uso do if, deixando o código mais clean (limpa)
    - Forma: expressão ? verdadeiro : falso
    Exemplo: Imagina um cliente, na qual se ele tiver 100 pontos ele é cosiderado premium, caso contrário vai ser do tipo comum
*/
let pontos = 100;
let tipo = pontos > 100 ? "Premium" : "Comum";
console.log(tipo);  //Cliente comum

/*
    Operadores Lógicos - são usadas para tomar decisões em condições múltiplas
    - AND (&&): retorna true se os dois operandos forem true
    - OR (||): retorna true se um dos operandos forem true
    - NOT (!): converte um valor booleano
*/

console.log(true && true);      //Retorna true
console.log(false && true);     //Retorna false

console.log(true || true);      //Retorna true
console.log(false || true);     //Retorna true
console.log(false || false);    //Retorna false

console.log(!true);             //Retorna false
console.log(!false);            //Retorna true

//Comparações com valores não booleanos
console.log(false || true);     //Retorna true
console.log(false || 1);        //Retorna 1
console.log(false || "teste");  //Retorna "teste"

/*
    Falsy - são todos os valores que são:
    - undefined
    - null
    - 0
    - false
    - ''
    - NaN - not a number

    Truthy - valores diferentes de false e falsy

*/
let corPersonalizada = 'Vermelho';
let corPadrao = 'Azul';
let corPerfil = corPersonalizada || corPadrao;  //Encontrado o primeiro valor "true" já acaba a execução dessa linha
console.log(corPerfil);

corPersonalizada = '';
console.log(corPersonalizada || corPadrao);     //A 1º variável é Falsy, retornará o valor "Azul"

corPesonalizada = false;
console.log(corPersonalizada || corPadrao);     //A 2º variável é é Truthy, retornará o valor "Azul"
