@extends('layouts.main')

@section('title', 'Focus DC')

@section('content')

        <h1>Título 1</h1>
        <img src="/img/evento01.jpg" alt="" srcset="">

        @for ($i = 0; $i < count ($arr); $i++)
        <p> {{$arr[$i]}} </p>
        @endfor

        {{--Este é um comentário do Blade, vale mencionar que ele não aparece no navegador, nem quando irem pra inspecionar--}}

@endsection