@extends('layouts.main')
@section('titulo', 'Gian Eventos')
    
@section('content')
<h1>Crie um Evento</h1>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>
<form action="/events" method="POST" enctype="multipart/form-data">
@csrf
   
<div class="form-group">
    <label for="image">Imagem do Evento :</label>
    <input type="file" id="image" name="image" class="form-control-file">
</div>
<br>
<div class="form-group">
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
</div>
<br>
<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
</div>
<br>
<div class="form-group">
    <label for="title">O evento é privado?</label>
   <select name="private" id="private" class="form-control">
       <option value="0">Não</option>
       <option value="1">Sim</option>
   </select>
</div>
<br>
<div class="form-group">
    <label for="title">Descrição do Evento:</label>
   <textarea name="descrição" id="descrição" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
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
        <input type="date" class="form-control" id="date" name="date" >
    </div>
</div>
<br>
<input type="submit" class="btn btn-primary" value="Criar Evento">
</form>

</div>
@endsection