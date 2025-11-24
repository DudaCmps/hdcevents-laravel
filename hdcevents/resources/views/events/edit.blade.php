@extends('layouts.main')

@section('title', 'Edição: '. $event->title)

@section('content')
    
<div id="events-create-container" class="col-md-6 offset-md-3 mt-4 mb-5">
    <h1 class="mb-4">Editar evento - {{$event->title}}</h1>

    <form action="/events/update/{{ $event->id }}" method="POST" class="p-4 rounded shadow-sm bg-white" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title" class="fw-semibold">Imagem do Evento:</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <img class="img-preview" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
        </div>

        <div class="form-group mb-3">
            <label for="title" class="fw-semibold">Evento:</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Nome do evento" value="{{ $event->title }}">
        </div>

        <div class="form-group mb-3">
            <label for="date" class="fw-semibold">Data do evento:</label>
            <input class="form-control" type="date" name="date" id="date"  value="{{ date('Y-m-d', strtotime($event->date)) }}">
        </div>

        <div class="form-group mb-3">
            <label for="city" class="fw-semibold">Cidade:</label>
            <input class="form-control" type="text" name="city" id="city" placeholder="Local do evento" value="{{ $event->city }}">
        </div>

        <div class="form-group mb-3">
            <label for="private" class="fw-semibold">Evento exclusivo?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Privado</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="fw-semibold">Descrição:</label>
            <textarea style="min-height: 150px" name="description" id="description" class="form-control" placeholder="Descreva seu evento!" >{{ $event->description }}</textarea >
        </div>

        <div class="form-group mb-3">
            <label for="items" class="fw-semibold">Adicione itens de infraestrutura:</label>
           
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Sound System"> Sound System
            </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Luzes Estroboscópicas"> Luzes Estroboscópicas
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Máquina de Fumaça"> Máquina de Fumaça
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Pista de Dança"> Pista de Dança
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Lounge Chillout"> Lounge Chillout
              </div>

              <div class="form-group">
                <input type="checkbox" name="items[]" value="Painel de LED"> Painel de LED
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Área VIP"> Área VIP
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Food Truck"> Food Truck
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Banheiros Químicos"> Banheiros Químicos
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Iluminação Decorativa"> Iluminação Decorativa
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Backstage"> Backstage
              </div>
              
              <div class="form-group">
                <input type="checkbox" name="items[]" value="Cercamento do Espaço"> Cercamento do Espaço
              </div>
           
           <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
           </div>

           <div class="form-group">
            <input type="checkbox" name="items[]" value="Open Food"> Open Food
           </div>

           <div class="form-group">
            <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
           </div>
        </div>

        <input type="submit" class="btn btn-dark w-100 mt-3" value="Editar Evento">
    </form>
</div>
@endsection