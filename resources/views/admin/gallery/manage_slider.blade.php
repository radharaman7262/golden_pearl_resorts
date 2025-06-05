@extends('admin.layouts.main')
@section('page_title','Sliders')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($slider)) Edit @else Add @endif Slider</h4>
                <p><a href="{{route('admin.slider')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.slider_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($slider)) value="{{$slider->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($slider)) value="{{$slider->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="sub_title">Sub-Title<span class="text-danger">*</span></label>
                                <input type="text" name="sub_title" id="sub_title" @if(isset($slider)) value="{{$slider->sub_title}}" @endif class="form-control" placeholder="Enter a sub-title.." required>
                                <div class="invalid-feedback">Please enter a sub-title.</div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" id="image" @if(!isset($slider)) required @endif class="form-control">
                                     <small class="">This image is visible in site image. <strong class="text-danger">Use 1920*1280px sizes banner</strong></small>
                                    <div class="invalid-feedback">Please enter a image.</div>
                                    <embed src="@if(isset($slider)) {{ url('storage/app/'.$slider->image)}}" alt="{{$slider->title}}" @endif class="img-thumbnail" width="200px"
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';" style="aspect-ratio:2/2">
                                </div>
                                {{-- <div class="col-xl-6">
                                    <label for="Video" class="col-form-label">Video<span class="text-danger">*</span></label>
                                    <input type="file" name="image" id="image" @if(!isset($slider)) required @endif class="form-control" accept="video/*">
                                     <small class="">This Video is visible in site Video. <strong class="text-danger">Use 1920*1280px sizes Video</strong></small>
                                    <div class="invalid-feedback">Please enter a image.</div>
                                    <video width="320" height="240" controls>
                                        <source src="@if(isset($slider)) {{ url('storage/app/'.$slider->image)}} @endif" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div> --}}
                                                                
                                <div class="col-xl-6">
                                    <label class="form-label" for="link">Link<span class="text-danger">*</span></label>
                                    <input type="url" name="link" id="link" @if(isset($slider)) value="{{$slider->link}}" @endif class="form-control" placeholder="Enter a link.." required>
                                    <div class="invalid-feedback">Please enter a link.</div>
                                </div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($slider)) Update @else Submit @endif</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
