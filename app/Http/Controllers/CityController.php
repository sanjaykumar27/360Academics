<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application City.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'City List';
		return view('city/index',$data);
	}

	 /**
     * get City list.
     * @return list
     */
        public function cityList($id) {
		$data = City::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->where('state_id',$id)->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}
        
	public function CityStateCountryList() {
		$data = City::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])
                        ->limit(10)
                        ->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
				$data[$key]->state = $val->getStateFromCity->name;
				$data[$key]->country = $val->getStateFromCity->getCountryFromState->name;
				$data[$key]->country_id = $val->getStateFromCity->getCountryFromState->id;
			}
		}
		return json_encode($data);
	}

	/**
     * update/save City.
     * @return success/fail
     */
	public function citySave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),City::update_validation($request->input('id')));
			$city = City::find($request->input('id'));
			if(! $city) {
				$data['msg'] = config('constant.error.CityNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),City::insert_validation());
			$city = new City;
			$city->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$city->name = $request->input('city_name');
		$city->state_id = $request->input('state');
		$city->updated_by = \Auth::user()->email;
		$city->entity_status = $request->input('status');
		$city->save();
		$data = array('success'=>1,'msg'=>config('constant.success.CitySaveSuccess'));
		return $data;
	}

}
