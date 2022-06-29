@extends('layouts.main')
@section('titulo', 'Editando: '. $event->title)
    
@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
<form action="/events/update{{$event->id}}" method="POST" enctype="multipart/form-data">
@csrf
   
<div class="form-group">
    <label for="image">Imagem do Evento :</label>
    <input type="file" id="image" name="image" class="form-control-file">
</div>
    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
<br>
<div class="form-group">
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value = {{$event->title}}>
</div>
<br>
<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value = "{{$event->city}}">
</div>
<br>
<div class="form-group">
    <label for="title">O evento é privado?</label>
   <select name="private" id="private" class="form-control">
       <option value="0">Não</option>
       <option value="1" {{$event->private == 1 ? "selected = 'selected' " : ""}}>Sim</option>
   </select>
</div>
<br>
<div class="form-group">
    <label for="title">Descrição do Evento:</label>
   <textarea name="descrição" id="descrição" class="form-control" placeholder="O que vai acontecer no evento?">{{$event->description}}</textarea>
</div>
<br>
<div class="form-group">
    <label for="title">Adicione itens de infraestrutura:</label>
    <div class="from-group">
        <input type="checkbox" name="items[]" value="Cadeiras" > Cadeiras
    </div>
    <br>
    <div class="from-group">
        <input type="checkbox" name="items[]" value="Palco" > Palco
    </div>
    <br>
    <div class="from-group">
        <input type="checkbox" name="items[]" value="Cerveja Grátis" > Cerveja Grátis
    </div>
    <br>
    <div class="from-group">
        <input type="checkbox" name="items[]" value="Open Food" > Open Food
    </div>
    <br>
    <div class="form-group">
        <label for="title">Data do Evento:</label>
        <input type="date" class="form-control" id="date" name="date" value ="{{$event->date->format('Y-m-d')}}">
    </div>
</div>
<br>
<input type="submit" class="btn btn-primary" value="Editar Evento">
</form>

</div>
@endsection