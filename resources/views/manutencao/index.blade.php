{{-- <head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head> --}}

{{-- <body style = "background-color: #f5f8fa"> --}}
@extends('layouts.app')
@section('content')
	<div class="card-header">
		<h1 class="text-center"><b>Manutenção</b></h1>
	</div>
	<div class="card-body">
		@if (count($result) > 0)
    		@foreach ($result as $item)
      			<div class="card card-body bg-ligh mb-3">
							<div class="row">
								<div class="col">
									<h5><b>Próxima limpeza: </b></h5>
									<h5>{{$item->prox_limpeza}}</h5>
								</div>
								<div class="col">
									<h5><b>Próxima vacina: </b></h5>
									<h5>{{$item->prox_vacina}}</h5>
								</div>
								<div class="col">
									<h5><b>Próxima alimentação: </b></h5>
									<h5>{{$item->prox_alimentacao}}</h5>
								</div>
							</div>
      			</div>

    		@endforeach
    		{{$result->links()}}
  		@else
    		<p>Não existem manuteções</p>
  		@endif


	</div>

{{-- </body> --}}
@endsection
@section('back')
	<a href="/animal/listar" class="btn btn-outline-info mt-3">Voltar</a>
@endsection
