<head>
	<script>
		function myFunction(){
			var button = alert("Animal editado com sucesso!");
		}

	</script>


</head>
<body style="background-color: #f5f8fa">
	<div style = "background-color: white; padding: 1% 1%">
		<form method="POST" action="{{route('update',[$request->id])}}">
			@method('PUT')
			{{csrf_field()}}
			<h2> Cadastro de animais </h2>
			Nome do animal: <input type = "text" placeholder="{{$request->nome_animal}}" name = "nome_animal"/><br>
			Espécie do animal: <input type = "text" placeholder="{{$request->esp_animal}}" name = "esp_animal"/><br>
			Unidade(s): <input type = "number" placeholder="{{$request->unidades}}" name = "unidades"/><br>
			Núm. do setor: <input type = "number" placeholder="{{$request->num_setor}}" name = "num_setor"/><br>

			<button id = "botao_cadastro" onclick="myFunction()">Cadastrar</button>
		</form>
	</div>
	<br>
	<a href="{{route('home')}}" style = "text-decoration: none; color: #007bff">Voltar</a>	
</body>