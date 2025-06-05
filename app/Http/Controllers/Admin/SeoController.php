<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CmsHeading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin\Seo;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{
// SEO Manage
    public function index(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.settings.seo');
    }

    public function dataSeo(Request $request)
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


        $totalFilter = DB::table('seos');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('page_name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('seos');
            $data = $data->where('page_name','like','%' .$searchValue. '%');
        }

        $data = DB::table('seos');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('seos');
            $data = $data->where('page_name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
          $data[$key]->banner = '<img loading="lazy" src="'.url('storage/app/'.$item->banner).'" height="80px" width="80px" onerror="this.onerror=null;this.src=\''.asset('assets/images/defaultimg.jpg').'\';">';
          

            $data[$key]->action = '<a href="'. route('admin.seo_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <!-- <a href="#" onclick="deleteRecord('."'seos',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a> --> ';
                
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
        return view('admin.settings.manage_seo');
  
    }

    public function create(Request $request)
    {
        $request->validate([
            // 'banner' => [
            //             'image', 'mimes:jpg,png,jpeg,gif,svg','max:2048','dimensions:min_width=1000,min_height=400,max_width=1600,max_height=600',
            //         ],
        ]);
        
        if($request->id==0){

        $seo = new seo;

            $seo->page_name= $request->page_name;
            $seo->meta_title= $request->meta_title;
            $seo->meta_keyword= $request->meta_keyword;
            $seo->meta_desc= $request->meta_desc;
            if($request->hasfile('banner')){
                $seo->banner = $request->file('banner')->store('public/images/seo');
            }
            $seo->save();
        } else {
            $seo = Seo::find($request->id);
        
            $seo->page_name= $request->page_name;
            $seo->meta_title= $request->meta_title;
            $seo->meta_desc= $request->meta_desc;
            $seo->meta_keyword= $request->meta_keyword;
            if($request->hasfile('banner')){
                @unlink(url('storage/app/'.$seo->banner));
                $seo->banner = $request->file('banner')->store('public/images/seo');
            }
            $seo->save();
        }
        return redirect(route('admin.seo'))->with('message', 'Seo Added');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $seo = Seo::find($id);
        return view('admin.settings.manage_seo',['seo'=>$seo]);
  
    }


// CMS Heading
    public function heading()
    {
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.settings.cms_heading');      
    }

    public function dataHeading(Request $request)
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


        $totalFilter = DB::table('cms_headings');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('cms_headings');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('cms_headings');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('cms_headings');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){

            $data[$key]->action = '<a href="'. route('admin.heading_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <!-- <a href="#" onclick="deleteRecord('."'cms_headings',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a> --> ';
                
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

    public function addHeading(){

        return view('admin.settings.manage_cms_heading');
       
    }

    public function createHeading(Request $request)
    {
        if($request->id==0){

        $cms_heading = new CmsHeading;

            $cms_heading->title= $request->title;
            $cms_heading->subtitle= $request->subtitle;
            $cms_heading->description= $request->description;
            $cms_heading->save();
        } else {
            $cms_heading = CmsHeading::find($request->id);
        
            $cms_heading->title= $request->title;
            $cms_heading->subtitle= $request->subtitle;
            $cms_heading->description= $request->description;
            $cms_heading->save();
        }
        return redirect(route('admin.heading'))->with('message', 'cms heading Added');
    }

    public function editHeading($id)
    {
        $id = Crypt::decrypt($id);
        $cms_heading = CmsHeading::find($id);
        return view('admin.settings.manage_cms_heading',['heading'=>$cms_heading]);
      
    }


}
