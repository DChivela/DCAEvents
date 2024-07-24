@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post"> <!-- Acção após clicar no botão para salvar -->
        <div class="form-group">

        </div>
    </form>
</div>

@endsection