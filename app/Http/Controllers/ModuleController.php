<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
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
     * Show the application Module.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'Module List';
		return view('module/index',$data);
	}

	 /**
     * get module list.
     * @return list
     */
	public function moduleList() {
		$data = Module::orderBy('name','asc')->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}

	/**
     * update/save module.
     * @return success/fail
     */
	public function moduleSave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),Module::update_validation($request->input('id')));
			$module = Module::find($request->input('id'));
			if(! $module) {
				$data['msg'] = config('constant.error.ModuleNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),Module::insert_validation());
			$module = new Module;
			$module->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$module->name = $request->input('module_name');
		$module->updated_by = \Auth::user()->email;
		$module->entity_status = $request->input('status');
		$module->save();
		$data = array('success'=>1,'msg'=>config('constant.success.ModuleSaveSuccess'));
		return $data;
	}

}
