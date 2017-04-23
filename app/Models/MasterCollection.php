<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCollection extends Model {

    protected $table = 'tblmastercollection';

    public function mastercollectiontype() {
        return $this->belongsTo('App\Models\MasterCollectionType', 'mastercollectiontypeid', 'mastercollectiontypeid');
    }
}
