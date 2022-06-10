@extends('layouts.main')

@section('Titulo', 'Produto')

@section('content')
@if($id != null)
 <p>Exibindo produto id {{ $id}}</p>
@endif


@endsection