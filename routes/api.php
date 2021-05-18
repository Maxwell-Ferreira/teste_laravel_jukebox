<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Rota para listar todas as pessoas
Route::get('/pessoas', 'PessoaController@index');

//Rota para retornar uma pessoa específica
Route::get('/pessoas/{id}', 'PessoaController@show');
