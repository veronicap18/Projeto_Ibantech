@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
                <center><div class="card-header">IBANTECH</div></center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Visando automatizar e por consequência facilitar o processo de fiscalização dos recursos naturais, mais especificamente a fauna, o Ibantech foi idealizado. Tal
                    sistema Web tem como propósito principal fornecer assistência durante a estadia
                    dos animais nos institutos, onde os cuidados necessários possam ser realizados de
                    maneira eficiente e organizada. O Ibantech permite que o funcionário público
                    cadastre novos animais no sistema, informando suas espécies, respectivas
                    quantidades e ainda o setor em que se situarão. Além disso, é possível atualizar o
                    histórico de manutenção, ou seja, informar datas importantes acerca da preservação
                    da fauna (alimentação, limpeza e vacinação). E por fim, existe a opção de apagar do
                    banco de dados animais que não mais se encontram no instituto.</p>
                    <div class="btn-group mr-3" role="group">
                      <a href = "{{route('cadastro')}}" class="btn btn-outline-primary">Cadastrar animal</a><br>
                      <a href="{{route('listar')}}" class="btn btn-outline-secondary">Listar</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
