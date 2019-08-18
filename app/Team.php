<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = ['name', 'country', 'league'];

	protected $dates = ['deleted_at'];

	public $rules =[
					'name' 		=> 'required|min:3|max:20',
					'country' 				=> 'required|min:3|max:150',
					'league'				=> 'required|min:3|max:150'
				   ];
	
    public function player()
    {
        return $this->hasMany('App\Player');
    }


}
