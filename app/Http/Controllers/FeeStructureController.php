<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeStructure;
use App\Models\ClassMaster;
use App\Models\FeeStructureDetail;
use App\Models\State;

class FeeStructureController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application State.
     *
     * @return \Illuminate\Http\Response
     */
    public function classMaster() {
        $data['class'] = ClassMaster::
                where('instsessassocid', '=', '44')
                ->get();


        return $this->getFeeStructure($data['class']);
        //return view('fees.feeStructure', compact('data'));
    }

    public function getFeeStructure($data) {

        /* Getting fee structure from tblfeestructure */
        $data = \App\Models\FeeStructure::
                where([
                    ['instsessassocid', '=', '44'],
                    ['status', '=', '1']
                ])
                ->get();

        /* create seprate array of class from feestructure */
        $class = array();
        foreach ($data as $key => $value) {
            $class[] = $value['classid'];
        }
        /* creating unique array from class out of multiple */
        $class = array_unique($class);

        /* getting array of feestructure id according to classid */
        $feearray = array();
        foreach ($data as $key => $value) {
            foreach ($class as $val) {
                if ($val == $value->classid) {
                    $feearray[$value->classid]['feestructureid'][] = $value->feestructureid;
                }
            }
        }

        /* creating unique array from feestructure id of multiple */
        foreach ($feearray as $key => $value) {
            $feearray[$key] = array_unique($value);
        }


        foreach ($feearray as $key => $value) {
            /* adding two new keys total and classname and initialize as empty 
             * to existing array;
             */
            $feearray[$key]['total'] = 0;
            $feearray[$key]['classname'] = '';

            foreach ($value as $vkey => $val) {
                $feearray[$key][$vkey] = array_unique($val);
            }
        }

        foreach ($feearray as $key => $value) {
            foreach ($value['feestructureid'] as $vkey => $val) {
                foreach ($data as $k => $feedetail) {
                    foreach ($feedetail->feeStructureDetail as $feedata) {
                        if ($feedata->feestructureid == $val) {
                            $feearray[$key]['total']+=$feedata['amount'];
                            $feearray[$key]['componentid'][$feedetail['feecomponentid']] = $feedata['amount'];
                        }
                    }

                    foreach ($feedetail->classMaster as $classarr) {
                        if ($key == $feedetail->classMaster['classid']) {
                            $feearray[$key]['classname'] = $feedetail->classMaster['classdisplayname'];
                        }
                    }
                }
            }
        }

       // dd($feearray);
        foreach ($class as $cls => $clsValue) {
            foreach ($feearray[$clsValue]['componentid'] as $key => $value) {
                foreach ($data as $k => $feedetail) {
                    foreach ($feedetail->FeeComponent as $classarr) {
                        if ($feedetail->FeeComponent['feecomponentid'] == $key) {
                            $feearray[$clsValue]['componentname'][$feedetail->FeeComponent['feecomponent']] = $feearray[$clsValue]['componentid'][$key];
                        }
                    }
                }
            }
        }
       
        return view('fees.feeStructure', compact('feearray'));
    }

    public function add() {
        $data['title'] = 'Add Fee Structure';
        return view('fees/add_fee_structure', $data);
    }

    public function save(Request $request) {

        $class = array();

        $fee = new FeeStructure;
        $feeDetail = new FeeStructureDetail;

        $fee->feecomponentid = $request->input('selectedComponent');
        $fee->classid = $request->input('selectedClass');

        $feeDetail->amount = $request->input('amount');
        $feeDetail->duedate = $request->input('duedate');
        $feeDetail->frequency = $request->input('frequency');
        
        $fee->save();
        
        $feeDetail->feestructureid = $fee->id;
        
        $feeDetail->save();

        $data = array('success'=>1,'msg'=>config('constant.success.feeStructureSave'));
        //$fee->save();
        // var_dump($input);die;
         return $data;
    }

}
