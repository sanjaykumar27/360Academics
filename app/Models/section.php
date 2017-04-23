<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class section extends Model {

    protected $table = 'tblsection';

    public function clsecassoc() {
        return $this->belongTo('App\Models\clsecassoc', 'sectionid', 'id');
    }
    
    
}
