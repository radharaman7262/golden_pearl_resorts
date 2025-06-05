<?php

use App\Models\Admin\Admin;
use App\Models\Admin\BusinessSetting;
use App\Models\Admin\CmsHeading;
use App\Models\Admin\Gallery;
use App\Models\Admin\Seo;
use App\Models\Admin\Role;
use App\Models\User\Contact;
use Illuminate\Support\Facades\Auth;
use App\Mail\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;



if (!function_exists('checkAccess')) {
    function checkAccess($permission)
    {
        //Auth::user()->is_admin;
        $role = Role::find(Auth::user()->is_admin);
        if (in_array($permission, json_decode($role['permission']))) {
            return true;
        }
        return false;
    }
}

function business_setting($key)
{
    $settings= BusinessSetting::select("$key")->find(1);
    return $settings->$key;
}

if(!function_exists('gallery_helper')){

    function gallery_helper(){
       
        $gallery = Gallery::where('status',1)->select('id','title','image')->latest()->limit(9)->get();
        return $gallery;
    }
}

// if(!function_exists('exellence_helper')){

//     function exellence_helper(){
       
//         $exellence = Department::where(['status'=>1, 'excellence'=>1])->select('id','title','icon','slug')->get();
//         return $exellence;
//     }
// }



if(!function_exists('getName')){

    function getName($id, $table)
    {
        $name = DB::table($table)->find($id);
        return $name;
    }
}

if(!function_exists('seo_helper')){

    function seo_helper($id){

        $seo = Seo::find($id);
        return $seo;
    }
}

if(!function_exists('cms_heading')){

    function cms_heading($id){

        $cms_heading = CmsHeading::find($id);
        return $cms_heading;
    }
}

// send email dynamically
if(!function_exists('sendMail')){
    function sendMail($email, $page, $data){
        $mailData = [
            'page' => $page,
            'data' => $data
        ];
        Mail::to($email)->send(new Email($mailData));
    }
}


if (!function_exists('chartDataEnquiryFeedback')) {
    function chartDataEnquiry()
    {
        $data1=Contact::where(['title'=>'Feedback'])->count();
        $data2=Contact::where(['title'=>'Complaint'])->count();
        $data3=Contact::where(['title'=>'Enquiry'])->count();

        $totalcount = $data1 + $data2 + $data3;
        
        return ['feedback'=>($data1*100)/ $totalcount,'complaint'=>($data2*100)/ $totalcount,'enquiry'=>($data3*100)/ $totalcount];
    }
}

if (!function_exists('chartDataEnquiryComplaint')) {
    function chartDataEnquiryComplaint()
    {
        $chart=Contact::where(['title'=>'Complaint'])->avg('id');
        return $chart;
    }
}

if (!function_exists('chartDataEnquiryEnquiry')) {
    function chartDataEnquiryEnquiry()
    {
        $chart=Contact::where(['title'=>'Enquiry'])->avg('id');
        return $chart;
    }
}


?>