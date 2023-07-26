<?php

	$date = "05/04/2022";
	$newformat = str_replace('/', '-', $date);
	echo $newformat;

	$sql = "insert into pedidos (idunidade, idconveniado, datasolicitada, urgencia, identificação, dataagendada, horaagendada, idservico, qtdservico, situacao, observacao) values ($idunidade, $idconveniado, $datasolicitada, $urgencia, $)";