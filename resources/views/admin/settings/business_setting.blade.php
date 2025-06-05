@extends('admin.layouts.main')
@section('page_title', 'Business Setting')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="card">
        <div class="card-header d-block">
            <h4 class="card-title">Business Settings</h4>
        </div>
        <div class="row">
            <!-- First Columm Start -->
            <div class="col-xl-12">
                <!-- Site Setting Start -->
                <div class="col-xl-12">
                    <div class="accordion accordion-danger-solid" id="accordion-one">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bordered_collapseOne_site">Site Setting</button>
                            </h2>
                            <div id="bordered_collapseOne_site" class="accordion-collapse collapse show" data-bs-parent="#accordion-one">
                                <div class="accordion-body">
                                    <div class="form-validation">
                                        <form action="{{ route('admin.business_setting_update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label class="col-form-label" for="site_name">Site Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="site_name" id="site_name" value="{{ $settings->site_name }}" class="form-control" placeholder="Enter a site name.." required>
                                                    <div class="invalid-feedback">Please enter a site name.</div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="fav_icon" class="col-form-label">Favicon<span class="text-danger">*</span></label>
                                                    <input type="file" name="fav_icon" id="fav_icon" class="form-control"><div class="invalid-feedback">Please enter a favicon.</div>
                                                    {{-- <br> --}}
                                                     <small class="">This image is visible in site image. <strong class="text-danger">Use 100*100px sizes image</strong></small>
                                                    <embed src="{{ url('storage/app/' . $settings->fav_icon) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label for="header_logo" class="col-form-label">Header Logo<span class="text-danger">*</span></label>
                                                    <input type="file" name="header_logo" id="header_logo" class="form-control"><div class="invalid-feedback">Please enter a header logo.</div>
                                                    {{-- <br>  --}}
                                                    <small class="">This image is visible in site image. <strong class="text-danger">Use 150*50px sizes image</strong></small>
                                                    <embed src="{{ url('storage/app/' . $settings->header_logo) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="testimonial_banner" class="col-form-label">Loader Logo<span class="text-danger">*</span></label>
                                                    <input type="file" name="footer_logo" id="footer_logo" class="form-control"><div class="invalid-feedback">Please enter a footer logo.</div>
                                                    {{-- <br>  --}}
                                                    <small class="">This image is visible in site image. <strong class="text-danger">Use 150*50px sizes image</strong></small>
                                                    <embed src="{{ url('storage/app/' . $settings->footer_logo) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label class="col-form-label" for="email_id">Email Id1<span class="text-danger">*</span></label>
                                                    <input type="text" name="email_id" id="email_id" value="{{ $settings->email_id }}" class="form-control" placeholder="Enter a email id1.." required>
                                                    <div class="invalid-feedback">Please enter a email id1.</div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="col-form-label" for="phone_no1">Phone No1<span class="text-danger">*</span></label>
                                                    <input type="text" name="phone_no1" id="phone_no1" value="{{ $settings->phone_no1 }}" class="form-control" placeholder="Enter a phone no1.." required>
                                                    <div class="invalid-feedback">Please enter a phone no1.</div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-6">
                                                <label class="col-form-label" for="email_id2">Email Id2<span class="text-danger">*</span></label>
                                                <input type="text" name="email_id2" id="email_id2" value="{{ $settings->email_id2 }}" class="form-control" placeholder="Enter a email id2.." required>
                                                <div class="invalid-feedback">Please enter a email id2.</div>
                                            </div> --}}
                                            {{-- <div class="col-xl-6">
                                                <label class="col-form-label" for="phone_no2">Phone No2<span class="text-danger">*</span></label>
                                                <input type="text" name="phone_no2" id="phone_no2" value="{{ $settings->phone_no2 }}" class="form-control" placeholder="Enter a phone no2.." required>
                                                <div class="invalid-feedback">Please enter a phone no2.</div>
                                            </div> --}}
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="address">Address<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="address" id="" rows="5" placeholder="What would you like to see?" required>{{ $settings->address }}</textarea>
                                                <div class="invalid-feedback">Please enter a address.</div>
                                            </div>
                            
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label class="col-form-label" for="copyright">Copyright<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="copyright" id="" rows="5" placeholder="What would you like to see?" required>{{ $settings->copyright }}</textarea>
                                                    <div class="invalid-feedback">Please enter a copyright.</div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="col-form-label" for="timing">Timing Paragraph<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="timing" id="" rows="5" placeholder="timing description" required>{{ $settings->timing }}</textarea>
                                                    <div class="invalid-feedback">Please enter a Timing.</div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="invest_paragraph">Invest Description<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="invest_paragraph" id="" rows="5" placeholder="invest description" required>{{ $settings->invest_paragraph }}</textarea>
                                                <div class="invalid-feedback">Please enter a invest description.</div>
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="map">Google Map Link<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="map" id="" rows="5" placeholder="What would you like to see?" required>{{ $settings->map }}</textarea>
                                                <div class="invalid-feedback">Please enter a map link.</div>
                                            </div>

                                            {{-- <div class="col-xl-12">
                                                <label class="col-form-label" for="footer_description">Footer Description<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="footer_description" id="" rows="5" placeholder="What would you like to see?" required>{{ $settings->footer_description }}</textarea>
                                                <div class="invalid-feedback">Please enter a footer description.</div>
                                            </div> --}}
                                            
                                            {{-- <div class="col-xl-12">
                                                <label for="testimonial_banner" class="col-form-label">Brochure Upload<span class="text-danger">*</span></label>
                                                <input type="file" name="testimonial_banner" id="testimonial_banner" class="form-control" accept="application/pdf"><div class="invalid-feedback">Please enter a pdf.</div>
                                                @if(isset($settings->testimonial_banner))    <embed src="{{ url('storage/app/' . $settings->testimonial_banner) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"> @endif
                                            </div> --}}

                                            {{-- <div class="col-xl-12">
                                                <label for="testimonial_banner" class="col-form-label">Brochure Upload-2<span class="text-danger">*</span></label>
                                                <input type="file" name="testimonial_banner2" id="testimonial_banner2" class="form-control" accept="application/pdf"><div class="invalid-feedback">Please enter a pdf.</div>
                                              @if(isset($settings->testimonial_banner2))  <embed src="{{ url('storage/app/' . $settings->testimonial_banner2) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"> @endif
                                            </div> --}}

                                            <div class="my-3 col-lg-12 ms-auto">
                                                <input type="submit" name="submit1" value="Update" class="btn btn-primary btn-sm" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Site Setting ends -->

               
            </div>
            <!-- First Columm End -->
<div class="col-xl-6">
     <!-- Social Media starts -->
     <div class="col-xl-12">
        <div class="accordion accordion-danger-solid" id="accordion-two">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#bordered_collapseOne_social">Social Media Setting</button>
                </h2>
                <div id="bordered_collapseOne_social" class="accordion-collapse collapse show" data-bs-parent="#accordion-two">
                    <div class="accordion-body">
                        <div class="form-validation">
                            <form action="{{ route('admin.business_setting_update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="facebook">Facebook<span class="text-danger">*</span></label>
                                    <input type="url" name="facebook" id="facebook" value="{{ $settings->facebook }}" class="form-control" placeholder="Enter a facebook.." >
                                    <div class="invalid-feedback">Please enter a facebook.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="instagram">Instagram<span class="text-danger">*</span></label>
                                    <input type="url" name="instagram" id="instagram" value="{{ $settings->instagram }}" class="form-control" placeholder="Enter a instagram.." >
                                    <div class="invalid-feedback">Please enter a instagram.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="linkedin">Linkedin<span class="text-danger">*</span></label>
                                    <input type="url" name="linkedin" id="linkedin" value="{{ $settings->linkedin }}" class="form-control" placeholder="Enter a linkedin.." >
                                    <div class="invalid-feedback">Please enter a linkedin.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="twitter">Twitter<span class="text-danger">*</span></label>
                                    <input type="url" name="twitter" id="twitter" value="{{ $settings->twitter }}" class="form-control" placeholder="Enter a twitter.." >
                                    <div class="invalid-feedback">Please enter a twitter.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="youtube">YouTube<span class="text-danger">*</span></label>
                                    <input type="url" name="youtube" id="youtube" value="{{ $settings->youtube }}" class="form-control" placeholder="Enter a youtube.." >
                                    <div class="invalid-feedback">Please enter a youtube.</div>
                                </div>

                                <div class="my-3 col-lg-12 ms-auto">
                                    <input type="submit" name="submit2" value="Update" class="btn btn-primary btn-sm" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Social Media ends -->
</div>

            <!-- Second Columm Start -->
            <div class="col-xl-6">
               

                <!-- Meta Og starts -->
                <div class="col-xl-12">
                    <div class="accordion accordion-danger-solid" id="accordion-four">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bordered_collapseOne_meta">Meta Seo Setting</button>
                            </h2>
                            <div id="bordered_collapseOne_meta" class="accordion-collapse collapse show" data-bs-parent="#accordion-four">
                                <div class="accordion-body">
                                    <div class="form-validation">
                                        <form action="{{ route('admin.business_setting_update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="meta_title">Meta Title<span class="text-danger">*</span></label>
                                                <input type="text" name="meta_title" id="meta_title" value="{{ $settings->meta_title }}" class="form-control" placeholder="Enter a meta title.." required>
                                                <div class="invalid-feedback">Please enter a meta title.</div>
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="meta_keywords">Meta Keywords<span class="text-danger">*</span></label>
                                                <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $settings->meta_keywords }}" class="form-control" placeholder="Enter a meta keywords.." required>
                                                <div class="invalid-feedback">Please enter a meta keywords.</div>
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="col-form-label" for="meta_description">Meta Description<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="meta_description" id="meta_description" rows="5" placeholder="What would you like to see?" required>{{ $settings->meta_description }}</textarea>
                                                <div class="invalid-feedback">Please enter a meta description.</div>
                                            </div>

                                            <div class="my-3 col-lg-12 ms-auto">
                                                <input type="submit" name="submit4" value="Update" class="btn btn-primary btn-sm" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Meta Og ends -->
            </div>
            <!-- Second Columm End -->
        </div>
    </div>
</div>
</div>
@endsection
