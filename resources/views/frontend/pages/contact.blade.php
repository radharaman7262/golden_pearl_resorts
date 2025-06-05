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
                            <h1>Contact</h1>
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
                                            <div class="col-lg-12">
                                                <h3>{{ business_setting('site_name') }}</h3>
                                                <address>
                                                    <span><strong>Address:</strong>{{ business_setting('address') }}</span>
                                                    {{-- <span><strong>Address:</strong>100 S Main St, Los Angeles, CA</span> --}}
                                                    <span><strong>Phone:</strong><a href="tel:{{ business_setting('phone_no1') }}">{{ business_setting('phone_no1') }}</a></span>
                                                    {{-- <span><strong>Fax:</strong>{{ business_setting('phone_no2') }}</span> --}}
                                                    <span><strong>Email:</strong><a href="mailto:{{ business_setting('email_id') }}">{{ business_setting('email_id') }}</a></span>
                                                </address>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>

                                        
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="map-container map-fullwidth">
                                            <iframe src="{{ business_setting('map') }}" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
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
