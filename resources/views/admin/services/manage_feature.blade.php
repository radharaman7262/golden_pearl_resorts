@extends('admin.layouts.main')
@section('page_title','Features')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($feature)) Edit @else Add @endif Feature</h4>
                <p><a href="{{route('admin.feature')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.feature_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($feature)) value="{{$feature->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($feature)) value="{{$feature->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-12">
                                <label for="icon" class="col-form-label">Icon<span class="text-danger">*</span></label>
                                <input type="file" name="icon" id="icon" @if(!isset($feature)) required @endif class="form-control">
                                {{-- <br>  --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 100*100px sizes image</strong></small>
                                <br>
                                <div class="invalid-feedback">Please enter a logo.</div>
                                <embed src="@if(isset($feature)) {{ url('storage/app/'.$feature->icon)}}" alt="{{$feature->title}}" @endif class="mt-2 img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="description">Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($feature)){{$feature->description}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a description.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($feature)) Update @else Submit @endif</button>
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
