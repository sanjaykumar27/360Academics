<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RoleManagementController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| RoleManagement Controller
	|--------------------------------------------------------------------------
	| This Controller is used for Role Management. It includes set, update, view,
	|  and delete role.
	|
	*/

    function __construct() {
		$this->middleware('auth');
    }

	/**
	* Show the application Role List.
	*
	* @return Response
	*/
	public function index(Request $request)
	{
		$data['title'] = 'Role List';
		$data['roles'] = \DB::table('role')->whereIn('entity_status', ['Active','Deactive'])->get();
		return view('admin.roleManagement.index',$data);
	}
	
	/**
	* Show the application Role add page .
	*
	* @return Response
	*/
	public function add() {
		$data['title'] = 'Role Add';
		return view('admin.roleManagement.add',$data);
	}

	/**
	* Add Role.
	* @table name roles .
	* @return Redirect back with Flash message
	*/
	public function addPost(Request $request) {
		$validator = \Validator::make($request->all(), [
            'role_name' => 'required|unique:role,name|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('admin/RoleManagementAdd')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$name = $request->input('role_name');
		if($request->input('role_status')){
			$role_status = 'Active';
		} else {
			$role_status = 'Inactive';
		}
		$CurDate = date('Y-m-d');
		$userID = \Auth::user()->id;
		$Arr = array(
					'name'		=>$name,
					'creation_date'	=>$CurDate,
					'created_by'	=>$userID,
					'last_modification_date'	=>$CurDate,
					'last_modified_by'	=>$userID,
					'entity_status'	=>$role_status
					);
		\DB::table('role')->insert(_clean($Arr));
		
		\Session::flash('flashSuccess', config('constant.success.RoleAdded'));
		return redirect('admin/roles');
	}

	/**
	* Show the application Role edit page .
	* @var RoleID
	* @return Response
	*/
	public function edit($id) {
		$data['title'] = 'Role Edit';
		$id =  base64_decode($id);
		$data['role'] = \DB::table('role')->where('id','=',$id)->get();
		if($data['role']) {
			return view('admin.roleManagement.edit',$data);
		} else {
			\Session::flash('flashError', config('constant.error.RoleIdError'));
			return redirect()->back();
		}
		
	}

	/**
	* Update Role.
	* @table name roles .
	* @return Redirect back with Flash message
	*/
	public function editPost(Request $request) {
		$id = $request->input('id');
		$validator = \Validator::make($request->all(), [
            'role_name' => 'required|unique:role,name,'.$id.'|max:255',
            'id' => 'required|unique:role,id,'.$id.'|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('admin/RoleManagementEdit/'.base64_encode($id))
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$name = $request->input('role_name');
		if($request->input('role_status')){
			$role_status = 'Active';
		} else {
			$role_status = 'Inactive';
		}
		$CurDate = date('Y-m-d');
		$userID = \Auth::user()->id;
		$Arr = array(
					'name'		=>$name,
					'last_modification_date'	=>$CurDate,
					'last_modified_by'	=>$userID,
					'entity_status'	=>$role_status
					);
		\DB::table('role')->where('id',$id)->update(_clean($Arr));
		
		\Session::flash('flashSuccess', config('constant.success.RoleUpdated'));
		return redirect('admin/roles');
	}

	/**
	* Delete Role.
	* @table name roles .
	* if role has any user than admin could not delete that role
	* @return Redirect back with Flash message
	*/
	public function delete_role($id) {
		$id= base64_decode($id);
		$check_role = \DB::table('role')->where('id',$id)->count();

		if($check_role > 0) {
			$check_user = \DB::table('users')->where('role_id',$id)->count();
			if($id == 8) {
				\Session::flash('flashWarning', config('constant.warning.RoleNotDelete'));
			} elseif($check_user == 0) {
				\DB::table('role_permission_mapping')->where('role_id', $id)->delete();
				$updateArr = array('entity_status'=>'Deleted');
				\DB::table('role')->where('id', $id)->update(_clean($updateArr));
				\Session::flash('flashSuccess', config('constant.success.RoleDeleted'));
			} else {
				\Session::flash('flashWarning', config('constant.warning.RoleNotDeletedDueToUserExist'));
			}
		} else {
			\Session::flash('flashError', config('constant.error.RoleIdError'));
		}
		return redirect()->back();
	}
}


