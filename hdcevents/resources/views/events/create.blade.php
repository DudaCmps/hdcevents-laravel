@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    
<div id="events-create-container" class="col-md-6 offset-md-3 mt-4 mb-5">
    <h1 class="mb-4">Crie o seu evento!</h1>

    <form action="/events" method="POST" class="p-4 rounded shadow-sm bg-white" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title" class="fw-semibold">Imagem do Evento:</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>

        <div class="form-group mb-3">
            <label for="title" class="fw-semibold">Evento:</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Nome do evento">
        </div>

        <div class="form-group mb-3">
            <label for="city" class="fw-semibold">Cidade:</label>
            <input class="form-control" type="text" name="city" id="city" placeholder="Local do evento">
        </div>

        <div class="form-group mb-3">
            <label for="private" class="fw-semibold">Evento exclusivo?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1">Privado</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="fw-semibold">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva seu evento!"></textarea>
        </div>

        <input type="submit" class="btn btn-dark w-100 mt-3" value="Criar Evento">
    </form>
</div>
@endsection