<?php
	/*Ponteiro: O uso do ponteiro permite alterar uma variável que esteja fora do escopo de uma função
		→ 
	*/
	$variavel = 'teste';
	function testando(&$variavel){$variavel = 'teste 123';}
	testando($variavel);
	echo $variavel;









