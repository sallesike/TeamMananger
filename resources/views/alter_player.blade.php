@extends('layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-md-8">
			<form class="form-group" method="post" id="form_player" action="{{route('players.update', $player->id)}}">	
			{!! method_field('put') !!}
			{!! csrf_field() !!}				
				<h3>Cadastrar Jogador</h3>
				  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Nome</label>
			    <div class="col-sm-5">
			      <input type="text" name="name" class="form-control" id="name" placeholder="Nome" value="{{$player->name}}">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Data de Nascimento</label>
			    <div class="col-sm-5">
			      <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" placeholder="data de nascimento" value="{{$player->dateOfBirth}}">
			    </div>
			  </div>		
			   <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Posição</label>
			    <div class="col-sm-5">
			      <input type="text" name="position" class="form-control" id="position" placeholder="Liga" value="{{$player->position}}">
			    </div>
			  </div>	  
			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Altura</label>
			    <div class="col-sm-5">
			      <input type="text" name="height" class="form-control" id="height" placeholder="Liga" value="{{$player->height}}">
			    </div>
			  </div>
			    <div class="form-group row">
			    	<div class="col-md-7">
			     		<select name='team_id' class="form-control">
			     			<option value="">Times</option>			     			
			     			@foreach($teams as $team)			     			
			     				@if($team->id == $player->team->id)
			     					<option value="{{$team->id}}" selected>{{$player->team->name}}</option>
		     					@else			     						     				
		     						<option value="{{$team->id}}">{{$team->name}}</option>
		     					@endif	
			     			@endforeach
			     		</select>
		     		</div>
		    	</div>
			  <button class="btn btn-primary">Cadastrar</button>
	  		</form>
  		</div>
	</div>
@endsection