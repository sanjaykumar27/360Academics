<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeStructureDetail extends Model {

    protected $table = 'tblfeestructuredetails';

    public function getFeeDetails() {
        return $this->belongsTo('App\Models\FeeStructure', 'feestructureid', 'feestructureid');
    }

}
