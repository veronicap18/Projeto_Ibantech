<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body style = "background-color: #f5f8fa">
	<div style = "background-color: white; padding: 1% 1%">

		@if (count($return) > 0)
    		@foreach ($return as $item)
      			<div class="card card-body bg-ligh">
        		<h3>{{$item->nome_animal}}</h3>
            <p>{{$item->id}}</p>
        		<small>Written on {{$item->created_at}}</small>
            <a href="{{route('atualizacao', [$item->id])}}">Atualizar manutenções</a>
            <a href="{{route('listar_atualizacaos', [$item->id])}}"> Visualizar histórico de manutenções</a>
            <a href="{{route('editar', [$item->id])}}">Editar</a>
      			<form action="{{route('animal.destroy', [$item->id])}}" method="post" class="">
         			@method('DELETE')
          			@csrf
          			<input type="submit" name="" value="Remover" class="btn btn-danger m-2 m-y-0">
        		</form>
      			</div>

    		@endforeach
    		{{$return->links()}}
  		@else
    		<p>Não existem animais</p>
  		@endif

		<a href="{{route('home')}}" style = "text-decoration: none; color: #007bff">Voltar</a>
	</div>
</body>