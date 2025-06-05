<?php

namespace App\Http\Controllers;

use App\Models\User\Appointment;
use App\Models\User\Career;
use Illuminate\Http\Request;
use App\Models\User\Contact;
use App\Models\User\NewsLetter;
use Illuminate\Support\Carbon;

class UserDashboardController extends Controller
{
    public function dashboard(){ 
        $data=[
            'title'=>'Dashboard'
        ];
        return view('frontend.user.dashboard',['data'=>$data]);
    }

    public function createContact(Request $request)
    {
        $contact = new Contact;
		
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->phone= $request->phone;
        $contact->subject= $request->subject;
        $contact->message= $request->message;
        // $data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message
        // ];
        // sendMail($request->email, 'contact_mail', $data);
        $contact->save();
        return redirect()->back()->with('message', 'Enquiry submit successfully');
    }

    public function createCareer(Request $request)
    {
        $career = new Career;
		
        $career->department_id= $request->department_id;
        $career->name= $request->name;
        $career->email= $request->email;
        $career->phone= $request->phone;
        $career->location= $request->location;
        $career->organization= $request->organization;
        $career->experience= $request->experience;
        $career->designation= $request->designation;
        $career->current_ctc= $request->current_ctc;
        $career->subject= $request->subject;
        $career->message= $request->message;
        if($request->hasfile('resume'))
        {
            @unlink('storage/app/'.$career->resume);
            $resume = $request->file('resume');
            $ext = $resume->extension();

            $random = rand(11111,99999);
            $user_name = str_replace(' ', '-', $request->name);

            $resume_name = $user_name . '-' . $random .'.'. $ext;
            
            $resume->storeAs('public/images/resume', $resume_name);
            $career->resume = 'public/images/resume/'.$resume_name;
        }
        $career->save();
        return redirect()->back()->with('message', 'Career form submit successfully');
    }


// Appointment Doctor
    public function createAppointment(Request $request)
    {
        // dd($request);
        $booked_slot = slot_booked($request->slot_id, $request->slot_time);
        if($booked_slot){

            return redirect()->back()->with('error', 'Appointment date booked already');
        }

        $request->validate([
            'slot_id' => ['required'],
            'slot_time' => ['required'],
        ]);
       
        $appointment = new Appointment;
		
        $appointment->slot_id= $request->slot_id;
        $appointment->slot_time= $request->slot_time;
        $appointment->name= $request->name;
        $appointment->email= $request->email;
        $appointment->phone= $request->phone;
        $appointment->mrn= $request->mrn;
        $appointment->gender= $request->gender;
        $appointment->dob= $request->dob;
        $appointment->address= $request->address;
        $appointment->message= $request->message;
        
        $appointment->save();
        return redirect()->back()->with('message', 'Appointment form submit successfully');
   
    }


    public function createNewsLetter(Request $request)
    {
        $news_letter = new NewsLetter;

        $news_letter->email = $request->email;
        $news_letter->save();
        return redirect()->back()->with('message', 'Email ID Send');
    }

   
}
