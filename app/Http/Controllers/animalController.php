<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class animalController extends Controller
{
    public function create()
	{
	    return view('animal.cadastro');
	}

	public function store(Request $request)
	{
	    $nome_animal = Input::get('nome_animal');
	    $esp_animal = Input::get('esp_animal');
	    $unidades = Input::get('unidades');
	    $num_setor = Input::get('num_setor');

	    // DB::insert('insert into cadastros(nome_animal,esp_animal,unidades,num_setor)');

	    $new = new \App\animal;
	    $new->nome_animal = $nome_animal;
	    $new->esp_animal = $esp_animal;
	    $new->unidades = $unidades;
	    $new->num_setor = $num_setor;
	    $new->save();

	    return redirect('/home');
	}

	public function editar($id)
	{
		$request = \App\animal::find($id);
		return view('animal.editar')->with('request', $request);
	}
	public function update(Request $request, $id)
	{
		$nome_animal = Input::get('nome_animal');
	    $esp_animal = Input::get('esp_animal');
	    $unidades = Input::get('unidades');
	    $num_setor = Input::get('num_setor');

		$update = \App\animal::find($id)->first();
		$update->nome_animal = $nome_animal;
		$update->esp_animal = $esp_animal;
		$update->unidades = $unidades;
		$update->num_setor = $num_setor;
		$update->save();

		return redirect('/animal/listar');
	}

	public function listar()
	{
		$return = \App\animal::orderBy('created_at', 'desc')->paginate(10);
		return view('animal.listar')->with('return',$return);
	    
	}

	public function destroy($id)
	{
		$animal = \App\animal::find($id);

		$result = \App\manutencao::where('id_animal', $id)->get(['id']);
		\App\manutencao::destroy($result->toArray());
      	$animal->delete();
      	return redirect('/animal/listar');
	    
	}
}
