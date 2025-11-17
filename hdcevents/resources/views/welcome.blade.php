@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    
<div id="search-container" class="col-md-12 ps-2 pe-2 mb-4">
    <h1 class="mb-3">Busque um evento</h1>
    <form action="">
        <input id="search" name="search" type="text" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2 class="mb-3">Próximos eventos</h2>
    <p class="mb-4">Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row gap-4 justify-content-center">
        @foreach ($events as $event)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm rounded">
                <img src="/img/event_placeholder.jpg" class="card-img-top" alt="{{ $event->title }}">
                <div class="card-body d-flex flex-column">
                    <p class="text-muted mb-1">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text text-truncate">{{ $event->description }}</p>
                    <p class="mt-auto mb-2 text-secondary">{{ $event->participants_count ?? 'X' }} Participantes</p>
                    <a href="#" class="btn btn-outline-dark mt-auto">Saber mais</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection