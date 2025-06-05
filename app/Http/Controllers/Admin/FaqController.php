<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin\Faq;
use App\Models\Admin\Testimonial;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function faq(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.home.faq');
    }

    public function dataFaq(Request $request)
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


        $totalFilter = DB::table('faqs');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('question','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('faqs');
            $data = $data->where('question','like','%' .$searchValue. '%');
        }

        $data = DB::table('faqs');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('faqs');
            $data = $data->where('question','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'faqs', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.faq_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'faqs',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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

    public function addFaq(){
        return view('admin.home.manage_faq');
  
    }

    public function createFaq(Request $request)
    {
        if($request->id==0){

        $faq = new faq;

            $faq->question= $request->question;
            $faq->answer= $request->answer;
            $faq->save();
        } else {
            $faq = Faq::find($request->id);
        
            $faq->question= $request->question;
            $faq->answer= $request->answer;
            $faq->save();
        }
        return redirect(route('admin.faq'))->with('message', 'faq Added');
    }

    public function editFaq($id)
    {
        $id = Crypt::decrypt($id);
        $faq = Faq::find($id);
        return view('admin.home.manage_faq',['faq'=>$faq]);
   
    }


// Testimonials
    public function testimonial(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        return view('admin.services.testimonial');
    }

    public function dataTestimonial(Request $request)
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


        $totalFilter = DB::table('testimonials');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('testimonials');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('testimonials');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('testimonials');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->image = '<img loading="lazy" src="'.url('storage/app/'.$item->image).'" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/.jpg").'\';">';

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'testimonials', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.testimonial_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'testimonials',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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

    public function addTestimonial(){
        return view('admin.services.manage_testimonial');
   
    }

    public function createTestimonial(Request $request)
    {
        $request->validate([
            // 'title' => ['required', 'string', 'max:255'],
            // 'sub_title' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'numeric', 'min:10', 'max:11'],
        ]);
        if($request->id==0){

            $testimonial = new testimonial;

            $testimonial->name= $request->name;
            $testimonial->designation= $request->designation;
            $testimonial->comment= $request->comment;
            $testimonial->star= $request->star;
            if($request->hasfile('image')){
                $testimonial->image = $request->file('image')->store('public/images/testimonial');
            }
            $testimonial->save();
        } else {
            $testimonial = Testimonial::find($request->id);
        
            $testimonial->name= $request->name;
            $testimonial->designation= $request->designation;
            $testimonial->comment= $request->comment;
            $testimonial->star= $request->star;
            if($request->hasfile('image')){
                @unlink('storage/app/'.$testimonial->image);
                $testimonial->image = $request->file('image')->store('public/images/testimonial');
            }
            $testimonial->save();
        }
        return redirect(route('admin.testimonial'))->with('message', 'testimonial Added');
    }

    public function editTestimonial($id)
    {
        $id = Crypt::decrypt($id);
        $testimonial = Testimonial::find($id);
        return view('admin.services.manage_testimonial',['testimonial'=>$testimonial]);
  
    }

    
}
