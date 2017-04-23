<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeRuleDetail extends Model
{
    protected $table = 'tblfeeruledetail';
    
    public function FeeRule() {
        return $this->belongsTo('App\Models\FeeRule', 'feeruleid', 'feeruleid');
    }
    
    public function FeeComponent() {
        return $this->belongsTo('App\Models\FeeComponent', 'feecomponentid', 'feecomponentid');
    }

}

