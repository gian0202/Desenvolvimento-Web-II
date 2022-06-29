@extends('layouts.main')

@section('title', $event->title)
    
@section('content')


<div class="col-md-10 offset-md-1">
<div class="row">
<div id="image-container" class="col-md-6">
<img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->nome}}">
</div>

<div id="info-container" class="col-md-6">
    <h1>{{$event->nome}}</h1>
    <p class="event-codigo"> <ion-icon name="qr-code-outline"></ion-icon>
        {{$event->codigo}}</p>
    <p class="event-nome"><ion-icon name="book-outline"></ion-icon>{{$event->editora}}</p>
   
        <p class="event-valor"> <ion-icon name="cash-outline"></ion-icon>{{'R$ ' .$event->valor. ','.'0'. '0'}}</p>
    
    <p class="events-participants"><ion-icon name="people-outline"></ion-icon>Assinaturas: {{count($event->users)}}</p>
    <p class="event-publicado"> Publicado por: {{$eventOwner['name']}}</p>
       @if(!$hasUserJoined)
       <form action="/events/join/{{$event->id}}" method="POST">
        @csrf
<a href="/events/join/{{$event->id}}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
this.closest('form').submit();
">Assinar</a>
</form>
       @else
        <p class="already-joined-msg">Você ja tem a assinatura!</p>
       @endif
   <h3>Área de conhecimento:</h3>
   <ul id="item-list">
    @foreach($event->items as $item)
    <li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
    @endforeach
   </ul>

</div> 
</div>

</div>



@endsection