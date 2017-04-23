<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeRule;
use App\Models\FeeRuleDetail;

class FeeRuleController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('fees.add_fee_rule');
    }
    
    public function show() {

        $result = FeeRule::where([
                    ['instsessassocid', '=', '44'],
                    ['feerulestatus', '=', '1'],
                    ['deleted', '=', '0']
                ])
                ->get();

       // $data = array();
      /*  foreach ($result as $key => $value) {
            $data['feeruleid'][] = $value;
        }
        
        foreach ($result as $key => $value) {
            foreach ($value->FeeRuleDetail as $k => $val) {
                if ($value['feeruleid'] == $val['feeruleid']) {
                     $data['feeruleid']['feeruledetailid'][] = $val['feeruledetailid'];
                }
            }
        }*/
       
        return view('fees.fee_rule',  compact('result'));
    }

}
