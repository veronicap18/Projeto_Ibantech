{{-- <head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head> --}}

{{-- <body style = "background-color: #f5f8fa"> --}}
@extends('layouts.app')
@section('content')
	{{-- <div style = "background-color: white; padding: 1% 1%"> --}}
	<div class="card-header">
		<h1 class="text-center"><b>Animais</b></h1>
	</div>
	<div class="card-body">

		@if (count($return) > 0)
    		@foreach ($return as $item)
      		<div class="card card-body bg-ligh mb-3">
        		<h3>{{$item->nome_animal}}</h3>
            {{-- <p>{{$item->id}}</p> --}}
        		{{-- <small>Written on {{$item->created_at}}</small> --}}
						<div class="btn-toolbar pull-right" role="toolbar">
							<div class="btn-group mr-3" role="group">
								<a href="{{route('atualizacao', [$item->id])}}" class="btn btn-outline-primary"></i>Atualizar manutenções</a>
								<a href="{{route('listar_atualizacaos', [$item->id])}}" class="btn btn-outline-success"> Visualizar histórico de manutenções</a>
								<a href="{{route('editar', [$item->id])}}" class="btn btn-outline-info">Editar</a>
							</div>
							<div class="btn-group" role="group">
								<form action="{{route('animal.destroy', [$item->id])}}" method="post" class="">
									@method('DELETE')
									@csrf
									<input type="submit" name="" value="Remover" class="btn btn-outline-danger">
								</form>
							</div>
						</div>
      		</div>

    		@endforeach
    		{{$return->links()}}
  		@else
    		<p>Não existem animais</p>
  		@endif

	</div>
@endsection
@section('back')
	<a href="{{route('home')}}" class="btn btn-outline-info mt-3">Voltar</a>
@endsection
{{-- </body> --}}
