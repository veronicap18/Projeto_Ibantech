<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body style = "background-color: #f5f8fa">
	<div style = "background-color: white; padding: 1% 1%">
		@if (count($result) > 0)
    		@foreach ($result as $item)
      			<div class="card card-body bg-ligh">
              <p>Próxima limpeza: </p>
        		    <h3>{{$item->prox_limpeza}}</h3>
              <p>Próxima vacina: </p>
                <h3>{{$item->prox_vacina}}</h3>
              <p>Próxima alimentação: </p>
                <h3>{{$item->prox_alimentacao}}</h3>
        		<small>Written on {{$item->created_at}}</small>
      			</div>

    		@endforeach
    		{{$result->links()}}
  		@else
    		<p>Não existem animais</p>
  		@endif

		
	</div>

  <a href="{{route('home')}}">Voltar</a>
</body>