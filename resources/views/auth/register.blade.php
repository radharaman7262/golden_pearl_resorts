@extends('frontend.layouts.main')
@php
$settings= \App\Models\Admin\BusinessSetting::find(1);
@endphp
@section('content')

 
        <section class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-image" style="border: orange 3px solid; padding: 7px;">
                        <iframe loading="lazy"  width="100%" height="315" src="{{$settings->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="app-box text-center" style="margin-top: 0px;border: #ff9900 2px solid;padding: 21px;margin-bottom: 2%;">
                            <h4>Registere Here</h4>
                            <img loading="lazy" src="{{asset('frontend-assets/images/heartbeat.png')}}" alt="" ><br />
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <input name="name" type="text" maxlength="40" id="Name" placeholder="Name" class="form-control" required="" /><br />
                                <input name="phone" type="number" maxlength="10" id="phone" placeholder="Mobile No" class="form-control" required="" /><br />
                                <input name="email" type="text" maxlength="40" id="email" placeholder="Email Id" class="form-control" required="" /><br /> 
                                
                                <input name="password" type="text" maxlength="10" id="password" placeholder="password" class="form-control" required="" /><br />
                                <input type="submit" name="Submit" value="Register" onclick="Validation();" id="Submit" class="btn btn-primary" /><span id="ContentPlaceHolder1_lblMsg"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection