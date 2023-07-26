<?php

//Constante
define('ENDERECO','Rua Augusto Estevan, 170 Jd. Europa');
echo '<pre>'.ENDERECO.'</pre>';

//Verificar se é um array
$veiculos = array('Gol', 'Celta', 'Palio', 'Fiesta');
$isarray  = is_array($veiculos); 
if ($isarray) echo '<pre>É um array</pre>';

//Atribuir o valor de cada posição do vetor em uma variável
$cores = array("Vermelho", "Verde", "Amarelo", "Azul");
foreach($cores as $valor) echo '<pre>'.$valor.'</pre>';

//Atribuir o valor de cada chave e valor em variáveis no vetor
$idades = array("Bruna" => "35", "Rafael" => "37", "Joe" => "43");
foreach($idades as $x => $valor) 
	echo '<pre>'.$x.' tem '.$valor.' anos de idade</pre>';

//Verificar a existência de uma variável
if (isset($veiculos)) echo '<pre>Variável $veiculos existe</pre>'; 

//Obter quantidade de caracteres de uma string
$nome 	= "Jesus";
$qtdstr = strlen($nome);
echo '<pre>Jesus tem '.$qtdstr.' letras</pre>';

//Verificar se um variável é string
if (is_string($nome)) echo '<pre>Variável $nome é do tipo string</pre>';

//Encontrar a posição da 1º ocorrência de uma string
$jogo 		= 'bingo';
$encontrar 	= 'g';
$posicao 	= strpos($jogo,$encontrar);
echo '<pre> A letra g foi encontrada na posição '.$posicao.'</pre>';

//Encoda a representação em json
$prof 		= ['Alex' => 'Motoqueiro', 'Francis' => 'Mecânico', 'Juliano' => 'Estoquista'];
$json_prof 	= json_encode($prof);
echo '<pre>'.$json_prof.'</pre>';

//Verificar se a variável é número ou uma string númerica
$idade = 32;
if (is_numeric($idade)) echo '<pre>A variável $idade é númerica</pre>';
$anoNasc = '1989';
if (is_numeric($anoNasc)) echo '<pre>A variável $anoNasc é uma string númerica</pre>';

//Verificar se uma variável é vazia
if (empty($isAuthentication)) echo '<pre>Variável $isAuthentication está vazia!!!</pre>'; 

//Realiza pesquisa por uma expressão regular e a substitui
$str = 'PHP   é    ótimo';
echo '<pre>'.preg_replace('/\s\s+/',' ',$str);

//Elimina todo qualquer outro caracterer que não seja número
$doc = '382.252.038-11';
echo '<pre>'.preg_replace('/[^0-9]/','',$doc).'</pre>';

//Cripografia
$password = '123';
echo '<pre>Senha hacheada: '.hash('sha512', $password).'</pre>';

//Gara um ID exclusivo com base no microtempo
echo '<pre>ID: '.uniqid().'</pre>';		

//Depuração de Código
var_dump($prof);

//Saída de Texto
print_r($nome);

//Retonar a string após uma determinada posição
echo '<pre>'.substr($nome,3).'</pre>';
echo '<pre>'.substr($nome,-2).'</pre>';

//Converter uma string para minúsculo e maiúsculo
$rua = 'Augusto Litholdo';
echo '<pre>'.strtolower($rua).'</pre>';
echo '<pre>'.strtoupper($rua).'</pre>';

//Dividir uma string em vetores
$pizza = 'pedaço1 pedaço2 pedaço3 pedaço4';
$pizzas = explode(' ',$pizza);
foreach ($pizzas as $pedaco) echo '<pre>'.$pedaco.'</pre>';

//Juntar elementos de um vetor para string
$nomeCompleto = ['Joao', 'Silva'];
$partsNome = implode(', ',$nomeCompleto);
echo '<pre>'.$partsNome.'</pre>'; 

//Juntar elementos de um vetor para uma string (semelhante ao implode)
$nomeCompleto = ['Joao', 'Silva'];
$partsNome = join(', ',$nomeCompleto);
echo '<pre>'.$partsNome.'</pre>'; 

//Obtém as chaves ou parte das chaves de um array
$array = [0 => 100, "cor" => "vermelho", 'carro' => 'gol'];
print_r(array_keys($array));

//Converte valor numérico em string
$anoCarro = 2008;
var_dump($anoCarro);			//Tipo númerico inteiro
var_dump(strval($anoCarro));	//Convertido para tipo string

//Criar um password hash
$senha = '123';
echo '<pre>Senha criada com password_hash: '.password_hash($senha, PASSWORD_DEFAULT).'</pre>';

//Verifica se uma função já foi definida
function getName(){ return 'Tadeu'; }
if (function_exists(getName))	echo '<pre>Função "getName" existe !!!</pre>';

//Listar arquivos e diretórios em um caminho especiado
$path = '../';
foreach (scandir($path) as $dir) echo '<pre>'.$dir.'</pre>';

//Informa o nome informado é um diretório
$path = '../14-cookie/';
if (is_dir($path)) echo '<pre>É um diretório !!!</pre>';

//Retorna o path absoluto canonicalizado
echo '<pre>'.realpath($path).'</pre>';

//Substituir uma ocorrência de string por uma outra
$substuir 	= 'Pedro';
$frase		= 'João é um cara muito legal !!!';
$busca		= 'João';
echo '<pre>'.str_replace($busca, $substuir, $frase).'</pre>';

//Versão do 'str_replace' que não diferencia maíusculas de minúsculas
$substituir = 'Corolla';
$busca		= 'Civic';
$frase		= 'civic é melhor que Jetta !!!';
echo '<pre>'.str_ireplace($busca, $substituir, $frase).'</pre>';

//Verifica se uma classe foi definida
class Car{
	private $modelo;
	private $estaLigado;
	function ligar(){
		self::$estaLigado = true;
	}
}
//Sintaxe: class_exists(classe, se deve ser chamada assumindo true ou false)
if (class_exists('Car')) 
	echo '<pre>Classe "Car" já foi definida!!!</pre>';

//Verificar se um método já foi definido
if (method_exists('Car','ligar')) echo '<pre>Método "ligar()" já foi definida!!!</pre>';

//Verificar se a variável é um objeto
$palio = new Car();
if (is_object($palio))
	echo '<pre>A variável "$palio" é um objeto !!!</pre>';

//Retirar espaços no ínicio e no fim de uma string
$msg = '   O São Paulo é campeão paulista de 2022!!!   ';
echo '<pre>'.trim($msg).'</pre>';

//Quantidade de posições em um vetor
$jogadores = ['Messi', 'Neymar', 'Cristiano Ronaldo'];
echo '<pre>Quantidade de posições do vetor "$jogadores": '.count($jogadores).'</pre>';

//Verifica se existe um valor em um array
if (in_array('Neymar', $jogadores)) echo '<pre>Existe!!!</pre>';
if (in_array('Casemiro', $jogadores)) 
	echo '<pre>Existe!!!</pre>'; 
else 
	echo '<pre>Não existe!!!</pre>';

//Adicionar um ou mais elementos em um array
array_push($jogadores, 'Casemiro', 'Di Maria', 'Felipe Coutinho');
$jogadores[] = 'Vinicius Junior';
print_r($jogadores);