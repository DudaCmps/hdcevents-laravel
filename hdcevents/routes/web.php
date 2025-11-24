<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

// Rota da página inicial – mostra a lista de eventos
Route::get('/', [EventController::class, 'index']);

// Formulário de criação de eventos – só pode acessar logado
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

// Página que mostra um evento específico pelo ID
Route::get('/events/{id}', [EventController::class, 'show']);

// Rota que salva um novo evento no banco (via formulário POST)
Route::post('/events', [EventController::class, 'store']);

// Rota para deletar um evento – só pode deletar se estiver logado
Route::delete('events/{id}', [EventController::class, 'destroy'])->middleware('auth');

// Rota para editar um evento – só pode deletar se estiver logado
Route::get('events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

// Rota para atualizar um evento – só pode deletar se estiver logado
Route::put('events/update/{id}', [EventController::class, 'update'])->middleware('auth');

// Página de contato – retorna diretamente a view "contact"
Route::get('/contact', function(){
    return view('contact');
});

// Dashboard do usuário – mostra os eventos criados (requer login)
Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
