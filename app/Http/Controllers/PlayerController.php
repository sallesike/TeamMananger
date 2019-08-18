<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use Carbon\Carbon;


class PlayerController extends Controller
{
    public $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }
    public function index()
    {
    	$players = Player::all();
        return view('players', compact('players'));
    }

     public function create()
    {
        $teams = Team::all();
        return view('new_player', compact('teams'));
    }

    public function show($id)
    {
    	$player = Player::with('player')->find($id);

    	if(!$player)
    	{
    		return response()->json([
    			'message'=> 'Record not found',
    		], 404);
    	}
    	return response()->json($player);
    }

    public function store(Request $request)
    {
    	$player = new Player();
    	$player->fill($request->all());
        $player['dateOfBirth'] = Carbon::parse($player['dateOfBirth'])->format('Y-m-d');
        $mensagens = ['name.required'               => 'O nome do jogador é obrigatório.',
                          'position.required'       => 'A posição do jogador é obrigatória'];

        $this->validate($request, $this->player->rules, $mensagens);
    	$player->save();

    	return redirect()->route('teams.index')->with('message', 'Salvo com Sucesso!');
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::all();
        return view('alter_player', compact('player', 'teams'));
    }

    public function update(Request $request, $id)
    {
		$player = Player::findOrFail($id);
        $player->name = $request->name;
        $player['dateOfBirth'] = Carbon::parse($player['dateOfBirth'])->format('Y-m-d');
        $player->dateOfBirth = $request->dateOfBirth;
        $player->position = $request->position;
        $player->height = $request->height;
        $player->team_id = $request->team_id;
		//$player->fill($request->all());
        
		$player->save();   
        return redirect()->route('players.index')->with('message', 'Salvo com Sucesso!'); 		
    }

    public function destroy($id)
    {
    	$player = Player::find($id);

    	if(!$player)
    	{
			return response()->json([
	            'message'   => 'Record not found',
	        ], 404);
    	}
    	$player->delete();
    }
}
