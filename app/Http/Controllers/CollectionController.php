<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;



class CollectionController extends Controller
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
     * Show the application Collection.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$data['title'] = 'Collection List';
		return view('collectiontype/collection',$data);
	}

	 /**
     * get Active Collection list.
     * @return list
     */
	public function collectionList(Request $request) {
		$id = $request->input('id');
		$data = Collection::orderBy('name','asc')->where('collection_type_id', $id)->whereIn('entity_status',['Active'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
				$data[$key]->c_name = $val->getCollectionType->type;
			}
		}
		return json_encode($data);
	}
	/**
     * get All Collection list.
     * @return list
     */
	public function allCollectionList(Request $request) {
		$id = $request->input('id');
		$data = Collection::orderBy('name','asc')->where('collection_type_id', $id)->whereIn('entity_status',['Active','Inactive'])->get();
		if(count($data) > 0) {
			foreach($data as $key=>$val) {
				$data[$key]->created_at = getLocalTime($val->created_at);
				$data[$key]->c_name = $val->getCollectionType->type;
			}
		}
		return json_encode($data);
	}

	/**
     * update/save Collection.
     * @return success/fail
     */
	public function collectionSave(Request $request) {
		$data = array('success'=>0,'msg'=>'');
		if($request->input('id') > 0) {
			$validator = \Validator::make($request->input(),Collection::update_validation($request->input('id')));
			$collection = Collection::find($request->input('id'));
			if(! $collection) {
				$data['msg'] = config('constant.error.CollectionNotFound');
				return $data;
			}
		} else {
			$validator = \Validator::make($request->input(),Collection::insert_validation());
			$collection = new Collection;
			$collection->created_by = \Auth::user()->email;
		}

		if ($validator->fails()) {
			$data['msg'] = '';
			foreach($validator->errors()->all() as $valError) {
				$data['msg'] .= $valError;
			}
			return $data;
		}

		$collection->name = $request->input('collection');
		$collection->collection_type_id = base64_decode($request->input('collection_type_id'));
		$collection->updated_by = \Auth::user()->email;
		$collection->entity_status = $request->input('status');
		$collection->save();
		$data = array('success'=>1,'msg'=>config('constant.success.CollectionSaveSuccess'));
		return $data;
	}
	
	
}
