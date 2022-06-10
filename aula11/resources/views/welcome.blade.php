@extends('layouts.main')
@section('titulo', 'Gian Eventos')
    
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md12">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Proximos Eventos</h2>
    @endif
    <p>Veja os eventos dos proximos dias</p>
    <div id="card-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md3">
               <img src="/img/events/{{ $event->image}}" alt="{{ $event->title}}">
                <div class="card-body">
                    
                        <p class="card-date">{{date('d/m/Y',strtotime($event->date))}}</p>
                        <h5 class="card-title">{{ $event->title}} </h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{ $event->id}}" class="btn btn-primary">Saber Mais</a>
                
                </div>
            </div>
      @endforeach
      @if (count($events) == 0)
      <p>Não a eventos disponiveis</p>

          
      @endif
    </div>
</div> 
@endsection