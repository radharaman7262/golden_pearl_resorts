@extends('frontend.layouts.main')

@section('home', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)

@section('content')

    <style>
        .img-home {
            aspect-ratio: 4/6;
        }
    </style>

    <!-- content begin -->
    @if ($sliders->count() > 0)
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
            <div class="carousel-item @if($index == 0) active @endif">
                <img src="{{ url('storage/app/'.$slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}" 
                    style="height: 100vh; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/images/defaultimg.jpg') }}';">
                
                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 text-start">
                                <h1>{{ $slider->title }}</h1>
                                <p class="lead">{{ $slider->sub_title }}</p>
                                <a class="btn btn-primary" href="{{ $slider->link }}" target="_blank"><span>Choose Resorts</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @endif
    
    <div class="no-top no-bottom bg-color text-light">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="p-3 col-md-4" data-bgcolor="rgba(0, 0, 0, .2)">
                    <div class="info-box padding20">
                        <i class="icon_clock_alt"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Opening Times</div>
                            <div class="info-box_subtite">{{ business_setting('timing') }}</div>
                        </div>
                    </div>
                </div>

                <div class="p-3 col-md-4" data-bgcolor="rgba(0, 0, 0, .4)">
                    <div class="info-box padding20">
                        <i class="icon_house_alt"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Our Location</div>
                            <div class="info-box_subtite">{{ Str::limit(business_setting('address'), 30) }}</div>
                        </div>
                    </div>
                </div>

                <div class="p-3 col-md-4" data-bgcolor="rgba(0, 0, 0, .6)">
                    <div class="info-box padding20">
                        <i class="icon_headphones"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Customer Support</div>
                            <div class="info-box_subtite"><a
                                    href="tel:{{ business_setting('phone_no1') }}">{{ business_setting('phone_no1') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <section class="jarallax">
        <img src="{{ asset('assets') }}/images/background/7.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row gx-4 gy-2">
                <div class="text-center col-lg-12">
                    <h2 class="title center">Our Resorts
                        <span class="small-border"></span>
                    </h2>
                </div>
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
                                <a href="{{ route('front.service_details', $service->slug) }}" class="btn-line"><span>Read
                                        more.</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="section-intro" class="pt60" data-bgcolor="#79552A">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <div class="spacer-double sm-hide"></div>
                    <img src="{{ url('storage/app/' . business_setting('about_image')) }}" alt=""
                        class="img-responsive wow fadeInUp img-home" data-wow-duration="1s"
                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                </div>
                <div class="col-lg-3 col-6">
                    <img src="{{ url('storage/app/' . business_setting('image_baner')) }}" alt=""
                        class="img-responsive wow fadeInUp img-home" data-wow-duration="1.5s"
                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                </div>
                <div class="col-lg-6 wow fadeIn">
                    <div class="padding20">
                        <h2 class="title mb10">{{ business_setting('about_us') }}
                            <span class="small-border"></span>
                        </h2>
                        <p>{!! business_setting('short_description') !!}</p>
                        <a href="{{ route('front.about') }}" class="btn-line"><span>Read More</span></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- SwiperJS Carousel brand-->
    <div class="container-fluid py-4 bg-dark">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                @foreach ($brands as $brand)

                <div class="swiper-slide text-center">
                    <img src="{{ url('storage/app/' . $brand->image) }}" alt="{{$brand->title}}" class="brand-logo">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SwiperJS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- SwiperJS Initialization -->
    <script>
        var swiper = new Swiper(".brand-slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            breakpoints: {
                320: { slidesPerView: 2, spaceBetween: 10 },  /* Small Screens */
                768: { slidesPerView: 3, spaceBetween: 20 },  /* Tablets */
                1024: { slidesPerView: 5, spaceBetween: 30 }  /* Large Screens */
            }
        });
    </script>

    <!-- CSS Styling -->
    <style>
        .brand-logo {
            max-height: 80px;
            object-fit: contain;
        }
    </style>

    

    @include('frontend.layouts.footer')

@endsection

