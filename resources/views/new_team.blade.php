@extends('layouts.app')
@section('content')


@if(count($errors) > 0)
    	<div class="alert-danger">
    		@foreach($errors->all() as $erro)
    			<p>{{$erro}}</p>
    		@endforeach
    	</div>
	@endif
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-md-8">
			<form class="form-group" method="post" id="form_team" action="{{route('teams.store')}}">	
			{!! csrf_field() !!}				
				<h3>Cadastrar Time</h3>
				  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Nome</label>
			    <div class="col-sm-5">
			      <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">País</label>
			    <div class="col-sm-5">
			      <input type="text" name="country" class="form-control" id="country" placeholder="País">
			    </div>
			  </div>		
			   <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Liga</label>
			    <div class="col-sm-5">
			      <input type="text" name="league" class="form-control" id="league" placeholder="Liga">
			    </div>
			  </div>	  
			  <button class="btn btn-primary">Cadastrar</button>
	  		</form>
  		</div>
	</div>
@stop