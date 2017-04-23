<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

	protected function insert_validation() 
	{
		return array(
				'country_name'	=> 'required|unique:countries,name',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'country_name'	=> 'required|unique:countries,name,'.$id,
				);
	}
}
