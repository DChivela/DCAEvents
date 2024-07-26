@extends('layouts.main')

@section('title', 'Focus DC')

@section('content')

        <!-- Parte da Pesquisa -->
         <div id="search-container" class="col-md-12">
                <h1>Busque um evento</h1>
                <form action="/" method="GET">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                </form>
         </div>
         <!-- Parte das apresentações dos eventos em fornmato de grelha de 3 -->
          <div id="events-container" class="col-md-12">
                <h2>Próximos Eventos</h2>
                <p class="subtitle">Veja os eventos dos próximos dias</p>
                <div id="cards-container" class="row">
                        @foreach($events as $event)
                        <div class="card col-md-3">
                                 <img src="/img/events/{{$event->image}} " alt="{{ $event->title }}"> <!--Pegando o título do banco de dados -->
                                <div class="card-date">
                                        <p>{{date('d/m/Y', strtotime($event->date))}}</p>
                                        <h5 class="card-title"> {{$event->title}} </h5>
                                        <p class="card-participants"> X Participantes</p>
                                        <a href="/events/{{$event-> id}}" class="btn btn-primary">Saber mais</a>
                                </div>
                        </div>
                        @endforeach
                        @if(count($events) == 0)
                        <p>Não há eventos disponíveis.</p>
                        @endif
                </div>
          </div>

        <!-- @foreach($events as $event)
        <p> {{ $event->title }} -- {{ $event->description }}  </p>
        @endforeach
        {{--Este é um comentário do Blade, vale mencionar que ele não aparece no navegador, nem quando irem pra inspecionar--}} -->

@endsection