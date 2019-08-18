@extends('layouts.app')
@section('content')
	
<div class="row col-md-12">	
	<div class="col-md-2"></div>
	<div class="col-md-8" align="center">
		<h2>Times</h2>
		<table class="table table-condensed table-hover border border-dark">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">País</th>
					<th scope="col">Liga</th>
					<th scope="col">Acões</th>
				</tr>				
			</thead>	
		<tbody>
			@foreach($teams as $team)
			<tr>
				<td align='left'>{{$team->name}}</td>
				<td align='left'>{{$team->country}}</td>			
				<td align='left'>{{$team->league}}</td>
				<td align='left'><a href="{{route('teams.edit', $team->id)}}">Editar</a>
				&nbsp;<form style="display: inline-block;" method="POST" 
                action="{{route('teams.destroy', $team->id)}}"                                                        
                
                title="Excluir" 
                onsubmit="return confirm('Confirma exclusão?')">
		        {{method_field('DELETE')}}{{ csrf_field() }}                                                
		        <button type="submit">
		            Excluir                                                    
		        </button></form>
				</td>

			</tr>			
			@endforeach
		</tbody>	
		</table>
	</div>
</div>

@stop