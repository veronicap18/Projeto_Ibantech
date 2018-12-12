{{-- <head>
	<script>
		function myFunction(){
			var button = alert("Histórico de manutenção atualizado");
		}

	</script>


</head> --}}
@extends('layouts.app')
@section('content')
	<div class="card-header">
		<h1 class="text-center"><b>Atualizar historico de manutenções</b></h1>
	</div>
	<div class="card-body">
	{{-- <body style="background-color: #f5f8fa"> --}}
		<form method="POST" action="{{route('manutencao.store')}}">
			{{csrf_field()}}
			<div class="form-group">
				<label for="prox_limpeza">Próxima limpeza:</label>
				<input type = "datetime" name = "prox_limpeza" class="form-control" placeholder="YYYY-MM-DD"/><br>
			</div>
			<div class="form-group">
				<label for="prox_vacina">Próxima vacina:</label>
				<input type = "datetime" name = "prox_vacina" class="form-control" placeholder="YYYY-MM-DD"/><br>
			</div>
			<div class="form-group">
				<label for="prox_alimentacao">Próxima alimentação:</label>
				<input type = "datetime" name = "prox_alimentacao" class="form-control" placeholder="YYYY-MM-DD"/><br>
			</div>
			<input type="number" name="id" value="{{$id}}" style="display:none;">

			<br><button id = "botao_atualizacao" class="btn btn-outline-primary">Atualizar</button>
		</form>
	</div>
	<br>



@endsection
@section('back')
	<a href="/animal/listar" class="btn btn-outline-info mt-3">Voltar</a>
@endsection
