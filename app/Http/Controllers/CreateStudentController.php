<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\studentDetails;
use App\Models\studentacademichistory;
use App\Models\ClassMaster;
use App\Models\clsecassoc;
use App\Models\section;
use App\Models\studentContact;
use App\Models\studentinfo;
use App\Models\MasterCollection;
use App\Models\MasterCollectionType;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CreateStudentController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application Module.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['title'] = 'Student List';
        return view('student.create_student', $data);
    }

    public function getSection() {
        
        $data = section::where("status", 1)
                ->get();

        return json_encode($data);
    }

    public function getClass() {
       
        $data = ClassMaster::where("instsessassocid", 44)
                ->get();
       
        return json_encode($data);
    }
    
    public function getGender(){
        $data = MasterCollectionType::where('mastercollectiontype','=','gender')
                ->get();
         
        foreach ($data as $value){
            foreach ($value->mastercollection as $val){
               // return json_encode($value->mastercollection);
               $data = $value->mastercollection;
            }
        }
        return json_encode($data);
        
    }
    
    public function getCategory(){
        $data = MasterCollectionType::where('mastercollectiontype','=','Category')
                ->get();
        foreach ($data as $value){
            foreach ($value->mastercollection as $val){
               // return json_encode($value->mastercollection);
               $data = $value->mastercollection;
            }
        }
        return json_encode($data);
    }
    
    public function getStudentType(){
        $data = MasterCollectionType::where('mastercollectiontype','=','Student Type')
                ->get();
        foreach ($data as $value){
            foreach ($value->mastercollection as $val){
               // return json_encode($value->mastercollection);
               $data = $value->mastercollection;
            }
        }
        return json_encode($data);
    }
    
    public function getSuburb(){
        $data = MasterCollectionType::where('mastercollectiontype','=','suburbs')
                ->get();
        foreach ($data as $value){
            foreach ($value->mastercollection as $val){
               // return json_encode($value->mastercollection);
               $data = $value->mastercollection;
            }
        }
        return json_encode($data);
    }

    public function addnew() {
        $data['title'] = 'Student List';
        return view('student/add_new_student', $data);
    }

    /**
     * get Student list.
     * @return list
     */
    public function getstudentdetails() {


        $studentDetails = new studentDetails;
        $studentDetails = studentDetails::where("instsessassocid", 44)
                ->where(function ($query) {
                    if (Input::get('scholarnumber') != '') {
                        $query->orwhere("scholarnumber", '=', Input::get('scholarnumber'));
                    } elseif (Input::get('studentname') != '') {
                        $query->orwhere("firstname", 'LIKE', Input::get('studentname') . "%");
                    }
                })
                ->with(
                        ['clsecassoc' => function($query) {
                                if (Input::get('classid') != '') {
                                    $query->orwhere("classid", '=', Input::get('classid'));
                                }

                                if (Input::get('section') != '') {
                                    $query->orwhere("sectionid", '=', Input::get('section'));
                                }
                            }
                        ]
                )
                ->get();


        $section = section::where('status', 1)
                ->orWhere('sectionname', '=', Input::get('sectionname') . '%')
                ->get();
        foreach ($section as $key => $value) {
            $sectionArray[$value->id] = $value->sectionname;
        }

        foreach ($studentDetails as $key => $value) {
            foreach ($value->studentacademichistory as $k => $val) {
                foreach ($val->clsecassoc as $arrk => $arrval) {
                    $classArray = $arrval->classMaster;
                    if (array_key_exists($arrval->sectionid, $sectionArray)) {
                        $resultArray[$value->scholarnumber]['sectioname'] = $sectionArray[$arrval->sectionid];
                        $resultArray[$value->scholarnumber]['studentname'] = $value['firstname'] . " " . $value['middlename'] . " " . $value['lastname'];
                        $resultArray[$value->scholarnumber]['classname'] = $classArray[0]['classname'];
                        $resultArray[$value->scholarnumber]['scholarnumber'] = $value->scholarnumber;
                    }
                }
            }
        }

        return view('student.index')->with('data', $resultArray);
    }

    /**
     * update/save module.
     * @return success/fail
     */
    public function savestudent(Request $request) {

        $studentDetails = new studentDetails;
        $studentAcademicHistory = new studentacademichistory();
        $studentcontact = new studentContact;
        $studentinfo = new studentinfo;


        $studentDetails->scholarnumber = $request->input('scholarnumber');
        $studentDetails->firstname = $request->input('firstname');
        $studentDetails->middlename = $request->input('middlename');
        $studentDetails->lastname = $request->input('lastname');
        $studentDetails->lastname = 1;
        $studentDetails->deleted = 0;
 
        //$studentDetails->save();

        $studentAcademicHistory->studentid = $studentDetails->id;
        $studentAcademicHistory->clsecassocid = $this->getclsecassocid($request);
        $studentAcademicHistory->academicstatus = 1;
        $studentAcademicHistory->studenttype = $request->input('studenttype');
        $studentAcademicHistory->status = 1;

        $studentcontact->studentid = $studentDetails->id;
        $studentcontact->currentaddress1 = $studentDetails->currentaddress1;
        $studentcontact->currentaddress2 = $studentDetails->currentaddress2;
        $studentcontact->currentsuburbid = $studentDetails->currentsuburbid;
        $studentcontact->currentcityid = $studentDetails->currentcityid;
        $studentcontact->currentaddress1 = $studentDetails->currentaddress1;
        $studentcontact->currentaddress1 = $studentDetails->currentaddress1;
        $studentcontact->currentaddress1 = $studentDetails->currentaddress1;


         dd($request->input('classid'));
        // $feeDetail->save();

        $data = array('success' => 1, 'msg' => config('constant.success.StudentSaveSuccessfully'));
        return $data;
    }

    public function getclsecassocid($request) {
        $test = array();
        $clsecassocid = clsecassoc::where('classid', '=', $request->input('classid'))
                ->where('sectionid', '=', $request->input('sectionid'))
                ->get();

        foreach ($clsecassocid as $key => $value) {
            foreach ($value as $k => $val) {
                $returnValue = $value->id;
            }
        }
        return $returnValue;
    }

}
