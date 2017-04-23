<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

	protected function insert_validation() 
	{
		return array(
				'module_name'	=> 'required|unique:modules,name',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'module_name'	=> 'required|unique:modules,name,'.$id,
				);
	}
}
