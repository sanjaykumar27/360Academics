<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model {

    protected $table = 'tblfeestructure';

    public function feeStructureDetail() {
        return $this->hasMany('App\Models\FeeStructureDetail', 'feestructureid', 'feestructureid');
    }

    public function classMaster() {
        return $this->belongsTo('App\Models\ClassMaster', 'classid', 'classid');
    }

    public function FeeComponent() {
        return $this->belongsTo('App\Models\FeeComponent', 'feecomponentid', 'feecomponentid');
    }

}
