@extends('frontend.layouts.main')
@section('Rooms', 'active')
@section('meta_title', seo_helper(2)->meta_title)
@section('meta_keyword', seo_helper(2)->meta_keyword)
@section('meta_description', seo_helper(2)->meta_desc)
@section('content')

<style>
    #carousel-rooms .owl-stage{
        display: flex;
    }
</style>

    <div id="background" data-bgimage="url({{ asset('assets') }}/images/room-single/bg.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-12">
                        <h4>Luxury</h4>
                        <h1 class="d-md-block d-none">{{ $service_details->title }}</h1>
                        <h3 class="d-md-none d-block">{{ $service_details->title }}</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-content-overlay">
                            @if (isset($service_details->banner) && count(json_decode($service_details->banner)) > 0)
                                <div class="d-carousel wow fadeInRight" data-wow-delay="2s">
                                    <div id="carousel-rooms" class=" owl-carousel owl-theme">

                                        @foreach (json_decode($service_details->banner) as $service_slider)
                                            <div class="item">
                                                <div class="picframe" style="height:320px; width:100%; ">
                                                    <a class="image-popup-gallery w-100 h-100"
                                                        href="{{ url('storage/app/' . $service_slider) }}"
                                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                                        <span class="overlay">
                                                            <span class="pf_title">
                                                                <i class="icon_search"></i>
                                                            </span>
                                                            <span class="pf_caption">
                                                                {{ $service_details->title }}
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <img src="{{ url('storage/app/' . $service_slider) }}" alt=""
                                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"
                                                        class="w-100 h-100" style="aspect-ration:4/4;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                                    <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="mt-3">{{ $service_details->title }}</h3>
                                    <h6>{{ $service_details->subtitle }}</h6>
                                    <p>{!! $service_details->description !!}</p>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="d-room-details de-flex"> --}}
                                        @if($service_details->facebook)
                                        <div class="de-flex-col">
                                            <a href="{{ $service_details->facebook }}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a> 
                                        </div>
                                        @endif 

                                        @if($service_details->twiter)
                                        <div class="de-flex-col">
                                            <a href="{{ $service_details->twiter }}" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        @endif

                                        @if($service_details->instagram)
                                        <div class="de-flex-col">
                                            <a href="{{ $service_details->instagram }}" target="_blank"><i class="fa fa-instagram fa-lg"></i></a> 
                                        </div>
                                        @endif

                                        @if($service_details->linkedin)
                                        <div class="de-flex-col">
                                            <a href="{{ $service_details->linkedin }}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a> 
                                        </div>
                                        @endif
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->
        <!-- footer begin -->
        @include('frontend.layouts.footer')
        <!-- footer close -->
    </div>
@endsection
