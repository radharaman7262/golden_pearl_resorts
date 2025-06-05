@extends('frontend.layouts.main')
@section('content')
@section('contact', 'active')
@section('meta_title', seo_helper(5)->meta_title)
@section('meta_keyword', seo_helper(5)->meta_keyword)
@section('meta_description', seo_helper(5)->meta_desc)


<div id="background" data-bgimage="url({{asset('assets')}}/images/background/9.jpg) fixed"></div>
<div id="content-absolute">
    
    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-12">
                    {{-- <h4>Make a</h4> --}}
                    <h1>Privacy & Policy</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="de-content-overlay">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div>
                                        <address>
                                        	<span><strong></strong>{!! business_setting('privacy') !!}</span>
										</address>
                                    </div>
                                </div>
                                <div class="spacer-single"></div>
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
@endsection
