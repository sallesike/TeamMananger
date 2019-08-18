@extends('layouts.app')
@section('content')
	
<div class="row col-md-12">	
	<div class="col-md-2"></div>
	<div class="col-md-8" align="center">
		<h2>Jogadores</h2>
		<table class="table table-condensed table-hover border border-dark">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Data de Nascimento</th>
					<th scope="col">Posição</th>
					<th scope="col">Altura</th>
					<th scope="col">Time</th>				
					<th scope="col">Acões</th>
				</tr>				
			</thead>	
		<tbody>
			@foreach($players as $player)
			<tr>
				<td align='left'>{{$player->name}}</td>
				<td align='left'>{{$player->dateOfBirth}}</td>			
				<td align='left'>{{$player->position}}</td>
				<td align='left'>{{$player->height}}</td>
				<td align='left'>{{$player->team->name}}</td>
				<td align='left'><a href="{{route('players.edit', $player->id)}}">Editar</a>
				&nbsp;<form style="display: inline-block;" method="POST" 
                action="{{route('players.destroy', $player->id)}}"                                                        
                
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