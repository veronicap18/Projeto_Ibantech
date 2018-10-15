<head>
	<script>
		function myFunction(){
			var button = alert("Animal cadastrado com sucesso!");
		}

	</script>


</head>
<body style="background-color: #f5f8fa">
	<div style = "background-color: white; padding: 1% 1%">
		<form method="POST" action="{{route('salvar_cadastro')}}">
			{{csrf_field()}}
			<h2> Cadastro de animais </h2>
			Nome do animal: <input type = "text" name = "nome_animal"/><br>
			Espécie do animal: <input type = "text" name = "esp_animal"/><br>
			Unidade(s): <input type = "number" name = "unidades"/><br>
			Núm. do setor: <input type = "number" name = "num_setor"/><br>

			<button id = "botao_cadastro" onclick="myFunction()">Cadastrar</button>
		</form>
	</div>
	<br>
	<a href="{{route('home')}}" style = "text-decoration: none; color:#007bff">Voltar</a>	
</body>