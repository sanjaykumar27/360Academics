<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CollectionType;
use App\Models\Collection;

class timetable extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function createClassSubAssoc() {
         $data['title'] = 'Subject Teacher Association';
        $data['module'] = 'Timetable';
        return view('academics.createClassSubAssoc',$data);
    }

    public function createSeasonGroup() {
        $data['title'] = 'Season Group';
        $data['module'] = 'Timetable';
        return view('academics.createSeasonGroup',$data);
    }

    public function collectionIndex() {
        return view('academics.collectionNew');
    }

    public function getSeason() {

        $data = CollectionType::orderBy('type', 'asc')->where('type','=','Seasons')->get();
        if (count($data) > 0) {
            foreach ($data as $key => $val) {
                $data[$key]->created_at = getLocalTime($val->created_at);
            }
        }
        foreach ($data as $value) {
            $dataarray = $value->getcollection;
        }
        
        return json_encode($dataarray);
    }

    public function collectionList(Request $request) {
         $data['title'] = 'Subject Teacher Association';
        $data['module'] = 'Timetable';
        $id = $request->input('id');
        $data = Collection::orderBy('name', 'asc')->where('collection_type_id', $id)->whereIn('entity_status', ['Active', 'Inactive'])->get();
        if (count($data) > 0) {
            foreach ($data as $key => $val) {
                $data[$key]->created_at = getLocalTime($val->created_at);
                $data[$key]->c_name = $val->getCollectionType->type;
            }
        }
        return json_encode($data);
    }
	
	public function view_timetable() {
		return view('academics.viewTimetable');
	}
	
	public function timetableMaster() {
		return view('academics.timetableMaster');
	}

}
