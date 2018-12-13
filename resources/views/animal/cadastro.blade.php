{{-- <head>
	<script>
		function myFunction(){
			var button = alert("Animal cadastrado com sucesso!");
		}

	</script>


</head> --}}
{{-- <body style="background-color: #f5f8fa"> --}}
@extends('layouts.app')
@section('content')
	<div class="card-header">
		<h1 class="text-center"><b>Cadastro de Animais</b></h1>
	</div>
	<div class="card-body">
			<form method="POST" action="{{route('salvar_cadastro')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="nome">Nome do animal:</label>
					<input type = "text" name = "nome_animal" id="nome" class="form-control" required autofocus/><br>
				</div>
				<div class="form-group">
					<label for="esp_animal">Espécie do animal:</label>
					<input type = "text" name = "esp_animal" id="esp_animal" class="form-control" required/><br>
				</div>
				<div class="form-group">
					<label for="unidades">Unidade(s):</label>
					<input type = "number" name = "unidades" class="form-control" id="unidades"  min="1"  required/><br>
				</div>
				<div class="form-group">
					<label for="num_setor">Núm. do setor: </label>
					<input type = "number" name = "num_setor" class="form-control" id="num_setor" min="1" required/><br>
				</div>

				<button id = "botao_cadastro" class="btn btn-outline-primary">Cadastrar</button>
			</form>

	</div>
	<br>

@endsection
@section('back')
	<a href="{{route('home')}}" class="btn btn-outline-info mt-3">Voltar</a>
@endsection
{{-- </body> --}}
