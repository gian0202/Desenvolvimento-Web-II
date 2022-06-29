@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Periodicos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Editora</th>
                
                <th scope="col">Valor da Assinatura:</th>
         
                <th scope="col">Ações</th>
              
            </tr>

        </thead>
   
    <tbody>
        @foreach($events as $event)
        <tr>
            <th scropt="row">{{$loop->index + 1}}</th>
            <td><a href="/events/{{$event->id}}">{{$event->nome}}</a></td>
            <td>{{$event->editora}}</td>

  
            <td>{{'R$ ' .$event->valor. ','.'0'. '0'}}</td>
            
           
            <td><a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"> </ion-icon> Editar</a>
            <form action="/events/{{$event->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"> </ion-icon>Deletar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    @else
    <p>Você ainda não tem Periodicos, <a href="/events/create">criar um novo</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Assinaturas</h1>
    @if(count($eventasparticipants)>0):
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Editora</th>
             
                <th scope="col">Valor da Assinatura:</th>
         
                <th scope="col">Ações</th>
              
            </tr>

        </thead>
   
    <tbody>
        @foreach($eventasparticipants as $event)
        <tr>
            <th scropt="row">{{$loop->index + 1}}</th>
            <td><a href="/events/{{$event->id}}">{{$event->nome}}</a></td>
            <td>{{$event->editora}}</td>
         
            <td>{{'R$ ' .$event->valor. ','.'0'. '0'}}</td>
            
           
            <td>
             
                <form action="/events/leave/{{$event->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger delete-btn">
                    <ion-icon name="trash-outline">
                    </ion-icon>Cancelar
                </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    @else 
    <p>Você ainda não tem assinaturas, deseja conhecer? <a href="/">veja todos!</a> </p>
    @endif
</div>

@endsection