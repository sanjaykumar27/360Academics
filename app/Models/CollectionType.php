<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionType extends Model {

    protected $table = 'collection_types';

    protected function insert_validation() {
        return array(
            'collectiontype' => 'required|unique:collection_types,type',
        );
    }

    protected function update_validation($id) {
        return array(
            'id' => 'required',
            'collectiontype' => 'required|unique:collection_types,type,' . $id,
        );
    }

    public function getcollection() {
        return $this->hasMany('App\Models\Collection', 'collection_type_id', 'id');
    }

}
