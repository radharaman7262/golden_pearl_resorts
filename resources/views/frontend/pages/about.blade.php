@extends('frontend.layouts.main')
@section('about', 'active')
@section('meta_title', seo_helper(2)->meta_title)
@section('meta_keyword', seo_helper(2)->meta_keyword)
@section('meta_description', seo_helper(2)->meta_desc)
@section('content')


    <div id="background" data-bgimage="url({{ asset('assets') }}/images/background/2.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-12">
                        <h4>We Are</h4>
                        <h1>{{ business_setting('site_name') }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="spacer-double sm-hide"></div>
                        <img src="{{ url('storage/app/' . business_setting('about_image')) }}"
                            alt="{{ business_setting('about_us') }}" class="img-responsive wow fadeInUp"
                            data-wow-duration="1s" style="aspect-ratio:4/6"
                            onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                    </div>

                    <div class="col-lg-3 col-6">
                        <img src="{{ url('storage/app/' . business_setting('image_baner')) }}" alt=""
                            class="img-responsive wow fadeInUp" data-wow-duration="1.5s" style="aspect-ratio:4/6"
                            onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                    </div>

                    <div class="col-lg-6 wow fadeIn">
                        <div class="padding20">
                            <h2 class="title mb10">{{ business_setting('about_us') }}
                                <span class="small-border"></span>
                            </h2>
                            <p id="description">
                                {!! Str::limit(business_setting('long_description'), 400) !!}
                            </p>
                            <button class="bg-transparent btn-line" id="read-more-btn" onclick="toggleDescription()">Read
                                More</button>
                            {{-- <p>{!! Str::limit(business_setting('long_description'), 400) !!}</p> --}}
                            {{-- <a href="{{route('front.rooms')}}" class="btn-line"><span>Choose Room</span>s</a> --}}

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>


                <div class="spacer-double"></div>

                <div class="row gx-4">
                    <div class="text-center col-lg-12">
                        <h2 class="title center">Our Facilities
                            <span class="small-border"></span>
                        </h2>
                    </div>
                </div>

                <div class="row">


                    @foreach ($features as $feature)
                        <div class="mb-3 col-md-4">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="{{ url('storage/app/' . $feature->icon) }}"
                                        alt="{{ $feature->title }}"
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';" style="aspect-ratio:1/1;"></span>
                                <div class="text">
                                    <h3 class="style-1">{{ $feature->title }}</h3>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <!-- subheader close -->
        <!-- footer begin -->
        @include('frontend.layouts.footer')
        <!-- footer close -->
    </div>


@endsection

@section('script')
    <script>
        function toggleDescription() {
            var description = document.getElementById("description");
            var readMoreBtn = document.getElementById("read-more-btn");

            // Short description (first 400 characters)
            var shortDescription = `{!! Str::limit(business_setting('long_description'), 400) !!}`;

            // Full description
            var fullDescription = `{!! business_setting('long_description') !!}`;

            // Toggle between showing the full and short description
            if (readMoreBtn.innerHTML === "Read More") {
                description.innerHTML = fullDescription; // Show full description
                readMoreBtn.innerHTML = "Read Less"; // Change button text to "Read Less"
            } else {
                description.innerHTML = ""; // Hide content
                readMoreBtn.innerHTML = "Read More"; // Change button text back to "Read More"
            }
        }
    </script>





@endsection
