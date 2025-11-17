<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Maria";
    $idade = "20";
    $arr = [1,2,3,4,5];

    return view('welcome',
        [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => "Estudante",
        'arr' => $arr
        ]);
});

Route::get('/produtos', function () {
    
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('/layouts/product', ['id' => $id]);
});
