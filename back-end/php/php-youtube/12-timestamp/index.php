<?php	
	/*
		Datas em PHP 
			→ usa-se a função 'time()' para obter os segundos exato desde de 1º de janeiro de 1970.
			→ 2º parâmetro da função date() informados o timestamp, quando não informado pega o atual.
			→ Sintaxe: date(format, timestamp)
	*/

	//Obter o timestamp do momento atual exato
	echo '<pre>'.time().'</pre>';
	//Data em string convertida em timestamp
	$timestamp = strtotime("26-03-2022");
	echo '<pre>Timestamp é: '.$timestamp.'</pre>';
	//Retorna data de acordo com o timestamp
	$t = time();
	echo '<pre>'.date("Y-m-d", $t).'</pre>';
	//Converter datas textuais em inglês para timestamps
	echo '<pre>Timestamp de agora: '.strtotime("now").'</pre>';
	echo '<pre>Timestamp do dia 3 de Outubro de 2005: '.strtotime("3 October 2005").'</pre>';
	echo '<pre>Timestamp de daqui 5 horas: '.strtotime("+5 hours").'</pre>';
	echo '<pre>Timestamp de daqui 1 semana: '.strtotime("+1 week").'</pre>';
	echo '<pre>Timestamp de daqui 1 semana, 3 dias, 7 horas e 5 secundos: '.strtotime("+1 week 3 days 7 hours 5 seconds").'</pre>';
	echo '<pre>Timestamp da próxima segunda-feira: '.strtotime("next Monday").'</pre>';
	echo '<pre>Timestamp do último domingo: '.strtotime("last Sunday").'</pre>';
	//Data e hora gerada exatamente
	$format = "%d/%m/%Y %H:%M:%S";
	$strf 	= strftime($format);
	echo '<pre>'.$strf.'</pre>';
	print_r(strptime($strf,$format));
	//Printa: Quinta feira (Thursday)
	echo '<pre>24 de Março de 2022 foi dia: '.date("l", mktime(0,0,0,3,24,2022)).'</pre>';
	//Outros Exemplos:	
	echo '<pre>'.date("M-d-Y",mktime(0,0,0,12,36,2001)).'</pre>';
	echo '<pre>'.date("M-d-Y",mktime(0,0,0,14,1,2001)).'</pre>';
	echo '<pre>'.date("M-d-Y",mktime(0,0,0,1,1,2001)).'</pre>';
	echo '<pre>'.date("M-d-Y",mktime(0,0,0,1,1,99)).'</pre>';
	//Representa o dia do mês; dois dígitos com zeros à esquerda (01 ou 31)
	echo '<pre>'.date('d/m/Y').'</pre>';

	//Exemplo convertenado em timestamp usando a função 'mktime' -------------------------------------
	$dia = "06/04/2022";
	$tempdate = explode("/",$dia);
	$horario = "08:00:00";
	$temphr = explode(":",$horario);
	$timestamp = mktime($temphr[0], $temphr[1], $temphr[2], $tempdate[1], $tempdate[0], $tempdate[2]);
	echo '<pre>Timestamp do dia 06/04/2022 as 08:00:00: '.$timestamp.'</pre>';
	//Revertendo de timestamp para data
	echo '<pre>Retorno do timestamp anterior: '.date('d-m-Y H:i:s', $timestamp).'</pre>';

	




	// print_r(localtime());
	// echo "<br><br>";
	// print_r(localtime(time(),true));

	// //Formato de data hora local como um número inteiro
	// echo idate("B") . "<br>";
	// echo idate("d") . "<br>";
	// echo idate("h") . "<br>";
	// echo idate("H") . "<br>";
	// echo idate("i") . "<br>";
	// echo idate("I") . "<br>";
	// echo idate("L") . "<br>";
	// echo idate("m") . "<br>";
	// echo idate("s") . "<br>";
	// echo idate("t") . "<br>";
	// echo idate("U") . "<br>";
	// echo idate("w") . "<br>";
	// echo idate("W") . "<br>";
	// echo idate("y") . "<br>";
	// echo idate("Y") . "<br>";
	// echo idate("z") . "<br>";
	// echo idate("Z") . "<br>";

	//Obter o dia atual
	echo '<pre>'.date('d/m/Y').'</pre>';
	//Obter dia da semana (1-segunda, 2-terça... e 7-domingo)
	echo '<prev>'.date('w').'<prev>';
	//Obter o dia de amanhã
	echo '<prev>'.date('d', time()+(24*60*60)).'<prev>';
	//Obtém o dia por escrito
	echo '<pre>'.date("l").'</pre>';
	
	echo '<pre>'.time().'</pre>';




	// $data = new DateTime('2017-12-12');	//Pega a data mencionada
	// $diaN = date('w', strtotime($data->format('Y-m-d')));
	// echo '<pre>'.$diaN.'</pre>';

