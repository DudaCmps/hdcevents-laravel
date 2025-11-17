<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/produtos', [EventController::class, 'products']);

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('/layouts/product', ['id' => $id]);
});
