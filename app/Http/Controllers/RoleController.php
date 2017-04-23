<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
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
     * Show the application Role.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'Role List';
		return view('Role/index',$data);
	}

	 /**
     * get Role list.
     * @return list
     */
	public function RoleList() {
		$data = Role::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}

	/**
     * update/save Role.
     * @return success/fail
     */
	public function roleSave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),Role::update_validation($request->input('id')));
			$role = Role::find($request->input('id'));
			if(! $role) {
				$data['msg'] = config('constant.error.RoleNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),Role::insert_validation());
			$role = new Role;
			$role->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$role->name = $request->input('role_name');
		$role->updated_by = \Auth::user()->email;
		$role->entity_status = $request->input('status');
		$role->save();
		$data = array('success'=>1,'msg'=>config('constant.success.RoleSaveSuccess'));
		return $data;
	}

}
