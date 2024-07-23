<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/produtos', function () {

    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

//Paramêtro na rota esperando o ID
Route::get('/produto/{id}', function ($id) {
    return view('product', ['id' => $id]);
});

//Paramêtro na rota esperando o ID
Route::get('/produt/{id?}', function ($id = null ) {
    return view('product', ['id' => $id]);
});