@extends('admin.layouts.main')
@section('page_title','Add Blogs')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@if(isset($blog)) Edit @else Add @endif Blogs</h4>
                <p><a href="{{route('admin.blog')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.blog_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($blog)) value="{{$blog->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Author Name<span class="text-danger">*</span></p>
                                <select name="staff_id" id="single-select" class="form-control" required>
                                    @foreach ($staff as $post)
                                        <option @if(isset($blog)) @if($blog['staff_id']==$post->id) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <p>Category Name<span class="text-danger">*</span></p>
                                <select name="category_id" id="single-select" class="form-control" required>
                                    @foreach ($blog_category as $post)
                                        <option @if(isset($blog)) @if($blog['category_id']==$post->id) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($blog)) value="{{$blog->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="date">Date<span class="text-danger">*</span></label>
                                <input type="date" name="date" id="date" @if(isset($blog)) value="{{$blog->date}}" @endif class="form-control" placeholder="Enter a date.." required>
                                <div class="invalid-feedback">Please enter a date.</div>
                            </div>
                            <div class="col-xl-6">
                                <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" @if(!isset($blog)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($blog)) {{ url('storage/app/'.$blog->image)}}" alt="{{$blog->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="banner" class="col-form-label">Banner<span class="text-danger">*</span></label>
                                <input type="file" name="banner" id="banner" @if(!isset($blog)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This banner is visible in site banner. <strong class="text-danger">Use 1920*640px sizes banner</strong></small>
                                <div class="invalid-feedback">Please enter a banner.</div>
                                <embed src="@if(isset($blog)) {{ url('storage/app/'.$blog->banner)}}" alt="{{$blog->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            
                            <div class="col-xl-12">
                                <label class="col-form-label" for="short_description">Short Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" id="editor1" rows="5" placeholder="What would you like to see?" required>@if(isset($blog)) {{$blog->short_description}} @endif</textarea>
                                <div class="invalid-feedback">Please enter a short description.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="long_description">Long Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="long_description" id="editor2" rows="5" placeholder="What would you like to see?" required>@if(isset($blog)) {{$blog->long_description}} @endif</textarea>
                                <div class="invalid-feedback">Please enter a long description.</div>
                            </div>

                            
                            {{-- company details added --}}
                            <div class="col-xl-6">
    <label class="col-form-label" for="company_name">Company Name<span class="text-danger">*</span></label>
    <input type="text" name="company_name" id="company_name"
        @if(isset($blog)) value="{{ $blog->company_name }}" @endif
        class="form-control" placeholder="Enter company name" required>
    <div class="invalid-feedback">Please enter company name.</div>
</div>

<div class="col-xl-6">
    <label class="col-form-label" for="company_logo">Company Logo<span class="text-danger">*</span></label>
    <input type="file" name="company_logo" id="company_logo" class="form-control" @if(!isset($blog)) required @endif>
    <small>Recommended size: <strong class="text-danger">300x300px</strong></small>
    <div class="invalid-feedback">Please upload company logo.</div>
    @if(isset($blog->company_logo))
        <embed src="{{ url('storage/app/' . $blog->company_logo) }}" class="img-thumbnail" width="20%"
            onerror="this.onerror=null;this.src='{{ asset('assets/images/defaultimg.jpg') }}';">
    @endif
</div>

                            {{-- company detail ended --}}

                            

                            <div class="my-3 row">
                                <div class="col-xl-6">
                                    <label class="col-form-label" for="meta_title">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" @if(isset($blog)) value="{{ $blog->meta_title }}" @endif class="form-control" placeholder="Enter a meta title.." required>
                                    <div class="invalid-feedback">Please enter a meta title.</div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="col-form-label" for="meta_keyword">Meta Keyword<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" @if(isset($blog)) value="{{ $blog->meta_keyword }}" @endif class="form-control" placeholder="Enter a meta keywords.." required>
                                    <div class="invalid-feedback">Please enter a meta keywords.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="meta_desc">Meta Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="meta_desc" id="meta_desc" rows="5" placeholder="What would you like to see?" required>@if(isset($blog)){{ $blog->meta_desc }}@endif</textarea>
                                    <div class="invalid-feedback">Please enter a meta description.</div>
                                </div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($blog)) Update @else Submit @endif</button>
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