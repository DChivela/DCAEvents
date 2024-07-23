@extends('layouts.main')

@section('title', 'Focus DC')

@section('content')

        <h1>Título 1</h1>

        @foreach($events as $event)
        <p> {{ $event->title }} -- {{ $event->description }}  </p>
        @endforeach
        {{--Este é um comentário do Blade, vale mencionar que ele não aparece no navegador, nem quando irem pra inspecionar--}}

@endsection