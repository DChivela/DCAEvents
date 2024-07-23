<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $arr = [1,2,3,4,5];
    return view('welcome', ['arr' => $arr]);
});

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