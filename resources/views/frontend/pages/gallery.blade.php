@extends('frontend.layouts.main')
@section('about', 'active')
@section('meta_title', seo_helper(2)->meta_title)
@section('meta_keyword', seo_helper(2)->meta_keyword)
@section('meta_description', seo_helper(2)->meta_desc)
@section('content')

<style>
    /* .row .item:nth-child(3) .de-image-hover img {
        aspect-ratio:10/14;
    } */
    
    
    .row .item:not(:nth-child(3)):not(:nth-child(6)) .de-image-hover img {
        aspect-ratio:6/4;
    }
    </style>

<div id="background" data-bgimage="url({{ asset('assets') }}/images/background/5.jpg) fixed"></div>
<div id="content-absolute">

    
    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-12">
                    <h4>Latest</h4>
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div id="gallery" class="row g-4">

@foreach ($galleries as $key => $gallery)
   
        <div class="col-md-4 item">
            <div class="de-image-hover">
                <a href="{{ url('storage/app/' . $gallery->image) }}" class="image-popup">                                
                    <span class="dih-title-wrap">
                        <span class="dih-title">{{ $gallery->title }}</span>
                    </span>
                    <span class="dih-overlay"></span>
                    <img src="{{ url('storage/app/' . $gallery->image) }}" class="lazy img-fluid" alt="{{ $gallery->title }}"
                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                </a>
            </div>
        </div>
   
   
@endforeach            
            </div>
        </div>
    </section>
    <!-- subheader close -->
  
    @include('frontend.layouts.footer')

</div>


@endsection
