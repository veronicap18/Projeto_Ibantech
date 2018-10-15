<head>
	<script>
		function myFunction(){
			var button = alert("Histórico de manutenção atualizado");
		}

	</script>


</head>
<body style="background-color: #f5f8fa">
	<form action="{{route(manutencao.store)}}">
		<div style = "background-color: white; padding: 1% 1%">
			<h2> Atualizar o histórico de manutenção </h2>
			Próxima limpeza: <input type = "date" name = "prox_limpeza"/><br>
			Próxima vacina: <input type = "date" name = "prox_vacina"/><br>
			Próxima alimentação: <input type = "date" name = "prox_alimentacao"/><br>

			<br><button id = "botao_atualizacao" onclick="myFunction()">Atualizar</button>
		</div>
		<br>
		<a href="{{route('home')}}" style = "text-decoration: none; color: #007bff">Voltar</a>		
</body>
