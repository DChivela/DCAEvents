@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <title>Produtos</title>

    <h1>Tela de produtos</h1>
    @if ($busca != '')
    <p>O usuário está buscando por: {{$busca}} </p>
    @endif
@endsection