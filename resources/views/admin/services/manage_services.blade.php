@extends('admin.layouts.main')
@section('page_title','Services')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($services)) Edit @else Add @endif Accomoditions</h4>
                <p><a href="{{route('admin.services')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.services_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($services)) value="{{$services->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($services)) value="{{$services->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="subtitle">Sub Title<span class="text-danger">*</span></label>
                                <input type="text" name="subtitle" id="subtitle" @if(isset($services)) value="{{$services->subtitle}}" @endif class="form-control" placeholder="Enter a price.." required>
                                <div class="invalid-feedback">Please enter a price.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="icon" class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input type="file" name="icon" id="icon" @if(!isset($services)) required @endif class="form-control">
                                {{-- <br>  --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use AUTO*533px sizes Images</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                              @if(isset($services))  <embed src="@if(isset($services)) {{ url('storage/app/'.$services->icon)}}" alt="{{$services->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';"> @endif
                            </div>
                            <div class="col-xl-6">
                                <label for="banner" class="col-form-label">Multiple Images<span class="text-danger">*</span></label>
                                <input type="file" name="banner[]" id="banner" @if(!isset($services)) required @endif class="form-control"  multiple>
                                {{-- <div class="invalid-feedback">Please enter a image.</div> --}}
                                <br> 
                                <small class="">This banner is visible in site banner. <strong class="text-danger">Use 1920*640px sizes banner</strong></small>
                                @if(isset($services) && $services->banner && count(json_decode($services->banner))>0)   @foreach(json_decode($services->banner) as $banner) <embed src="@if(isset($services)) {{ url('storage/app/'.$banner)}}" alt="{{$services->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">@endforeach @endif
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label class="col-form-label" for="description">Description<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="editor1" rows="5" placeholder="What would you like to see?" required>@if(isset($services)){{$services->description}}@endif</textarea>
                            <div class="invalid-feedback">Please enter a description.</div>
                        </div>
                        <div class="my-3 row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="facebook">Facebook<span class="text-danger">*</span></label>
                                <input type="url" name="facebook" id="facebook" @if(isset($services)) value="{{ $services->facebook }}" @endif class="form-control" placeholder="Enter a facebook url.." required>
                                <div class="invalid-feedback">Please enter a facebook url.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="instagram">Instagram<span class="text-danger">*</span></label>
                                <input type="url" name="instagram" id="instagram" @if(isset($services)) value="{{ $services->instagram }}" @endif class="form-control" placeholder="Enter a instagram url.." required>
                                <div class="invalid-feedback">Please enter a instagram url.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="twiter">Twiter<span class="text-danger">*</span></label>
                                <input type="url" name="twiter" id="twiter" @if(isset($services)) value="{{ $services->twiter }}" @endif class="form-control" placeholder="Enter a twiter url.." required>
                                <div class="invalid-feedback">Please enter a twiter url.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="linkedin">linkedin<span class="text-danger">*</span></label>
                                <input type="url" name="linkedin" id="linkedin" @if(isset($services)) value="{{ $services->linkedin }}" @endif class="form-control" placeholder="Enter a linkedin url.." required>
                                <div class="invalid-feedback">Please enter a linkedin url.</div>
                            </div>
                        </div>

                        <div class="my-3 row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="meta_title">Meta Title<span class="text-danger">*</span></label>
                                <input type="text" name="meta_title" id="meta_title" @if(isset($services)) value="{{ $services->meta_title }}" @endif class="form-control" placeholder="Enter a meta title.." required>
                                <div class="invalid-feedback">Please enter a meta title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="meta_keyword">Meta Keyword<span class="text-danger">*</span></label>
                                <input type="text" name="meta_keyword" id="meta_keyword" @if(isset($services)) value="{{ $services->meta_keyword }}" @endif class="form-control" placeholder="Enter a meta keywords.." required>
                                <div class="invalid-feedback">Please enter a meta keywords.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="meta_desc">Meta Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="meta_desc" id="meta_desc" rows="5" placeholder="What would you like to see?" required>@if(isset($services)){{ $services->meta_desc }}@endif</textarea>
                                <div class="invalid-feedback">Please enter a meta description.</div>
                            </div>
                        </div>
                        
                                
                        <div class="my-3 col-lg-12 ms-auto">
                            <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($services)) Update @else Submit @endif</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
