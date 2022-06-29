@extends('layouts.main')
@section('title', 'Editando: '. $event->nome)
    
@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1> Edite seu periodico: </h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="form-group">
          <label for="image">Capa:</label>
          <input type="file" id="image" name="image" class="form-control-file">
          <img src="/img/events/{{$event->image}}" alt="{{$event->nome}}" class="img-preview">
      </div>
          <br>
    <div class="form-group">
       
       <label for="title">Codigo:</label>
       <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Codigo: " value="{{$event->codigo}}"> 
       </div>
       <br>
       <div class="form-group">
          <label for="title">Periodico:</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome: " value="{{$event->nome}}"> 
          </div>
          <br>
          <div class="form-group">
             <label for="title">Editora:</label>
            
             <textarea name="editora" id="editora" cols="30" class="form-control" placeholder="Editora:" value="{{$event->editora}}">{{$event->editora}}</textarea>
             </div>
             <br>
             <div class="form-group">
                <label for="title">Valor Assinatura:</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor Assinatura: " value="{{$event->valor}}"> 
                </div>
                
                <br>
                <div class="form-group">
                <label for="title">Áreas de Conhecimento: </label>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Computacao">Ciência da Computação
                </div>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Huamanas">Ciências Humanas
                </div>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Saude">Ciências da Saúde
                </div>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Sociais">Ciências Sociais Aplicadas
    
                </div>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Artes">Lingüística, Letras e Artes
                </div>
             </div>
                <div class="form-group">
                   <label for="date">Data de edição:</label>
                   <input type="date" class="form-control" name="date" id="date">
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Editar">
             </div>
    </form>
</div>
@endsection