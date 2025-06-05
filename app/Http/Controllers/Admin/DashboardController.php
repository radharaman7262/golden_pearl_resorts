<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\User\NewsLetter;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class DashboardController extends Controller
{
    public function dashboard()
    { 
        // $appointment = Appointment::latest()->limit(5)->get();
        // $recent_appointment = Appointment::limit(10)->get();
        // $doctor = Doctor::latest()->limit(8)->get();
        // foreach($doctor as $key => $rl)
        // {
        //     $department = json_decode($rl->department_id);
        //     $data_pm = [];
        //     foreach($department as $id){
        //         $perm = Department::find($id);
        //         if(isset($perm)){
        //             array_push($data_pm,$perm->title);
        //         }
        //     }
        //     $doctor[$key]->department = implode(", ",$data_pm);
        // }

        return view('admin.dashboard')->with('message','You have been successfully login');
    }

    public function index(){
    // if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }
        $user_register= User::all();
        return view('admin.home.user_register',['user_register'=>$user_register]);
    }
   

// User Contacts
    public function contact(Request $request){
	// if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }
        return view('admin.home.contact');
   
    }

    public function dataContact(Request $request)
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


        $totalFilter = DB::table('contacts');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('contacts');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('contacts');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('contacts');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            // $data[$key]->icon = '<img loading="lazy" src="'.url('storage/app/'.$item->icon).'" height="80px" width="80px">';
            $data[$key]->action = '<a href="#" onclick="deleteRecord('."'contacts',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
            
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


// NewsLetter
    public function newsLetter(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        $news_letter= NewsLetter::all();
        return view('admin.home.news_letter',['news_letter'=>$news_letter]);
  
    }

}
