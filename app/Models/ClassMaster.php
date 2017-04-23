<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassMaster extends Model {

    protected $table = 'tblclassmaster';
    
    public function feeStructure() {
        return $this->hasMany('App\Models\FeeStructure', 'classid', 'classid');
    }
    
     public function clsecassoc() {
        return $this->hasMany('App\Models\clsecassoc', 'classid', 'classid');
    }
     
}
