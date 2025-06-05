@extends('admin.layouts.main')
@section('page_title','SEO')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($seo)) Edit @else Add @endif SEO</h4>
                <p><a href="{{route('admin.seo')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.seo_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($seo)) value="{{$seo->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="page_name">Page Name<span class="text-danger">*</span></label>
                                <input type="text" name="page_name" id="page_name" @if(isset($seo)) value="{{$seo->page_name}}" @endif class="form-control" placeholder="Enter a page name.." required>
                                <div class="invalid-feedback">Please enter a page name.</div>
                            </div>
                            <div class="col-xl-6">
                                <label for="banner" class="col-form-label">Page Banner<span class="text-danger">*</span></label>
                                <input type="file" name="banner" id="banner" @if(!isset($seo)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This banner is visible in site banner.  <strong class="text-danger typeGallery"> Use 1920*640px sizes banner  </strong> </small>
                                <div class="invalid-feedback">Please enter a banner.</div>
                                <embed src="@if(isset($seo)) {{ url('storage/app/'.$seo->banner)}}" alt="{{$seo->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="meta_title">Meta Title<span class="text-danger">*</span></label>
                                <input type="text" name="meta_title" id="meta_title" @if(isset($seo)) value="{{$seo->meta_title}}" @endif class="form-control" placeholder="Enter a meta title.." required>
                                <div class="invalid-feedback">Please enter a meta title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="meta_keyword">Meta Keyword<span class="text-danger">*</span></label>
                                <input type="text" name="meta_keyword" id="meta_keyword" @if(isset($seo)) value="{{$seo->meta_keyword}}" @endif class="form-control" placeholder="Enter a meta keyword.." required>
                                <div class="invalid-feedback">Please enter a meta keyword.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="meta_desc">Meta Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="meta_desc" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($seo)){{$seo->meta_desc}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a meta_description.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($seo)) Update @else Submit @endif</button>
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
