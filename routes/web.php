<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('/',
function () {return view('home');});
Auth::routes();
// Route::get('auth/github', 'AuthController@redirectToProvider');
// Route::get('auth/github/', 'AuthController@handleProviderCallback');
//    Route::get('login/{provider?}', 'SocialController@getSocialAuth');
//    Route::get('login/callback/{provider?}', 'SocialController@getSocialAuthCallback');

Route::resource('planos', 'PlanosController');
Route::resource('mensagens', 'MensagensController');
Route::resource('docentes', 'DocentesController');

Route::get('atividades', 'AtividadesController@index');
Route::get('comunicados', 'ComunicadosController@index');
Route::get('eventos', 'EventosController@index');

Route::get('site', 'SiteController@index');
Route::get('central', 'CentralController@index');
Route::get('painel', 'PainelController@index');

Route::get('/home', 'HomeController@index');

Route::post('contato', 'ContatoController@index');
