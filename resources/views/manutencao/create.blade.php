<head>
	<script>
		function myFunction(){
			var button = alert("Histórico de manutenção atualizado");
		}

	</script>


</head>
<body style="background-color: #f5f8fa">
		<div style = "background-color: white; padding: 1% 1%">
			<form method="POST" action="{{route('manutencao.store')}}">
				{{csrf_field()}}
				<h2> Atualizar o histórico de manutenção </h2>
				Próxima limpeza: <input type = "date" name = "prox_limpeza"/><br>
				Próxima vacina: <input type = "date" name = "prox_vacina"/><br>
				Próxima alimentação: <input type = "date" name = "prox_alimentacao"/><br>
				<input type="number" name="id" value="{{$id}}" style="display:none;">

				<br><button id = "botao_atualizacao" onclick="myFunction()">Atualizar</button>
			</form>
		</div>
		<br>
		<a href="{{route('home')}}" style = "text-decoration: none; color: #007bff">Voltar</a>		
</body>
