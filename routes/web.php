<?php

Route::get('/', function () {
    return redirect()->to(route('login'));
});

Route::get('/login','LoginController@showForm')->name('login');
Route::post('/login','LoginController@login')->name('login');
Route::post('/logout','LoginController@logout')->name('logout');

Route::get('/layouts/welcome','HomeController@store')->name('home_laravel');

Route::get('/', 'HomeController@home')->name('home');



Route::get('/usuario/formulario', 'usuarioController@formulario')->name('formulario');

Route::get('/animal/cadastro', 'animalController@create')->name('cadastro');

Route::post('/animal/cadastro', 'animalController@store')->name('salvar_cadastro');

Route::delete('/animal/delete/{id}', 'animalController@destroy')->name('animal.destroy');

Route::get('/animal/excluir', 'animalController@excluir')->name('excluir');

Route::get('/animal/listar', 'animalController@listar')->name('listar');

Route::get('/animal/editar/{id}', 'animalController@editar')->name('editar');

Route::put('/animal/update/{id}', 'animalController@update')->name('update');

Route::get('/home', 'HomeController@home')->name('home');

Auth::routes();

Route::resource('manutencao','manutencaoController');

Route::get('/manutencao/create_new/{id}', 'manutencaoController@create_new')->name('atualizacao');

Route::get('/manutencao/listar_at/{id}', 'manutencaoController@index_new')->name('listar_atualizacaos');

?>
