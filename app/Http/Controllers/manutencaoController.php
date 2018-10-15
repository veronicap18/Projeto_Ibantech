<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class manutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function index_new($id)
    {
        $result = \App\manutencao::orderBy('created_at', 'desc')->where('id_animal', $id)->paginate(2);

        return view('manutencao.index')->with('result', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_new($id)
    {
        return view('manutencao.create')->with('id', $id);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $prox_limpeza = Input::get('prox_limpeza');
        $prox_vacina = Input::get('prox_vacina');
        $prox_alimentacao = Input::get('prox_alimentacao');
        $id = Input::get('id');

        $new = new \App\manutencao;
        $new->prox_limpeza = $prox_limpeza;
        $new->prox_vacina = $prox_vacina;
        $new->prox_alimentacao = $prox_alimentacao;
        $new->id_animal = $id;
        $new->save();

        return redirect('/animal/listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
