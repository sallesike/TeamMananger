<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = ['name', 'dateOfBirth', 'position', 'height', 'team_id'];

	 protected $dates = ['deleted_at'];

	 public $rules =[
					'name' 		=> 'required|min:3|max:20',
					'position' 				=> 'required|min:3|max:150'
				   ];


 	public function team() 
  	{
    	return $this->belongsTo('App\Team');
    }
}