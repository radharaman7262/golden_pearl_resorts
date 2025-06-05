@extends('admin.layouts.main')
@section('page_title','Testimonial')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($testimonial)) Edit @else Add @endif Testimonial</h4>
                <p><a href="{{route('admin.testimonial')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.testimonial_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($testimonial)) value="{{$testimonial->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" @if(isset($testimonial)) value="{{$testimonial->name}}" @endif class="form-control" placeholder="Enter a name.." required>
                                <div class="invalid-feedback">Please enter a name.</div>
                            </div>
                            <div class="col-xl-6">
                                <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" @if(!isset($testimonial)) required @endif class="form-control">
                                {{-- <br>  --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 200*200px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($testimonial)) {{ url('storage/app/'.$testimonial->image)}}" alt="{{$testimonial->name}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label" for="designation">Designation<span class="text-danger">*</span></label>
                                <input type="text" name="designation" id="designation" @if(isset($testimonial)) value="{{$testimonial->designation}}" @endif class="form-control" placeholder="Enter a designation.." required>
                                <div class="invalid-feedback">Please enter a designation.</div>
                            </div>
                            <div class="col-xl-6">
                                <p>Rating<span class="text-danger">*</span></p>
                                <select name="star" id="single-select" class="form-control" required>
                                    <option @if(isset($testimonial)) @if($testimonial['star'] == "1") selected @endif @endif value="1">1</option>
                                    <option @if(isset($testimonial)) @if($testimonial['star'] == "2") selected @endif @endif value="2">2</option>
                                    <option @if(isset($testimonial)) @if($testimonial['star'] == "3") selected @endif @endif value="3">3</option>
                                    <option @if(isset($testimonial)) @if($testimonial['star'] == "4") selected @endif @endif value="4">4</option>
                                    <option @if(isset($testimonial)) @if($testimonial['star'] == "5") selected @endif @endif value="5">5</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="comment">Comment<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="comment" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($testimonial)){{$testimonial->comment}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a comment.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($testimonial)) Update @else Submit @endif</button>
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
