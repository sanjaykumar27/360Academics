<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentDetails extends Model {

    protected $table = 'tblstudent';

    public function studentacademichistory() {
        return $this->hasMany('App\Models\studentacademichistory', 'studentid', 'studentid');
    }
    
    public function clsecassoc() {
        return $this->hasMany('App\Models\clsecassoc', 'id', 'clsecassocid');
    }
    
    public function studentcontact() {
        return $this->belongsTo('App\Models\studentcontact', 'studentid', 'studentid');
    }

    public function studentdetails() {
        return $this->belongsTo('App\Models\studentdetails', 'studentid', 'studentid');
    }
    
    public function city() {
        return $this->belongsTo('App\Models\City', 'currentcityid', 'id');
    }
    

}
