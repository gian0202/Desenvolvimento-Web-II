@extends('layouts.main')

@section('title', 'Periodicos')
    
@section('content')

<div id="search-container" class="col-md-12">
<h1>Busque o Periodico</h1>
<form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
</form> 

</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Livros, revistas, tudo aqui!</h2>

    @endif
    <p class="subtitle">Veja aqui</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img class="imagem" src="/img/events/{{$event->image}}" alt="">
            <div class="card-body">
                <div class="card-date">{{date('d/m/Y', strtotime($event->date))}}</div>
                <div class="card-title">{{$event->nome}}</div>
                <a href="/events/{{ $event->id}}" class="btn-primary"> Compre Aqui </a>
            </div>
        </div>
            
        @endforeach
        @if(count($events) == 0 && $search)
        <p>Não foi possivel encontrar {{$search}}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
        <p>Não há Livros, revistas e outros disponiveis</p>

        @endif
    </div>
</div>
@endsection