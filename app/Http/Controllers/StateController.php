<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
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
     * Show the application State.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'State List';
		return view('state/index',$data);
	}

	 /**
     * get State list.
     * @return list
     */
	public function stateCountryList() {
		$data = State::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
				$data[$key]->country = $val->getCountryFromState->name;
			}
		}
		return json_encode($data);
	}

	/**
     * get State list.
     * @return list
     */
	public function stateList($id) {
		$data = State::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->where('country_id',$id)->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}
    /**
     * update/save State.
     * @return success/fail
     */
	public function stateSave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),State::update_validation($request->input('id')));
			$state = State::find($request->input('id'));
			if(! $state) {
				$data['msg'] = config('constant.error.StateNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),State::insert_validation());
			$state = new State;
			$state->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$state->name = $request->input('state_name');
		$state->country_id = $request->input('country');
		$state->updated_by = \Auth::user()->email;
		$state->entity_status = $request->input('status');
		$state->save();
		$data = array('success'=>1,'msg'=>config('constant.success.StateSaveSuccess'));
		return $data;
	}

}
