<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

	protected function insert_validation() 
	{
		return array(
				'state_name'	=> 'required|unique:states,name',
				'country'	=> 'required',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'state_name'	=> 'required|unique:states,name,'.$id,
				'country'	=> 'required',
				);
	}

	public function getCountryFromState() {
		return $this->belongsTo('App\models\Country','country_id','id');
	}
}
