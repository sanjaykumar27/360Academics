<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clsecassoc extends Model {

    protected $table = 'tblclsecassoc';
    
    public function studentacademichistory() {
        return $this->belongsTo('App\Models\studentacademichistory', 'clsecassocid', 'id');
    }
    
    public function classmaster() {
        return $this->hasMany('App\Models\ClassMaster', 'classid', 'classid');
    }
     
    public function feeStructure() {
        return $this->hasMany('App\Models\FeeStructure', 'classid', 'classid');
    }
    
    public function section() {
        return $this->hasMany('App\Models\section', 'id', 'sectionid');
    }
    
    
     
}
