@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST"> <!-- Acção após clicar no botão para salvar -->
        <!-- Protecção do Laravel -->
     @csrf 

        <!-- Primeiro Campo - Título --> 
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        
        <!-- Segundo Campo - Cidade -->
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>

        <!-- Terceiro Campo - Descrição -->
        <div class="form-group">
            <label for="private">Privacidade do evento:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <!-- Quarto Campo - Descrição -->
        <div class="form-group">
            <label for="description">Descrição do Evento:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection