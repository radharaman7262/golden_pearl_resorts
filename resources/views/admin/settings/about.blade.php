@extends('admin.layouts.main')
@section('page_title', 'Business Setting')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="card">
        <div class="card-header d-block">
            <h4 class="card-title">About Settings</h4>
        </div>
        <div class="row"> 
 
 <!-- About starts -->
 <div class="col-xl-12">
    <div class="accordion accordion-danger-solid" id="accordion-three">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bordered_collapseOne_about">About Setting</button>
            </h2>
            <div id="bordered_collapseOne_about" class="accordion-collapse collapse show" data-bs-parent="#accordion-three">
                <div class="accordion-body">
                    <div class="form-validation">
                        <form action="{{ route('admin.business_setting_update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <div class="col-xl-12">
                                <label class="col-form-label" for="about_us">About-Us<span class="text-danger">*</span></label>
                                <input type="text" name="about_us" id="about_us" value="{{ $settings->about_us }}" class="form-control" placeholder="Enter a about us.." required>
                                <div class="invalid-feedback">Please enter a about us.</div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <label for="about_image" class="col-form-label">About Image-1<span class="text-danger">*</span></label>
                                    <input type="file" name="about_image" id="about_image" class="form-control"><div class="invalid-feedback">Please enter a image.</div>
                                    <small class="">This image is visible in site image. <strong class="text-danger">Use 1000*1513px sizes image</strong></small>
                                    <embed src="{{ url('storage/app/' . $settings->about_image) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                </div>
                                <div class="col-xl-6">
                                    <label for="image_baner" class="col-form-label">About Image-2<span class="text-danger">*</span></label>
                                    <input type="file" name="image_baner" id="image_baner" class="form-control"><div class="invalid-feedback">Please enter a about banner.</div>
                                    <small class="">This image is visible in site image. <strong class="text-danger">Use 1000*1513px sizes image</strong></small>
                                    <embed src="{{ url('storage/app/' . $settings->image_baner) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                </div>
                            </div>
                            
                            {{-- <small class="">This image is visible in site image. <strong class="text-danger">Use 1000*1513px sizes image</strong></small> --}}
                            {{-- <div class="col-xl-12">
                                <label class="col-form-label" for="short_description">Short Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" id="editor1" rows="5" placeholder="What would you like to see?" required>{{ $settings->short_description }}</textarea>
                                <div class="invalid-feedback">Please enter a short description.</div>
                            </div> --}}
                            <div class="col-xl-12">
                                <label class="col-form-label" for="long_description">Long Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="long_description" id="editor2" rows="5" placeholder="What would you like to see?" required>{{ $settings->long_description }}</textarea>
                                <div class="invalid-feedback">Please enter a long description.</div>
                            </div>
                            {{-- <div class="col-xl-12">
                                <label for="testimonial_banner" class="col-form-label">brochure Upload<span class="text-danger">*</span></label>
                                <input type="file" name="testimonial_banner" id="testimonial_banner" class="form-control" accept="application/pdf"><div class="invalid-feedback">Please enter a pdf.</div>
                                <embed src="{{ url('storage/app/' . $settings->testimonial_banner) }}" alt="{{$settings->site_name}}" class="mt-1 img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="youtube_link">YouTube Link<span class="text-danger">*</span></label>
                                <input type="url" name="youtube_link" id="youtube_link" value="{{ $settings->youtube_link }}" class="form-control" placeholder="Enter a youtube link.." required>
                                <div class="invalid-feedback">Please enter a youtube link.</div>
                            </div> --}}
                            <div class="col-xl-12">
                                <label class="col-form-label" for="term_condition">Term Condition<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="term_condition" id="editor7" rows="5" placeholder="What would you like to see?" required>{{ $settings->term_condition }}</textarea>
                                <div class="invalid-feedback">Please enter a term condition.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="privacy">Privacy Policy<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="privacy" id="editor8" rows="5" placeholder="What would you like to see?" required>{{ $settings->privacy }}</textarea>
                                <div class="invalid-feedback">Please enter a privacy.</div>
                            </div>

                            <div class="my-3 col-lg-12 ms-auto">
                                <input type="submit" name="submit3" value="Update" class="btn btn-primary btn-sm" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About ends -->
        </div>
    </div>
</div></div>
@endsection