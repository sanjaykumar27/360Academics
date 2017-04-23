<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
     protected $table = 'collections';

	protected function insert_validation() 
	{
		return array(
				'collection'	=> 'required|unique:collections,name',
				);
	}

	protected function update_validation($id) 
	{
		return array(
				'id'	=> 'required',
				'collection'	=> 'required|unique:collections,name,'.$id,
				);
	}
        
	public function getCollectionType(){
		return $this->belongsTo('App\Models\CollectionType','collection_type_id','id');
	}
}
