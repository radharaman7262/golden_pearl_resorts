<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin\Admin;
use App\Models\Admin\Role;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
    if (!checkAccess(2)) {
        return redirect()->back()->with('warning', 'Access Denied');
    }
      return view('admin.roles.admin');
 
    }

    public function data(Request $request)
    {
        $draw 				= 		$request->get('draw');      // Internal use
        $start 				= 		$request->get("start");     // where to start next records for pagination
        $rowPerPage 		= 		$request->get("length");    // How many recods needed per page for pagination

        $orderArray 	    = 		$request->get('order');
        $columnNameArray 	= 		$request->get('columns');   // It will give us columns array
        $searchArray 		= 		$request->get('search');
        $columnIndex 		= 		$orderArray[0]['column'];   // This will let us know,
                                                                // which column index should be sorted
                                                                // 0 = id, 1 = title, 2 = email , 3 = created_at

        $columnName 		= 		$columnNameArray[$columnIndex]['data']; // Here we will get column name,
                                                                            // Base on the index we get

        $columnSortOrder 	= 		$orderArray[0]['dir'];          // This will get us order direction(ASC/DESC)
        $searchValue 		= 		$searchArray['value'];          // This is search value


        $totalFilter = DB::table('admins');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('admins');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('admins');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('admins');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->role = getName($item->is_admin, 'roles')->name;

            if($item->id != 4){
            $status = '<div class="mb-0 form-check form-switch form-check-md"> 
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'admins', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            }else{
                $status ='<button class="shadow btn btn-primary btn-xs">ON</button>' ;
            }
            $data[$key]->status= $status;

            $action = '<a href="'. route('admin.edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>';
            if($item->id != 4){
                $action .= '<a href="#" onclick="deleteRecord('."'admins',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
            }
            $data[$key]->action= $action;

            $data[$key]->id = $serial_num+1;
            $serial_num++;
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );
        return response()->json($response);
    }

    public function add(){
        $roles = Role::get()->sortDesc();

        return view('admin.roles.manage_admin',['roles'=>$roles]);
    }
	

    public function create(Request $request)
    {
        if($request->id==0){
            $request->validate(
                ['email' => 'unique:admins,email',],
                ['email.unique' => 'Email already taken']);
            $admin = new Admin;

            $admin->email= $request->email;
            $admin->password = Hash::make($request->password);
            $admin->name= $request->name;
            $admin->phone= $request->phone;
            $admin->is_admin= $request->is_admin;
            $admin->save();

            $admin = Admin::find($admin->id);
            $admin->employee_id = "CEID#".$admin->id;

            $admin->save();

        } else {
            $admin = Admin::find($request->id);

            $admin->email= $request->email;
			if($request->password==null && $admin->password!=null){
                // $admin->password;
            }else{
                $admin->password = Hash::make($request->password);
            }
			$admin->name= $request->name;
            $admin->phone= $request->phone;
            $admin->is_admin= $request->is_admin;
            $admin->save();
        }
        return redirect(route('admin.admin'))->with('message', 'Admin Added');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $admin = Admin::find($id);
        $roles = Role::get()->sortDesc();

        return view('admin.roles.manage_admin',['admin'=>$admin,'roles'=>$roles]);
    }


// Roles
    public function role(){
    // if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }        
        return view('admin.roles.role');
    }

    public function dataRole(Request $request)
    {
        $draw 				= 		$request->get('draw');      // Internal use
        $start 				= 		$request->get("start");     // where to start next records for pagination
        $rowPerPage 		= 		$request->get("length");    // How many recods needed per page for pagination

        $orderArray 	    = 		$request->get('order');
        $columnNameArray 	= 		$request->get('columns');   // It will give us columns array
        $searchArray 		= 		$request->get('search');
        $columnIndex 		= 		$orderArray[0]['column'];   // This will let us know,
                                                                // which column index should be sorted
                                                                // 0 = id, 1 = title, 2 = email , 3 = created_at

        $columnName 		= 		$columnNameArray[$columnIndex]['data']; // Here we will get column name,
                                                                            // Base on the index we get

        $columnSortOrder 	= 		$orderArray[0]['dir'];          // This will get us order direction(ASC/DESC)
        $searchValue 		= 		$searchArray['value'];          // This is search value


        $totalFilter = DB::table('roles');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('roles');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('roles');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('roles');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){

            $data[$key]->permission = Permission::whereIn('id', json_decode($item->permission))->pluck('name');

            $data[$key]->action = '<a href="'. route('admin.role_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <!-- <a href="#" onclick="deleteRecord('."'roles',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a> --> ';
                
            $data[$key]->id = $serial_num+1;
            $serial_num++;
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );
        return response()->json($response);
    }
    
    public function addRole(){
        $permission = Permission::select('id','name')->get();
        //dd($permission);
        return view('admin.roles.manage_role')->with(['permission'=>$permission]);
   
    }

    public function createRole(Request $request)
    {
        if($request->id==0){
            $request->validate(
                ['possition' => 'unique:roles,possition'],
                ['possition.unique' => 'Possition already taken']
            );

            $role = new Role;
            $role->name= $request->name;
            $role->permission= json_encode($request->permission);
            $role->possition= $request->possition;

            $role->save();
        } else {
            $role = Role::find($request->id);

            $role->name= $request->name;
            $role->permission= json_encode($request->permission);
            $role->possition= $request->possition;
            $role->save();
        }
        return redirect(route('admin.role'))->with('message', 'Role Added');
    }

    public function editRole($id)
    {
        $id = Crypt::decrypt($id);
        $role = Role::find($id);
        $permission = Permission::select('id','name')->get();
        return view('admin.roles.manage_role',['role'=>$role,'permission'=>$permission]);
   
    }
    

// Permissions
    public function permission(){
    // if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }
        return view('admin.roles.permission');
    
    }

    public function dataPermission(Request $request)
    {
        $draw 				= 		$request->get('draw');      // Internal use
        $start 				= 		$request->get("start");     // where to start next records for pagination
        $rowPerPage 		= 		$request->get("length");    // How many recods needed per page for pagination

        $orderArray 	    = 		$request->get('order');
        $columnNameArray 	= 		$request->get('columns');   // It will give us columns array
        $searchArray 		= 		$request->get('search');
        $columnIndex 		= 		$orderArray[0]['column'];   // This will let us know,
                                                                // which column index should be sorted
                                                                // 0 = id, 1 = title, 2 = email , 3 = created_at

        $columnName 		= 		$columnNameArray[$columnIndex]['data']; // Here we will get column name,
                                                                            // Base on the index we get

        $columnSortOrder 	= 		$orderArray[0]['dir'];          // This will get us order direction(ASC/DESC)
        $searchValue 		= 		$searchArray['value'];          // This is search value


        $totalFilter = DB::table('permissions');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('permissions');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('permissions');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('permissions');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){

            $data[$key]->action = '<a href="'. route('admin.permission_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <!-- <a href="#" onclick="deleteRecord('."'permissions',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a> --> ';
                
            $data[$key]->id = $serial_num+1;
            $serial_num++;
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );
        return response()->json($response);
    }
    
    public function addPermission(){
        return view('admin.roles.manage_permission');
    
    }

    public function createPermission(Request $request)
    {
        if($request->id==0){

            $permission = new Permission;

            $permission->name= $request->name;

        $permission->save();
        } else {
            $permission = Permission::find($request->id);
        
            $permission->name = $request->name;
            $permission->save();
        }
        return redirect(route('admin.permission'))->with('message', 'Permission Added');
    }

    public function editPermission($id)
    {
        $id = Crypt::decrypt($id);
        $permission = Permission::find($id);
        return view('admin.roles.manage_permission',['permission'=>$permission]);
    
    }
    

}
