<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

	protected function insert_validation() 
	{
		return array(
				'role_name'	=> 'required|unique:roles,name',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'role_name'	=> 'required|unique:roles,name,'.$id,
				);
	}
}
