<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function category(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        $blog_category= BlogCategory::all();
        return view('admin.blog.blog_category',[ 'blog_category'=>$blog_category]);
    }    

    public function dataCategory(Request $request)
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


        $totalFilter = DB::table('blog_categories');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('name','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('blog_categories');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = DB::table('blog_categories');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('blog_categories');
            $data = $data->where('name','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'blog_categories', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div>';
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.blog_category_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'blog_categories',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';

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

    public function addCategory(){
        return view('admin.blog.manage_blog_category');
    
    }

    public function createCategory(Request $request)
    {
        if($request->id==0){

        $blog_category = new BlogCategory;

            $blog_category->name= $request->name;
            $blog_category->slug= str()->slug($request->name);
            $blog_category->save();
        } else {
            $blog_category = BlogCategory::find($request->id);
        
            $blog_category->name= $request->name;
            $blog_category->slug= str()->slug($request->name);
            $blog_category->save();
        }
        return redirect(route('admin.blog_category'))->with('message', 'Blog Category Added');
    }

    public function editCategory($id)
    {
        $id = Crypt::decrypt($id);
        $blog_category = BlogCategory::find($id);

        return view('admin.blog.manage_blog_category',['blog_category'=>$blog_category]);
    }



// // Blogs
    public function blog(){
	// if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }
        $blog= Blog::all();

        return view('admin.blog.blog',[ 'blog'=>$blog]);
    }

    public function dataBlog(Request $request)
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


        $totalFilter = DB::table('blogs');
        if(!empty($searchValue)){
            $totalFilter = $totalFilter->where('title','like','%' .$searchValue. '%');
        }
        $totalFilter = $totalFilter->count();

        if(!empty($searchValue)){
            $data = DB::table('blogs');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = DB::table('blogs');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if(!empty($searchValue)){
            $data = DB::table('blogs');
            $data = $data->where('title','like','%' .$searchValue. '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach($data as $key => $item){
            $data[$key]->category_id = getName($item->category_id, 'blog_categories')->name;
            $data[$key]->staff_id = getName($item->staff_id, 'admins')->name;
            $data[$key]->image = '<img loading="lazy" src="'.url('storage/app/'.$item->image).'" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';">';
            $data[$key]->banner = '<img loading="lazy" src="'.url('storage/app/'.$item->banner).'" onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';" height="80px" width="80px">';

            $data[$key]->company_logo = '<img loading="lazy" src="'.url('storage/app/'.$item->company_logo).'" onerror="this.onerror=null;this.src=\''.asset("assets/images/defaultimg.jpg").'\';" height="80px" width="80px">';


            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_'.$item->id.'" type="checkbox" data-status="'.$item->status.'" onclick="changeStatus('."'blogs', 'status',".$item->id.')" ';
                if($item->status == 1){
                    $status .='checked';
                }
                $status .='> </div> ' ;
            $data[$key]->status= $status;

            $data[$key]->action = '<a href="'. route('admin.blog_edit',['id'=>Crypt::encrypt($item->id)]) .'" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord('."'blogs',".  $item->id .')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';
                
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
	
    // public function addBlog(){
    //     $blog_category = BlogCategory::where('status',1)->select('id','name')->orderBy('name','ASC')->get();
    //     $staff = Admin::where('status',1)->select('id','name')->orderBy('name','ASC')->get();

    //     return view('admin.blog.manage_blog')->with(['blog_category'=>$blog_category,'staff'=>$staff]);
    // }

    // public function createBlog(Request $request)
    // {
    //     if($request->id==0){

    //     $blog = new blog;

    //         $blog->slug= str()->slug($request->title);
    //         $blog->category_id= $request->category_id;
    //         $blog->staff_id= $request->staff_id;
    //         $blog->title= $request->title;
    //         $blog->meta_title= $request->meta_title;
    //         $blog->meta_desc= $request->meta_desc;
    //         $blog->meta_keyword= $request->meta_keyword;
    //         $blog->date= $request->date;
    //         $blog->short_description= $request->short_description;
    //         $blog->long_description= $request->long_description;
    //         if($request->hasfile('image')){
    //             @unlink('storage/app/'.$blog->image);
    //             $blog->image = $request->file('image')->store('public/images/blog');
    //         }
    //         if($request->hasfile('banner')){
    //             @unlink('storage/app/'.$blog->banner);
    //             $blog->banner = $request->file('banner')->store('public/images/blog');
    //         }
            
    //     $blog->save();
    //     } else {
    //         $blog = Blog::find($request->id);
        
    //         $blog->meta_title= $request->meta_title;
    //         $blog->meta_desc= $request->meta_desc;
    //         $blog->meta_keyword= $request->meta_keyword;
    //         $blog->slug= str()->slug($request->title);
    //         $blog->category_id= $request->category_id;
    //         $blog->staff_id= $request->staff_id;
    //         $blog->title= $request->title;
    //         $blog->date= $request->date;
    //         $blog->short_description= $request->short_description;
    //         $blog->long_description= $request->long_description;
    //         if($request->hasfile('image')){
    //             @unlink('storage/app/'.$blog->image);
    //             $blog->image = $request->file('image')->store('public/images/blog');
    //         }
    //         if($request->hasfile('banner')){
    //             @unlink('storage/app/'.$blog->banner);
    //             $blog->banner = $request->file('banner')->store('public/images/blog');
    //         }
    //         $blog->save();
    //     }
    //     return redirect(route('admin.blog'))->with('message', 'Blog  Added');
    // }

    // public function editBlog($id)
    // {
    //     $id = Crypt::decrypt($id);
    //     $blog = Blog::find($id);
    //     $blog_category = BlogCategory::where('status',1)->select('id','name')->orderBy('name','ASC')->get();
    //     $staff = Admin::where('status',1)->select('id','name')->orderBy('name','ASC')->get();

    //     return view('admin.blog.manage_blog',['blog'=>$blog,'blog_category'=>$blog_category,'staff'=>$staff]);
    // }


    // companypageadded
    public function addBlog()
{
    $blog_category = BlogCategory::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();
    $staff = Admin::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();

    return view('admin.blog.manage_blog')->with([
        'blog_category' => $blog_category,
        'staff' => $staff
    ]);
}

public function createBlog(Request $request)
{
    $blog = $request->id == 0 ? new Blog : Blog::find($request->id);

    $blog->slug = str()->slug($request->title);
    $blog->category_id = $request->category_id;
    $blog->staff_id = $request->staff_id;
    $blog->title = $request->title;
    $blog->meta_title = $request->meta_title;
    $blog->meta_desc = $request->meta_desc;
    $blog->meta_keyword = $request->meta_keyword;
    $blog->date = $request->date;
    $blog->short_description = $request->short_description;
    $blog->long_description = $request->long_description;
    $blog->company_name = $request->company_name;

    // Handle image uploads
    if ($request->hasFile('image')) {
        if ($blog->image) {
            Storage::delete($blog->image);
        }
        $blog->image = $request->file('image')->store('public/images/blog');
    }

    if ($request->hasFile('banner')) {
        if ($blog->banner) {
            Storage::delete($blog->banner);
        }
        $blog->banner = $request->file('banner')->store('public/images/blog');
    }

    if ($request->hasFile('company_logo')) {
        if ($blog->company_logo) {
            Storage::delete($blog->company_logo);
        }
        $blog->company_logo = $request->file('company_logo')->store('public/images/blog');
    }

    $blog->save();

    $message = $request->id == 0 ? 'Blog Added Successfully' : 'Blog Updated Successfully';

    return redirect(route('admin.blog'))->with('message', $message);
}

public function editBlog($id)
{
    $id = Crypt::decrypt($id);
    $blog = Blog::find($id);
    $blog_category = BlogCategory::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();
    $staff = Admin::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();

    return view('admin.blog.manage_blog', [
        'blog' => $blog,
        'blog_category' => $blog_category,
        'staff' => $staff
    ]);
}

    // compnaypageended

    
}
