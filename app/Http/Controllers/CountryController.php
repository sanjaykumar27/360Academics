<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
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
     * Show the application Country.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'Country List';
		return view('country/index',$data);
	}

	 /**
     * get Country list.
     * @return list
     */
	public function CountryList() {
		$data = Country::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}

	/**
     * update/save Country.
     * @return success/fail
     */
	public function countrySave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),Country::update_validation($request->input('id')));
			$country = Country::find($request->input('id'));
			if(! $country) {
				$data['msg'] = config('constant.error.CountryNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),Country::insert_validation());
			$country = new Country;
			$country->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$country->name = $request->input('country_name');
		$country->updated_by = \Auth::user()->email;
		$country->entity_status = $request->input('status');
		$country->save();
		$data = array('success'=>1,'msg'=>config('constant.success.CountrySaveSuccess'));
		return $data;
	}

}
