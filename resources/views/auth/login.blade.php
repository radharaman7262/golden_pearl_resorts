@extends('frontend.layouts.main')

@section('content')

        <section class="welcome-area">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-3 col-md-3"></div>                        
                    <div class="col-lg-6 col-md-6">
                        <div class="app-box text-center" style=" margin-top: 0px; border: #ff9900 2px solid; padding: 21px; margin-bottom: 2%;">
                            <h4>Login Here</h4>
                            <img loading="lazy" src="{{asset('frontend-assets/images/heartbeat.png')}}" alt="" ><br />  

                                @error('email')
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                                @enderror
                                @error('password')
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                                @enderror
                                @if(session('error'))
                                <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                                @endif

                                @if(session('success'))
                                <div class="alert alert-danger" role="alert">{{session('success')}}</div>
                                @endif

                            <form action="{{route('login')}}" method="post">
                                @csrf                   
                                <input name="email" type="email" maxlength="20"  placeholder="User Email" class="form-control" required="" /> <br /> 
                               
                                <input name="password" type="password" maxlength="10"  placeholder="password" class="form-control" required="" /> <br /> 
                              
                                <input type="submit"  value="Login"  class="btn btn-primary" /> <br />
                                <span id="ContentPlaceHolder1_lblMsg" style="background-color:Yellow; color:Red;"></span><hr />
                                <p style="color:Red;"><a href="{{route('register')}}">Click Here for New Registration</a></p>
							</form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3"></div>    
                </div>
            </div>
        </section>

@endsection
<!-- login area end -->