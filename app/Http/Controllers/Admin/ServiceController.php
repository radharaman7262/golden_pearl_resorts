<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Feature;
use App\Models\Admin\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // Services
    public function services(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.services.services');
    }

    public function dataServices(Request $request)
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


        $totalFilter = DB::table('services');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('services');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('services');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('services');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->image = '<img loading="lazy" src="'.url('storage/app/'.$item->icon).'" height="80px" width="80px"  onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">';
            $data[$key]->banner = '<img loading="lazy" src="'.url('storage/app/'.$item->banner).'" height="80px" width="80px"  onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">';

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'services', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.services_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'services',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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


    public function addServices(){
        return view('admin.services.manage_services');
    }

    public function createServices(Request $request)
    {
        $request->validate([
            // 'title' => ['required', 'string', 'max:255'],
            // 'sub_title' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'numeric', 'min:10', 'max:11'],
        ]);
        $banner=[];
        if($request->id==0){

            $services = new Services;

            $services->title= $request->title;
            $services->subtitle= $request->subtitle;
            $services->description= $request->description;
            $services->slug= str()->slug($request->title);
            $services->facebook= $request->facebook;
            $services->instagram= $request->instagram;
            $services->twiter= $request->twiter;
            $services->linkedin= $request->linkedin;
            $services->meta_title= $request->meta_title;
            $services->meta_desc= $request->meta_desc;
            $services->meta_keyword= $request->meta_keyword;
            if($request->hasfile('icon')){
                $services->icon = $request->file('icon')->store('public/images/services');
            }
         
            if($request->hasfile('banner')){
                    foreach ($request->file('banner') as $image) {
                        $name = $image->store('public/images/services');
                         array_push($banner,$name);
        
                    }
                    $services->banner = json_encode($banner);
            }
            $services->save();
        } else {
            $services = Services::find($request->id);
        
            $services->title= $request->title;
            $services->subtitle= $request->subtitle;
            $services->description= $request->description;
            $services->slug= str()->slug($request->title);
            $services->facebook= $request->facebook;
            $services->instagram= $request->instagram;
            $services->twiter= $request->twiter;
            $services->linkedin= $request->linkedin;
            $services->meta_title= $request->meta_title;
            $services->meta_desc= $request->meta_desc;
            $services->meta_keyword= $request->meta_keyword;
            if($request->hasfile('icon')){
                @unlink('storage/app/'.$services->icon);
                $services->icon = $request->file('icon')->store('public/images/services');
            }
            // if($request->hasfile('banner')){
            //     @unlink('storage/app/'.$services->banner);
            //     $services->banner = $request->file('banner')->store('public/images/services');
            // }
            if($request->hasfile('banner')){
                if(isset($services->banner) && count(json_decode($services->banner))>0){
                    foreach (json_decode($services->banner) as $img) {
                        @unlink('storage/app/'.$img);
                    }
                }
                foreach ($request->file('banner') as $image) {
                    $name = $image->store('public/images/services');
                     array_push($banner,$name);
    
                }
                $services->banner = json_encode($banner);
        }
            $services->save();
        }
        return redirect(route('admin.services'))->with('message', 'services Added');
    }

    public function editServices($id)
    {
        $id = Crypt::decrypt($id);
        $services = Services::find($id);
        return view('admin.services.manage_services',['services'=>$services]);
 
    }


/// features
    public function feature(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.services.feature');  
    }

    public function dataFeature(Request $request)
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


        $totalFilter = DB::table('features');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('features');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('features');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('features');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->icon = '<img loading="lazy" src="'.url('storage/app/'.$item->icon).'" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';"
            >';

            
            
            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'features', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.feature_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'features',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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

    public function addFeature(){

        return view('admin.services.manage_feature');
    }

    public function createFeature(Request $request)
    {
        if($request->id==0){

            $feature = new Feature;

            $feature->title= $request->title;
            $feature->description= $request->description;
            if($request->hasfile('icon')){
                $feature->icon = $request->file('icon')->store('public/images/feature');
            }
            $feature->save();
        } else {
            $feature = Feature::find($request->id);
            
            $feature->title= $request->title;
            $feature->description= $request->description;
            if($request->hasfile('icon')){
                @unlink('storage/app/'.$feature->icon);
                $feature->icon = $request->file('icon')->store('public/images/feature');
            }
            
            $feature->save();
        }
        return redirect(route('admin.feature'))->with('message', 'feature Added');
    }

    public function editFeature($id)
    {
        $id = Crypt::decrypt($id);
        $feature = Feature::find($id);
        return view('admin.services.manage_feature',['feature'=>$feature]);
    }
    
    
}
