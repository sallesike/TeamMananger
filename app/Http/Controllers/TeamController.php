<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{

    public $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function index()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }

    public function create()
    {
        return view('new_team');
    }

    public function store(Request $request)
    {
        $team = new Team();
        $team->fill($request->all());
         $mensagens = ['name.required' => 'O campo nome é obrigatório.',
                          'country.required'                => 'O país é obrigatorio',
                           'league.required'            => 'Defina a liga do seu time'];
        $this->validate($request, $this->team->rules, $mensagens);
        $team->save();

        return redirect()->route('teams.index')->with('message', 'Salvo com Sucesso!');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('alter_team', compact('team'));
    }

    public function show($id)
    {
    	$team = Team::find($id);

    	if(!$team)
    	{
    		return response()->json([
    			'menssage' => 'Record not found',
    		], 404);
    	}
    	return response()->json($team);
    }
    

    public function update(Request $request, $id)
    {  	           
        $team = Team::findOrFail($id);
        $team->fill($request->all());
        $team->save();

        return redirect()->route('teams.index')->with('message', 'Time Salvo com Sucesso!');

    }

    public function destroy($id)
    {
    	$team = Team::find($id);
    	$team->delete();
        return redirect()->route('teams.index')->with('message', 'Time deletado');
    }
}
