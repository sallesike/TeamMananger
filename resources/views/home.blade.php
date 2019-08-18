@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <a href="{{route('teams.index')}}">Todos os Times</a>
              <a href="{{route('teams.create')}}">Cadastrar novo time</a>
              <a href="{{route('players.index')}}">Consultar Jogadores</a>
              <a href="{{route('teams.create')}}">Cadastrar Jogador</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
