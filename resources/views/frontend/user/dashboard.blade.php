@extends('frontend.layouts.main')

@section('content')
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-top text-center">
                        <h4>User Dashboard</h4>
                        <img loading="lazy" src="{{asset('frontend-assets/images/heartbeat.png')}}" alt="{{Auth::user()->name}}">
                        <p>{{Auth::user()->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
