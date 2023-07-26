<?php
	
/*
	Json → JavaScript Object Notation; 
	* Formato de dados bem versátil; 
	* Adotado por várias linguagens para comunicação entre sistemas; 
	* Facilita a integração de novas APIs em sistemas com linguagens diferentes; 
	* Veio para concorrer com xml na qual tem marcações como se fosse tags html é muito pesado porque abre uma instrução, fecha uma instrução e tendo muito mais informação, tem muita mais caracteres se comparado ao Json
	* Transforma dados e um objeto ou em uma matriz em texto e o contrário também, transforma um texto em um objeto ou em uma matriz
	* json_encode() → converte array/objeto em texto, uma string JSON;
	* json_decode() → converte um texto JSON em um objeto ou matriz;
*/

	//Converter array em json

	$texto ='{
				  "cep": "85802-000",
				  "logradouro": "Rua Curitiba",
				  "complemento": "até 404/405",
				  "bairro": "Parque São Paulo",
				  "localidade": "Cascavel",
				  "uf": "PR",
				  "ibge": "4104808",
				  "gia": "",
				  "ddd": "45",
				  "siafi": "7493"
				}';

	//Transformar de texto para variável objeto			
	$dados = json_decode($texto);
	//var_dump($dados); 

	//Acessar um atributo do objeto
	//echo $dados->bairro;
	
	//Quando passa um segundo parâmetro como "true" significa que ativou o modo de matriz associativa
	$dados = json_decode($texto, true); 
	//var_dump($dados);
	
	//Acresentar um dado
	$dados['profissao'] = "Programador";
	//var_dump($dados);

	//Converter para texto (Json)
	//O 2º parâmetro "JSON_PRETTY_PRINT" deixa o JSON melhor vizualizado
	$json = json_encode($dados, JSON_PRETTY_PRINT);
	//echo $json;

	$texto = $_POST['texto'];
	//Decodida para transformar em uma matriz associativa
	$dados = json_decode($textom,true);
	$dados['professor'] = "PHP";
	
	//Converte em texto JSON
	$json = json_encode($dados);
	echo $json;