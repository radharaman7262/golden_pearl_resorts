@extends('admin.layouts.main')
@section('page_title','CMS Setting')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="card">
        <div class="card-header d-block">
            <h4 class="card-title">CMS Settings</h4>
        </div>
        <div class="row">
            <!-- CMS Setting Start -->
            <div class="col-xl-12">
                <div class="accordion accordion-danger-solid" id="accordion-three">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bordered_collapseOne_about">Update CMS</button>
                        </h2>
                        <div id="bordered_collapseOne_about" class="accordion-collapse collapse show" data-bs-parent="#accordion-three">
                            <div class="accordion-body">
                                <div class="form-validation">
                                    <form action="{{ route('admin.cms_setting_update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label class="col-form-label" for="mission">What do description<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="mission" id="editor1" rows="5" placeholder="What would you like to see?" required>{{ $settings->mission }}</textarea>
                                                <div class="invalid-feedback">Please enter a description.</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="col-form-label" for="vission">Service Description<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="vission" id="editor2" rows="5" placeholder="What would you like to see?" required>{{ $settings->vission }}</textarea>
                                                <div class="invalid-feedback">Please enter a description.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="what_image" class="col-form-label">What do Image<span class="text-danger">*</span></label>
                                                <input type="file" name="what_image" id="what_image" class="form-control"><div class="invalid-feedback">Please enter a about banner.</div>
                                                {{-- <br> --}}
                                                <small class="">This image is visible in site image. <strong class="text-danger">Use 500*500px sizes image</strong></small>
                                                <embed src="{{ url('storage/app/' . $settings->what_image) }}" alt="{{$settings->site_name}}" class="img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                            
                                            <div class="col-xl-6">
                                                <label for="service_image" class="col-form-label">Service Image<span class="text-danger">*</span></label>
                                                <input type="file" name="service_image" id="service_image" class="form-control"><div class="invalid-feedback">Please enter a about banner.</div>
                                                {{-- <br> --}}
                                                <small class="">This image is visible in site image. <strong class="text-danger">Use 500*500px sizes image</strong></small>
                                                <embed src="{{ url('storage/app/' . $settings->service_image) }}" alt="{{$settings->site_name}}" class="img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-xl-12">
                                            <label class="col-form-label" for="amenity">Amenities<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="amenity" id="editor5" rows="5" placeholder="What would you like to see?" required>{{ $settings->amenity }}</textarea>
                                            <div class="invalid-feedback">Please enter a amenity.</div>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="col-form-label" for="patient_guide">Patient Guide<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="patient_guide" id="editor6" rows="5" placeholder="What would you like to see?" required>{{ $settings->patient_guide }}</textarea>
                                            <div class="invalid-feedback">Please enter a patient guide.</div>
                                        </div> --}}

                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label for="icon1" class="col-form-label">Icon1<span class="text-danger">*</span></label>
                                                <input type="file" name="icon1" id="icon1" class="form-control"><div class="invalid-feedback">Please enter a icon1.</div>
                                                {{-- <br>  --}}
                                                <small class="">This image is visible in site image. <strong class="text-danger">Use 200*200px sizes image</strong></small>
                                                <br>
                                                <embed src="{{ url('storage/app/' . $settings->icon1) }}" alt="{{$settings->icon1}}" class="img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="title1">Title1<span class="text-danger">*</span></label>
                                                <input type="text" name="title1" id="title1" value="{{ $settings->title1 }}" class="form-control" placeholder="Enter a title1.." required>
                                                <div class="invalid-feedback">Please enter a title1</div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="count1">Count1<span class="text-danger">*</span></label>
                                                <input type="number" name="count1" id="count1" value="{{ $settings->count1 }}" class="form-control" placeholder="Enter a count1.." required>
                                                <div class="invalid-feedback">Please enter a count1.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label for="icon2" class="col-form-label">Icon2<span class="text-danger">*</span></label>
                                                <input type="file" name="icon2" id="icon2" class="form-control"><div class="invalid-feedback">Please enter a icon2.</div>
                                                {{-- <br> --}}
                                                 <small class="">This image is visible in site image. <strong class="text-danger">Use 200*200px sizes image</strong></small>
                                                 <br>
                                                <embed src="{{ url('storage/app/' . $settings->icon2) }}" alt="{{$settings->icon2}}" class="img-thumbnail" width="20%">
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="title2">Title2<span class="text-danger">*</span></label>
                                                <input type="text" name="title2" id="title2" value="{{ $settings->title2 }}" class="form-control" placeholder="Enter a title2.." required>
                                                <div class="invalid-feedback">Please enter a title2</div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="count2">Count2<span class="text-danger">*</span></label>
                                                <input type="number" name="count2" id="count2" value="{{ $settings->count2 }}" class="form-control" placeholder="Enter a count2.." required>
                                                <div class="invalid-feedback">Please enter a count2.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label for="icon3" class="col-form-label">Icon3<span class="text-danger">*</span></label>
                                                <input type="file" name="icon3" id="icon3" class="form-control"><div class="invalid-feedback">Please enter a icon3.</div>
                                                {{-- <br>  --}}
                                                <small class="">This image is visible in site image. <strong class="text-danger">Use 200*200px sizes image</strong></small>
                                                <br>
                                                <embed src="{{ url('storage/app/' . $settings->icon3) }}" alt="{{$settings->icon3}}" class="img-thumbnail" width="20%">
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="title3">Title3<span class="text-danger">*</span></label>
                                                <input type="text" name="title3" id="title3" value="{{ $settings->title3 }}" class="form-control" placeholder="Enter a title3.." required>
                                                <div class="invalid-feedback">Please enter a title3</div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="count3">Count3<span class="text-danger">*</span></label>
                                                <input type="number" name="count3" id="count3" value="{{ $settings->count3 }}" class="form-control" placeholder="Enter a count3.." required>
                                                <div class="invalid-feedback">Please enter a count3.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label for="icon4" class="col-form-label">Icon4<span class="text-danger">*</span></label>
                                                <input type="file" name="icon4" id="icon4" class="form-control"><div class="invalid-feedback">Please enter a icon4.</div>
                                                {{-- <br>  --}}
                                                <small class="">This image is visible in site image. <strong class="text-danger">Use 200*200px sizes image</strong></small>
                                                <br>
                                                <embed src="{{ url('storage/app/' . $settings->icon4) }}" alt="{{$settings->icon4}}" class="img-thumbnail" width="20%"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="title4">Title4<span class="text-danger">*</span></label>
                                                <input type="text" name="title4" id="title4" value="{{ $settings->title4 }}" class="form-control" placeholder="Enter a title4.." required>
                                                <div class="invalid-feedback">Please enter a title4</div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="col-form-label" for="count4">Count4<span class="text-danger">*</span></label>
                                                <input type="number" name="count4" id="count4" value="{{ $settings->count4 }}" class="form-control" placeholder="Enter a count4.." required>
                                                <div class="invalid-feedback">Please enter a count4.</div>
                                            </div>
                                        </div>

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
                                            <input type="submit" name="submit" value="Update" class="btn btn-primary btn-sm" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CMS Setting ends -->
        </div>
        </div>
    </div>
</div>
@endsection