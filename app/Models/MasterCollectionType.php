<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCollectionType extends Model {

    protected $table = 'tblmastercollectiontype';

    public function mastercollection() {
        return $this->hasMany('App\Models\MasterCollection', 'mastercollectiontypeid', 'mastercollectiontypeid');
    }
}
