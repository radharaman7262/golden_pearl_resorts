@extends('admin.layouts.main')
@section('page_title','Gallery & Brand')

@section('body')
<style>
    .typeMedia{
        display:none;
    }
</style>
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($gallery)) Edit @else Add @endif Gallery & Brand</h4>
                <p><a href="{{route('admin.gallery')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.gallery_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($gallery)) value="{{$gallery->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Type<span class="text-danger">*</span></p>
                                <select name="type" id="selection" class="form-control" required onchange="changeWarning(this.value)">
                                    <option  @if(isset($gallery)) @if($gallery['type'] == "Gallery") selected @endif @endif value="Gallery">Gallery</option>
                                    <option  @if(isset($gallery)) @if($gallery['type'] == "Brand") selected @endif @endif value="Brand">Brand</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($gallery)) value="{{$gallery->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label for="image" class="col-form-label">Image/Logo<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" @if(!isset($gallery)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image.  <strong class="text-danger"> Use 700*466px sizes image  </strong> <strong class="text-danger typeMedia ">Use 9:10 sizes image </strong> </small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($gallery)) {{ url('storage/app/'.$gallery->image)}}" alt="{{$gallery->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                       
                            <div class="col-xl-6" id="typeGallery">
                                <label for="date" class="col-form-label">Broucher (PDF Only)<span class="text-danger">*</span></label>
                                <input type="file" name="date" id="date" @if(!isset($gallery)) required @endif accept="application/pdf" class="form-control">
                                {{-- <br> --}}
                                <div class="invalid-feedback">Please enter a pdf.</div>
                                <embed src="@if(isset($gallery)) {{ url('storage/app/'.$gallery->date)}}" alt="{{$gallery->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                            
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($gallery)) Update @else Submit @endif</button>
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

@section('script')
<script>
    function changeWarning(value) {
        document.getElementById('typeGallery').style.display = (value === 'Gallery') ? 'none' : 'block';
        document.getElementById('typeBrand').style.display = (value === 'Gallery') ? 'block' : 'none';
    }

    // Set initial state based on selected value
    window.onload = function() {
        let selectBox = document.getElementById('selection');
        changeWarning(selectBox.value); // Initialize on page load
    };
</script>

{{-- <script>
    function changeWarning(value){
        if(value=='Gallery'){
            $('#typeGallery').hide();
            $('#typeBrand').show();
        }else{
            $('#typeBrand').hide();
            $('#typeGallery').show();
        }
        
    }
</script> --}}

@endsection
