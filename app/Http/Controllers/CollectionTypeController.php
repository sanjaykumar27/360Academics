<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CollectionType;



class CollectionTypeController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		//parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application Collection Type.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'Collection Type List';
		return view('collectiontype/index',$data);
	}

	 /**
     * get Active Collection Type list.
     * @return list
     */
	public function collectiontypeList() {
		$data = CollectionType::orderBy('type','asc')->whereIn('entity_status',['Active'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}
	/**
     * get All Collection Type list.
     * @return list
     */
	public function allCollectiontypeList() {
		$data = CollectionType::orderBy('type','asc')->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
			}
		}
		return json_encode($data);
	}

	/**
     * update/save Collection Type.
     * @return success/fail
     */
	public function collectiontypeSave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),CollectionType::update_validation($request->input('id')));
			$collectiontype = CollectionType::find($request->input('id'));
			if(! $collectiontype) {
				$data['msg'] = config('constant.error.CollectionTypeNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),CollectionType::insert_validation());
			$collectiontype = new CollectionType;
			$collectiontype->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$collectiontype->type = $request->input('collectiontype');
		$collectiontype->updated_by = \Auth::user()->email;
		$collectiontype->entity_status = $request->input('status');
		$collectiontype->save();
		$data = array('success'=>1,'msg'=>config('constant.success.CollectionTypeSaveSuccess'));
		return $data;
	}
	
	

}
