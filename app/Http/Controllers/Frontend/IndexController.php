<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Feature;
use App\Models\Admin\Gallery;
use App\Models\Admin\Faq;
use App\Models\Admin\Services;
use App\Models\Admin\Slider;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function index()
{
    $slider = Slider::where('status',1)->get();
    $service = Services::where('status',1)->latest()->limit(3)->get();
    $testimonial = Testimonial::where('status',1)->latest()->get();
    $brand = Gallery::where(['status'=>1, 'type'=>'Brand'])->latest()->get();
    
    return view('frontend.index', [
        'sliders' => $slider,
        'services' => $service,
        'testimonials' => $testimonial,
        'brands' => $brand
    ]);
}



// Pages  About
    public function about()
    {
        $feature = Feature::where('status',1)->latest()->get();
        return view('frontend.pages.about', ['features' => $feature]);
    }


// Term-Coditions
    public function termCondition()
    {
        return view('frontend.pages.term');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacy');
    }
    

    public function contact()
    {
        $faq = Faq::where(['status'=>1])->get();

        return view('frontend.pages.contact', ['faqs' => $faq]);
    }
   
    public function invest()
    {
        $brand_pdf = Gallery::where(['status'=>1, 'type'=>'Brand'])->latest()->get();

        return view('frontend.pages.invest', ['brand_pdf' => $brand_pdf]);
    }
   
    public function gallery(){
        $gallery = Gallery::where(['status'=>1, 'type'=>'Gallery'])->latest()->get();

        return view('frontend.pages.gallery', ['galleries' => $gallery]);
    }
  
    public function offers(){

        return view('frontend.pages.offers');
    }
    
    public function booking(){

        return view('frontend.pages.booking');
    }
    

//Services
    public function services()
    {
        $service = Services::where(['status' => 1])->get();
        
        return view('frontend.services.rooms', ['services' => $service]);
    }

    public function serviceDetails($slug)
    {
        $service_details = Services::where(['status'=>1, 'slug' => $slug])->first();
        if (!isset($service_details)) {
            return redirect()->route('front.index')->with('error', 'Accomodition Not Found');
        }
        
        return view('frontend.services.room_details', ['service_details' => $service_details]);
    }


// Blogs
    public function blog($bcat_id = "")
    {   
        if ($bcat_id == null) {
            $blog = Blog::where(['status' => 1])->latest()->paginate(6);
        } else {
            $blog = Blog::where(['status' => 1, 'category_id' => $bcat_id])->latest()->paginate(6);
        }
        return view('frontend.services.blog', ['blogs' => $blog]);
    }

    public function blogDetails($slug)
    {   
        $blog_details = Blog::where(['status'=>1, 'slug' => $slug])->first();
        if (!isset($blog_details)) {
            return redirect()->route('front.index')->with('error', 'Blog Not Found');
        }
        $blog_category = BlogCategory::where(['status'=>1])->get();
        return view('frontend.services.blog_details', ['blog_details' => $blog_details, 'blog_category' => $blog_category]);
    }
	
	
    // public function searchDoctor(Request $request)
    // {    
    //     $doctor_search = Doctor::where('title','LIKE',"%{$request->search}%")->where('status', 1)->latest()->paginate(12);
	
    //     return view('frontend.department.doctor', ['doctor'=>$doctor_search,'search'=>$request->search]);
    // }

    // public function searchData(Request $request)
    // {
    //     $doctor_search = Doctor::where('title','like','%' .$request->search. '%')->where(['status'=>1])->select('id','department_id','title','designation','slug')->get();
    //     //  dd(count($doctor_search));

    //     $result = '';
    //     if(count($doctor_search)>0)
    //     {
    //         $result .= '<ul class="p-2 list-group list-group-flush">
    //                         <h4 >Doctors</h4>
    //                     </ul>';
    //         foreach ($doctor_search as  $doctor) {
    //             $department = Department::whereIn('id', json_decode($doctor->department_id))->pluck('title');

    //             $result .= '<li class="list-group-item">
    //                 <a href="'.route('front.doctor_detail', ['doctor_slug' => $doctor->slug]).'">
    //                     <p class="mb-1">' . $doctor->title .'</p>
    //                     <small>' . $department->implode(', ') . '</small>
    //                     <small>' . $doctor->designation . '</small>
    //                 </a>
    //             </li>';
    //         }
    //     }else{
    //         echo "<b>Record not matched!</b>";
    //     }
    //     echo $result;
    // }
    

}