<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/usuario/incluir', function () {
    return view('usuario.incluir');
});*/


Route::get('/usuario/listar', 'UsuarioController@index')->name('usuario.listar');
Route::get('/usuario/incluir', 'UsuarioController@new')->name('usuario.incluir');
Route::get('/usuario/cancelar', 'UsuarioController@cancel')->name('usuario.cancelar');

Route::get('/usuario/alterar/{id}', 'UsuarioController@update')->name('usuario.update');
Route::get('/usuario/excluir/{id}', 'UsuarioController@delete')->name('usuario.delete');
Route::get('/usuario/consultar/{id}', 'UsuarioController@view')->name('usuario.consultar');

Route::post('/usuario/salvar', 'UsuarioController@create')->name('usuario.salvar');
Route::post('/usuario/update/{id}', 'UsuarioController@save')->name('usuario.atualizar');
Route::post('/usuario//excluir/{id}', 'UsuarioController@excluir')->name('usuario.excluir');

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('search_usuario', 'UsuarioController@search')->name('search_usuario');

Route::get('novo_usuario','UsuarioController@new')->name('novo_usuario');

Route::get('consultar_usuario','UsuarioController@show')->name('consultar_usuario');

Route::get('alterar_usuario/{id}','UsuarioController@edit')->name('alterar_usuario');

Route::get('save_usuario','UsuarioController@new')->name('novo_usuario');*/




//Rotas Formulário
Route::get('/formulario/listar', 'FormularioController@index')->name('formulario.listar');
Route::get('/formulario/incluir', 'FormularioController@new')->name('formulario.incluir');
Route::get('/formulario/cancelar', 'FormularioController@cancel')->name('formulario.cancelar');

Route::get('/formulario/alterar/{id}', 'FormularioController@update')->name('formulario.update');
Route::get('/formulario/excluir/{id}', 'FormularioController@delete')->name('formulario.delete');
Route::get('/formulario/consultar/{id}', 'FormularioController@view')->name('formulario.consultar');

Route::post('/formulario/salvar', 'FormularioController@create')->name('formulario.salvar');
Route::post('/formulario/update/{id}', 'FormularioController@save')->name('formulario.atualizar');
Route::post('/formulario//excluir/{id}', 'FormularioController@excluir')->name('formulario.excluir');



/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('search_formulario', 'FormularioController@search')->name('search_formulario');

Route::get('novo_formulario','FormularioController@new')->name('novo_formulario');

Route::get('consultar_formulario','FormularioController@show')->name('consultar_formulario');

Route::get('alterar_formulario/{id}','FormularioController@edit')->name('alterar_formulario');

Route::get('save_formulario','FormularioController@new')->name('novo_formulario');
*/




//Rotas Formulário
Route::get('/usuarioformulario/listar', 'UsuarioFormularioController@index')->name('usuarioformulario.listar');
Route::get('/usuarioformulario/incluir', 'UsuarioFormularioController@new')->name('usuarioformulario.incluir');
Route::get('/usuarioformulario/cancelar', 'UsuarioFormularioController@cancel')->name('usuarioformulario.cancelar');

Route::get('/usuarioformulario/alterar/{id}', 'UsuarioFormularioController@update')->name('usuarioformulario.update');
Route::get('/usuarioformulario/excluir/{id}', 'UsuarioFormularioController@delete')->name('usuarioformulario.delete');
Route::get('/usuarioformulario/consultar/{id}', 'UsuarioFormularioController@view')->name('usuarioformulario.consultar');

Route::post('/usuarioformulario/salvar', 'UsuarioFormularioController@create')->name('usuarioformulario.salvar');
Route::post('/usuarioformulario/update/{id}', 'UsuarioFormularioController@save')->name('usuarioformulario.atualizar');
Route::post('/usuarioformulario//excluir/{id}', 'UsuarioFormularioController@excluir')->name('usuarioformulario.excluir');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('search_usuarioformulario', 'UsuarioFormularioController@search')->name('search_usuarioformulario');

Route::get('novo_usuarioformulario','UsuarioFormularioController@new')->name('novo_usuarioformulario');

Route::get('consultar_usuarioformulario','UsuarioFormularioController@show')->name('consultar_usuarioformulario');

Route::get('alterar_usuarioformulario/{id}','UsuarioFormularioController@edit')->name('alterar_usuarioformulario');

Route::get('save_usuarioformulario','UsuarioFormularioController@new')->name('novo_usuarioformulario');
*/