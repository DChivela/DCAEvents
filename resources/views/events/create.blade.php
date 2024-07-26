@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data"> <!-- Acção após clicar no botão para salvar -->
        <!-- Protecção do Laravel -->
        @csrf

        <!-- Campo do File -->
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <!-- Primeiro Campo - Título -->
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
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

        <!-- Checkbox - Usando Json -->
        <div class="form-group">
            <label for="description">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja"> Cerveja
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Fast Food"> Fast Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Pipocas"> Pipocas
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection