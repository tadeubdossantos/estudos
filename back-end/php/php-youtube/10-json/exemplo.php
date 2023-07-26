
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
	$.getJSON("https://viacep.com.br/ws/85802000/json", function(dados){
		console.log(dados);
		enviaParaPHP(dados);	
	});

	function enviaParaPHP(dados){
		//Converte objeto em texto
		var json = JSON.stringify(dados);
		.ajax({
			url: 'index.php', 
			data: {texto: json},
			type: 'POST'
			sucess: function(retorno){
				console.log(retorno);
			},
			error: function(erro){
				alert('Houve um erro!');
			}
		});
	}

</script>
</body>
</html>