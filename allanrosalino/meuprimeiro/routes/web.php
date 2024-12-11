<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});


/*Route::get('/', function () {
    return view('comida.FormComidas');
});*/

Route::post('/RotaComida', ['uses' => 'App\Http\Controllers\comidaController@index']);

Route::post('/essavisao');

/*Route::get('/olaRosalin', function () {
    return 'ola Allan Rosalin';
});*/

Route::get('/faleconosco/{id?}', function ($id = null) {
    return "recebi o valor = $id";
});

//rota que retornará visão contato
Route::post('/contato', ['uses'=>'App\Http\Controllers\contatoController@index']);

