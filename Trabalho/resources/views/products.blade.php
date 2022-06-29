@extends('layouts.main')

@section('Titulo', 'Produtos')

@section('content')
<h1>Tela de Produtos</h1>
<a href="/">Voltar para home</a>
@if ($busca!= '')
    <p>O Usuario esta buscando por : {{$busca}}</p>
@endif
@endsection