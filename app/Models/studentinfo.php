<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentinfo extends Model {

    protected $table = 'tblstudentcontact';

    public function getstudentDetails() {
        return $this->belongsTo('App\Models\studentDetails', 'studentid', 'studentid');
    }
    
    
}
