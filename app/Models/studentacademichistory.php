<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentacademichistory extends Model {

    protected $table = 'tblstudentacademichistory';

    public function studentDetails() {
        return $this->belongsTo('App\Models\studentDetails', 'studentid', 'studentid');
    }
    
    public function clsecassoc() {
        return $this->hasMany('App\Models\clsecassoc', 'id', 'clsecassocid');
    }
    
    public function masterCollection() {
        return $this->hasMany('App\Models\mastercollection', 'studenttype', 'mastercollectionid');
    }
   
}
