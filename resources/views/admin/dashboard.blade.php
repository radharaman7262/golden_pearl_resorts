@extends('admin.layouts.main')
@section('page_title', 'Dashboard')

@section('body')
<div class="container-fluid">
    <div class="mb-3 form-head d-flex align-items-center mb-sm-4">
        <div class="me-auto">
            <h2 class="text-black font-w600">Dashboard</h2>
            <p class="mb-0">{{ business_setting('site_name') }} Admin Dashboard</p>
        </div>
        <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm"><i class="las la-user scale5 me-3"></i>{{Auth::user()->name}}</a>
    </div>
         <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $department = \App\Models\User\Contact::get()->count();
                            // $active = \App\Models\Admin\Services::where('status',1)->get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-black fs-34 font-w600">{{$department}}</h2>
                            <span>Total Enquiry</span>
                        </div>
                        <i class="flaticon-381-controls-3 fs-1" style="color:#037b66;"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                        <span class="sr-only">50% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $event = \App\Models\Admin\Gallery::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-black fs-34 font-w600">{{$event}}</h2>
                            <span>Total Galleries</span>
                        </div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z"
                                    fill="#007A64" />
                                <path
                                    d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z"
                                    fill="#007A64" />
                                <path
                                    d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z"
                                    fill="#007A64" />
                                <path
                                    d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z"
                                    fill="#007A64" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="40" height="40" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $doctor = \App\Models\Admin\Blog::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-black fs-34 font-w600">{{$doctor}}</h2>
                            <span>Total Blogs</span>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $client = \App\Models\Admin\Feature::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-black fs-34 font-w600">{{$client}}</h2>
                            <span>Total Facilities</span>
                        </div>
                        <i class="flaticon-381-internet fs-1" style="color:#037b66;"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $testimonial = \App\Models\Admin\Slider::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-black fs-34 font-w600">{{$testimonial}}</h2>
                            <span>Slider</span>
                        </div>
                        <i class="flaticon-381-notepad fs-1" style="color:#037b66;"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                {{-- <div class="col-xl-12">
                    <div class="card">
                        <div class="pb-0 border-0 card-header d-sm-flex d-block">
                            <div class="me-auto pe-3">
                                <h4 class="mb-0 text-black fs-20">Patient Enquiry</h4>
                            </div>
                            <div class="mt-3 mb-3 card-action card-tabs mt-sm-0 mb-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Daily"
                                            role="tab">
                                            Daily
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">
                                            Weekly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Monthly" role="tab">
                                            Monthly
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Daily" role="tabpanel">
                                    <div class="flex-wrap px-4 d-flex align-items-center bg-light">
                                        <div class="py-3 me-auto d-flex align-items-center">
                                            <span class="heart-ai bg-primary me-3">
                                                <i class="flaticon-381-controls-3" aria-hidden="true"></i>
                                            </span>
                                            @php
                                                $contact = \App\Models\User\Contact::get()->count();
                                            @endphp
                                            <div>
                                                <p class="mb-2 fs-18">Total Enquiry</p>
                                                <span class="fs-26 text-primary font-w600">{{$contact}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @php  $chartDataEnquiry = chartDataEnquiry();  @endphp
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div id="radialBar"></div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#BDA25C" />
                                                    </svg>
                                                   
                                                    {{round($chartDataEnquiry['feedback'])}} %
                                                </span>
                                                <span>Feedback</span>
                                            </div>
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#209F84" />
                                                    </svg>
                                                    {{round($chartDataEnquiry['complaint'])}} %
                                                </span>
                                                <span>Complaint</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#323232" />
                                                    </svg>
                                                  
                                                    {{round($chartDataEnquiry['enquiry'])}} %
                                                </span>
                                                <span>Enquiry</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Weekly" role="tabpanel">
                                    <div class="flex-wrap px-4 d-flex align-items-center bg-light">
                                        <div class="py-3 me-auto d-flex align-items-center">
                                            <span class="heart-ai bg-primary me-3">
                                                <i class="fa-regular fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div>
                                                <p class="mb-2 fs-18">Total Patient</p>
                                                <span class="fs-26 text-primary font-w600">786,360</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div id="radialBar2"></div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#BDA25C" />
                                                    </svg>
                                                    40%
                                                </span>
                                                <span>New Patient</span>
                                            </div>
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#209F84" />
                                                    </svg>
                                                    81%
                                                </span>
                                                <span>Recovered</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#323232" />
                                                    </svg>
                                                    50%
                                                </span>
                                                <span>In Treatment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Monthly" role="tabpanel">
                                    <div class="flex-wrap px-4 d-flex align-items-center bg-light">
                                        <div class="py-3 me-auto d-flex align-items-center">
                                            <span class="heart-ai bg-primary me-3">
                                                <i class="fa-regular fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div>
                                                <p class="mb-2 fs-18">Total Patient</p>
                                                <span class="fs-26 text-primary font-w600">356,730</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div id="radialBar3"></div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-12 col-md-6">
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#BDA25C" />
                                                    </svg>
                                                    90%
                                                </span>
                                                <span>New Patient</span>
                                            </div>
                                            <div class="mb-4 d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#209F84" />
                                                    </svg>
                                                    75%
                                                </span>
                                                <span>Recovered</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="text-black me-auto ps-3 font-w500 fs-30">
                                                    <svg class="me-3" width="8" height="30"
                                                        viewBox="0 0 8 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="7.65957" height="30" fill="#323232" />
                                                    </svg>
                                                    30%
                                                </span>
                                                <span>In Treatment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-12">
                    <div class="card rated-doctors">
                        <div class="pb-0 border-0 card-header">
                            <h3 class="mb-0 text-black fs-20 me-auto">Top Rated Doctors</h3>
                            <a href="{{route('admin.doctor')}}" class="btn-link text-primary">More >></a>
                        </div>
                        <div class="card-body">
                            @foreach($doctors as $key=> $doctor)

                            <div class="pb-3 mb-3 d-sm-flex pb-sm-4 border-bottom mb-sm-4 align-items-center">
                                <div class="d-flex align-items-center me-auto ps-2">
                                    <span class="num me-sm-4 me-3">#{{$key+1}}</span>
                                    <img loading="lazy" src="{{url('storage/app/'.$doctor->image)}}" alt="{{$doctor->title}}" class="img-1 me-sm-4 me-3">
                                    <div>
                                        <h4 class="mb-1 mb-sm-2"><a  class="text-black">{{$doctor->title}}</a></h4>
                                        <span class="fs-14 text-primary font-w600">{{$doctor->department}}</span>
                                    </div>
                                </div>
                                <div class="mt-3 text-sm-end mt-sm-0 star-review">
                                  
                                    <span class="text-black fs-14">{{$doctor->experience}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                {{-- <div class="col-xl-12">
                    <div class="card appointment-schedule">
                        <div class="pb-0 border-0 card-header">
                            <h3 class="mb-0 text-black fs-20">Appointment Schedule</h3>
                            <div class="dropdown ms-auto c-pointer">
                                <div class="p-2 btn-link bg-light" data-bs-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="text-black dropdown-item" href="">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-xxl-12 col-md-6 height415 dz-scroll" id="appointment-schedule">
                                    @foreach($appointments as $appointment)

                                    <div class="pb-3 mb-3 d-flex border-bottom align-items-end">
                                        <div class="me-auto">
                                            <p class="mb-2 text-black font-w600">{{date('l,  F d', strtotime((optional($appointment->slotData)->date)))}}</p>
                                            <ul>
                                                <li><i class="las la-clock"></i>{{date('h:i A', strtotime(($appointment->slot_time)))}}</li>
                                                <li><i class="las la-user"></i>{{optional(optional($appointment->slotData)->doctorData)->title}}</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
           
                {{-- <div class="col-xl-12">
                    <div class="card patient-activity">
                        <div class="pb-0 border-0 card-header">
                            <h3 class="mb-0 text-black fs-20">Recent Patient Activity</h3>
                            <div class="dropdown ms-auto c-pointer">
                                <div class="btn-link" data-bs-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z"
                                            stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="text-black dropdown-item" href="">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="pb-0 card-body">
                            <div class="table-responsive height720 dz-scroll" id="patient-activity">
                                <table class="table table-responsive-sm">
                                    <tbody>
                                        @foreach($recent_appointment as $recent)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <img loading="lazy" src="{{ asset('admin-assets') }}/images/users/avtar.jpg" alt="" class="img-2 me-3">
                                                    <div>
                                                        <h6 class="mb-1 fs-16"><a 
                                                                class="text-black">{{$recent->name}}</a></h6>

                                                        <span class="fs-14">{{$recent->created_at->diffInYears($recent->dob)}} Years Old</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <p class="mb-1 fs-14">Disease</p>
                                                    <span class="mb-auto text-primary font-w600">{{ucFirst($recent->mrn)}}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <p class="mb-1 fs-14">Status</p>
                                                    <span
                                                        class="mb-2 text-primary font-w600 d-block text-nowrap">{{ucFirst($recent->status)}}</span>
                                                    <p class="mb-0 fs-12">{{$recent->created_at->format('d/m/Y h:i A')}}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- <script>
    (function($) {
        /* "use strict" */
        var dzChartlist = function(){
            //let draw = Chart.controllers.line.__super__.draw; //draw shadow
            var screenWidth = $(window).width();
        
            var radialBar = function(){
                var options = {
                series: [{{round($chartDataEnquiry['feedback'])}}, {{round($chartDataEnquiry['complaint'])}}, {{round($chartDataEnquiry['enquiry'])}}],
                chart: {
                height: 330,
                type: 'radialBar',
                },
                plotOptions: {
                radialBar: {
                    startAngle: -180,
                    endAngle: 180,
                    hollow: {
                        margin: 0,
                        size: '30%',
                        background: 'transparent',
                    },
                    
                    track: {
                        show: true,
                        background: '#e1e5ff',
                        strokeWidth: '10%',
                        opacity: 1,
                        margin: 15, // margin is in pixels
                    },
                    dataLabels: {
                    name: {
                        fontSize: '18px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    }
                }
                },
                colors:['#BDA25C','#209F84','#323232'],
                labels: ['Feedback', 'Complaint', 'Enquiry'],
                };

                var chart = new ApexCharts(document.querySelector("#radialBar"), options);
                chart.render();
            }
        
            var lineChart = function(){
            	var options = {
                  series: [{
                    name: "Desktops",
                    data: [10, 41, 35, 51, 49, 62]
                }],
                  chart: {
                  height: 250,
                  type: 'line',
            	  toolbar: {
            		show:false,  
            	  },
                  zoom: {
                    enabled: false
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
            	  width:4,
                },
                title: {
            		show:false,
                  align: 'left'
                },
                grid: {
            		show:false,
                },
            	colors:['#007A64'],
            	yaxis: {
            		show:false,
            	},
                xaxis: {
                  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                }
                };

                var chart = new ApexCharts(document.querySelector("#lineChart"), options);
                chart.render();
            }

            /* Function ============ */
            return {
                init:function(){
                },
                
                load:function(){
                    radialBar();
                    radialBar2();
                    radialBar3();
                    lineChart();
                },
                
                resize:function(){
                    
                }
            }
        }();

        jQuery(document).ready(function(){
        });
            
        jQuery(window).on('load',function(){
            setTimeout(function(){
                dzChartlist.load();
            }, 1000); 
        });

        jQuery(window).on('resize',function(){
             
        });

    })(jQuery);
</script> --}}
@endsection
