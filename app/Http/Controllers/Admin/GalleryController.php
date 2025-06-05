<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin\Gallery;
use App\Models\Admin\Slider;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
/// Image Galleries
    public function Gallery(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.gallery.gallery');
    }

    public function dataGallery(Request $request)
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


        $totalFilter = DB::table('galleries');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('galleries');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('galleries');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('galleries');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->image = '<img loading="lazy" src="'.url('storage/app/'.$item->image).'" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">';

            $data[$key]->broucher = !empty($item->date) ? '<embed src="' . url('storage/app/' . $item->date) . '" class="img-thumbnail" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">' : '<img src="'.asset("assets/images/defaultimg.jpg").'" class="img-thumbnail" height="80px" width="80px">';
            
            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'galleries', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.gallery_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'galleries',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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

    public function addGallery(){

        return view('admin.gallery.manage_gallery');
    }

    public function createGallery(Request $request)
    {
        if($request->id==0){

            $gallery = new Gallery;

            $gallery->type= $request->type;
            $gallery->title= $request->title;
            if($request->hasfile('image')){
                $gallery->image = $request->file('image')->store('public/images/gallery');
            }
            if($request->hasfile('date')){
                $gallery->date = $request->file('date')->store('public/images/gallery');
            }
            $gallery->save();
            return redirect(route('admin.gallery'))->with('message', 'Gallery Added');
        } else {
            $gallery = Gallery::find($request->id);

            $gallery->type= $request->type;
            $gallery->title= $request->title;
            if($request->hasfile('image')){
                @unlink(url('storage/app/'.$gallery->image));
                $gallery->image = $request->file('image')->store('public/images/gallery');
            }
            if($request->hasfile('date')){
                @unlink(url('storage/app/'.$gallery->date));
                $gallery->date = $request->file('date')->store('public/images/gallery');
            }
            $gallery->save();
        }
        return redirect(route('admin.gallery'))->with('message', 'Gallery Updated');
    }

    public function editGallery($id)
    {
        $id = Crypt::decrypt($id);
        $gallery = Gallery::find($id);

        return view('admin.gallery.manage_gallery',['gallery'=>$gallery]);
   
    }


// Slider
    public function slider(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.gallery.slider');
    }

    public function dataSlider(Request $request)
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


        $totalFilter = DB::table('sliders');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('sliders');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('sliders');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('sliders');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->image = '<img loading="lazy" src="'.url('storage/app/'.$item->image).'" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">';
            
            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'sliders', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.slider_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>';
                
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

    public function addSlider(){
            
        return view('admin.gallery.manage_slider');
       
    }

    public function createSlider(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'link' => ['required'],
        ]);
        if($request->id==0){

            $slider = new Slider;

            $slider->title= $request->title;
            $slider->sub_title= $request->sub_title;
            $slider->link= $request->link;
            if($request->hasfile('image')){
                $slider->image = $request->file('image')->store('public/images/slider');
            }
            $slider->save();
        } else {
            $slider = Slider::find($request->id);
            
            $slider->title= $request->title;
            $slider->sub_title= $request->sub_title;
            $slider->link= $request->link;
            if($request->hasfile('image')){
                @unlink('storage/app/'.$slider->image);
                $slider->image = $request->file('image')->store('public/images/slider');
            }
            $slider->save();
        }
        return redirect(route('admin.slider'))->with('message', 'slider Added');
    }

    public function editSlider($id)
    {
        $id = Crypt::decrypt($id);
        $slider = Slider::find($id);
        return view('admin.gallery.manage_slider',['slider'=>$slider]);
    }

}
