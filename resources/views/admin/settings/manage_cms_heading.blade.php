@extends('admin.layouts.main')
@section('page_title','CMS Heading')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($heading)) Edit @else Add @endif CMS Heading</h4>
                <p><a href="{{route('admin.heading')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.heading_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($heading)) value="{{$heading->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($heading)) value="{{$heading->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="subtitle">Sub-Title<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="subtitle" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($heading)){{$heading->subtitle}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a subtitle.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="description">Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($heading)){{$heading->description}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a description.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($heading)) Update @else Submit @endif</button>
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
