<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin\BusinessSetting;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\IniSetting;

class BusinessSettingController extends Controller
{
    public function index(){
    // if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }        
        $settings= BusinessSetting::find(1);
        
        return view('admin.settings.business_setting',['settings'=>$settings]);
    }

    public function about(){
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }        
            $settings= BusinessSetting::find(1);
            
            return view('admin.settings.about',['settings'=>$settings]);
        }
	
    public function update(Request $request)
    {
        $settings = BusinessSetting::find(1);
        if(isset($request->submit1)){

            if($request->hasfile('fav_icon'))
            {
				@unlink('storage/app/'.$settings->fav_icon);
            	$settings->fav_icon = $request->file('fav_icon')->store('public/images/business_setting');
            }
            if($request->hasfile('header_logo'))
            {
				@unlink('storage/app/'.$settings->header_logo);
            	$settings->header_logo = $request->file('header_logo')->store('public/images/business_setting');
            }
            if($request->hasfile('footer_logo'))
            {
				@unlink('storage/app/'.$settings->footer_logo);
            	$settings->footer_logo = $request->file('footer_logo')->store('public/images/business_setting');
            }
            if($request->hasfile('testimonial_banner'))
            {
				@unlink('storage/app/'.$settings->testimonial_banner);
                $settings->testimonial_banner = $request->file('testimonial_banner')->store('public/images/business_setting');
            }

            if($request->hasfile('testimonial_banner2'))
            {
				@unlink('storage/app/'.$settings->testimonial_banner2);
                $settings->testimonial_banner2 = $request->file('testimonial_banner2')->store('public/images/business_setting');
            }
			// if($request->hasfile('catlog'))
            // {
            // 	@unlink('storage/app/'.$settings->catlog);
            //     $catlog = $request->file('catlog');
            //     $ext = $catlog->extension();
			
            //     $catlog_name = 'Schonheit_Brochure' .'.'. $ext;
				
            //     $catlog->storeAs('public/images/business_setting', $catlog_name);
            //     $settings->catlog = 'public/images/business_setting/'.$catlog_name;
            // }
			// if($request->hasfile('appointment'))
            // {
            // 	@unlink('storage/app/'.$settings->appointment);
            //     $appointment = $request->file('appointment');
            //     $ext = $appointment->extension();
				
            //     $appointment_name = 'Schonheit_Distributorship_Form'. '.' . $ext;
            //     $appointment->storeAs('public/images/business_setting', $appointment_name);
            //     $settings->appointment = 'public/images/business_setting/'.$appointment_name;
            // }
            $settings->site_name= $request->site_name;
            $settings->email_id= $request->email_id;
            $settings->email_id2= $request->email_id2;
            $settings->phone_no1= $request->phone_no1;
            $settings->phone_no2= $request->phone_no2;
            $settings->address= $request->address;
            $settings->footer_description= $request->footer_description;
            $settings->copyright= $request->copyright;
            $settings->invest_paragraph= $request->invest_paragraph;
            $settings->timing= $request->timing;
            $settings->map = $request->map;
        }

        if(isset($request->submit2)){

            $settings->facebook= $request->facebook;
            $settings->instagram= $request->instagram;
            $settings->linkedin= $request->linkedin;
            $settings->twitter= $request->twitter;
            $settings->youtube= $request->youtube;
        }

        if(isset($request->submit3)){

            if($request->hasfile('about_image'))
            {
				@unlink('storage/app/'.$settings->about_image);
                $settings->about_image = $request->file('about_image')->store('public/images/business_setting');
            }
            if($request->hasfile('image_baner'))
            {
				@unlink('storage/app/'.$settings->image_baner);
                $settings->image_baner = $request->file('image_baner')->store('public/images/business_setting');
            }
           
            $settings->about_us= $request->about_us;
            $settings->short_description = $request->short_description;
            $settings->long_description = $request->long_description;
            $settings->youtube_link= $request->youtube_link;
			$settings->term_condition= $request->term_condition;
            $settings->privacy= $request->privacy;
        }
		
		if(isset($request->submit4)){

            $settings->meta_title= $request->meta_title;
            $settings->meta_keywords= $request->meta_keywords;
            $settings->meta_description= $request->meta_description; 
        }
        $settings->save();
        return redirect(route('admin.business_setting'))->with('message', 'Updated Settings');
   
    }
	
	
// CMS Setting Update
	public function cmsSetting(){
    // if (!checkAccess(52)) {
    //     return redirect()->back()->with('message', 'Access Denied');
    // }       
        $settings= BusinessSetting::find(1);
        
        return view('admin.settings.cms_settings',['settings'=>$settings]);
    }

    public function updateCmsSetting(Request $request)
    {
        $settings = BusinessSetting::find(1);
        if(isset($request->submit)){

            if($request->hasfile('icon1'))
            {
				@unlink('storage/app/'.$settings->icon1);
                $settings->icon1 = $request->file('icon1')->store('public/images/business_setting');
            }
            if($request->hasfile('icon2'))
            {
				@unlink('storage/app/'.$settings->icon2);
                $settings->icon2 = $request->file('icon2')->store('public/images/business_setting');
            }
            if($request->hasfile('icon3'))
            {
				@unlink('storage/app/'.$settings->icon3);
                $settings->icon3 = $request->file('icon3')->store('public/images/business_setting');
            }
            if($request->hasfile('icon4'))
            {
				@unlink('storage/app/'.$settings->icon4);
                $settings->icon4 = $request->file('icon4')->store('public/images/business_setting');
            }
            if($request->hasfile('what_image'))
            {
				@unlink('storage/app/'.$settings->what_image);
                $settings->what_image = $request->file('what_image')->store('public/images/business_setting');
            }
            if($request->hasfile('service_image'))
            {
				@unlink('storage/app/'.$settings->service_image);
                $settings->service_image = $request->file('service_image')->store('public/images/business_setting');
            }
            $settings->mission= $request->mission;
            $settings->vission= $request->vission;
            $settings->amenity= $request->amenity;
            $settings->patient_guide= $request->patient_guide;
            $settings->count1= $request->count1;
            $settings->count2= $request->count2;
            $settings->count3= $request->count3;
            $settings->count4= $request->count4;
            $settings->title1= $request->title1;
            $settings->title2= $request->title2;
            $settings->title3= $request->title3;
            $settings->title4= $request->title4;
        }
        $settings->save();
        return redirect(route('admin.cms_setting'))->with('message', 'Updated CMS Setting');
    }

    
}
