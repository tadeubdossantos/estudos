<?php

	/*
		Arquivos .htacces (arquivos de configuração distribuida) - fornecem opções de configurações por diretório. Este arquivo contendo diretrizes de configurações dentro de um diretório faz com que as diretrizes sejam aplicadas no diretório e os subdiretórios subsequentes.
			→ Obs: um arquivo .htacces numa subpasta anula a ação da pasta anterior, passando a agir sobre esta pasta e suas subpasta.

		→ <IfModule> - diretiva indicando que algum módulo de configuração será configurado
		→ mod_rewrite - módulo que usa mecanismo de reescrita baseada em regras baseando-se em um analisador de expressões regulares (PCRE) de modo a reconfigurar as URLs solicitadas. 
		→ Variáveis - usadas de forma demilitada com %{}
			- REMOTE_ADDR - é o IP do host remoto
			- REQUEST_FILENAME - caminho completo do arquivo que atende o request original, tomando por base o filesystem da máquina;
			- REQUEST_SCHEME - retorna usualmente http ou https, dependendo da conexão
			- REQUEST_URI - tem o caminho da requisição. Ex: index.html; Ela não inclui a query, tudo que vem a partir de '?' em diante é retornado em QUERY_STRING
			- RewriteCond - condições para aplicar ou não no redirecioamento
				→ Sintaxe: RewriteCond TestStrig CondPattern
					- Onde 'CondPattern' é uma REGEXP compatível com perl, com alguns acréscimos:
						* -d pega o resultado da TestString e verifica se é um diretório existente
						* -f pega o resultado da TestString e verifica se é um arquivo existente
						* -s faz o mesmo que é -f, mas só considera arquivos não vazios
						* -l verifica se o resultado da TestString é caminho para um link simbólico
						* -x verifica se o resultado da TextString é um caminho com permissão +x
						* -F equivalente ao -f, mas faz um teste para saber se o arquivo é realmente acessível pelo Apache. Isso implica fazer uma requisição interna extra no teste, cuidado com o uso em excesso.
						* 
		


		Fonte: https://www.linkedin.com/pulse/urls-amig%C3%A1veis-descomplicando-o-htaccess-modrewrite-g-luna-freire/?originalSubdomain=pt 
	*/

	if (isset($_GET['rota'])) echo $_GET['rota'];
	if (!($_GET)) echo 'nada!';	
	echo 'teste';