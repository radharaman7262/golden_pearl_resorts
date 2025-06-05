@extends('frontend.layouts.main')
@section('Rooms', 'active')
@section('meta_title', seo_helper(2)->meta_title)
@section('meta_keyword', seo_helper(2)->meta_keyword)
@section('meta_description', seo_helper(2)->meta_desc)
@section('content')

    <div id="background" data-bgimage="url({{ asset('assets') }}/images/room-single/bg.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-12">
                        <h4>Luxury</h4>
                        <h1 class="d-md-block d-none">Resorts</h1>
                        <h3 class="d-md-none d-block">Resorts</h3>
                    </div>
                </div>
            </div>
        </section>

        @if (count($services) > 0)
            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
                    <div class="row g-4">
                        @foreach ($services as $service)
                            <div class="col-lg-4">
                                <div class="de-room">
                                    <div class="d-image">
                                        <a href="{{ route('front.service_details', $service->slug) }}">
                                            <img src="{{ url('storage/app/' . $service->icon) }}"
                                                onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"
                                                class="img-fluid" alt="">
                                            <img src="{{ url('storage/app/' . $service->icon) }}"
                                                onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"
                                                class="d-img-hover img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="d-text">
                                        <h3>{{ $service->title }}</h3>
                                        <p>{{ $service->subtitle }}</p>
                                        <a href="{{ route('front.service_details', $service->slug) }}"
                                            class="btn-line"><span>Read more.</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!-- subheader close -->
        <!-- footer begin -->
        @include('frontend.layouts.footer')
        <!-- footer close -->
    </div>

@endsection
