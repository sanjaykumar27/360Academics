<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

	protected function insert_validation() 
	{
		return array(
				'city_name'	=> 'required',
				'state'	=> 'required',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'city_name'	=> 'required',
				'state'	=> 'required',
				);
	}

	public function getStateFromCity() {
		return $this->belongsTo('App\models\State','state_id','id');
	}
}
