<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeRule extends Model
{
    protected $table = 'tblfeerule';
    
    public function FeeRuleDetail(){
        return $this->hasMany('App\Models\FeeRuleDetail', 'feeruleid', 'feeruleid');
    }
    
}

