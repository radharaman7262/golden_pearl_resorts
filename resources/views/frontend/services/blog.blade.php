@extends('frontend.layouts.main')
@section('blog', 'active')
@section('meta_title', seo_helper(4)->meta_title)
@section('meta_keyword', seo_helper(4)->meta_keyword)
@section('meta_description', seo_helper(4)->meta_desc)
@section('content')

<style>
    ul.pagination{
        margin-bottom: 0 !important;
        margin-top: 2rem;
    }
    
    .pagination {
        justify-content: center;
        align-items: center;
    }

    .disabled span,
    .active span {
        color: #fff;
        border: solid 1px rgba(255, 255, 255, .5);
        background: none;
        margin: 5px;
        padding: 10px 15px 10px 15px;
        cursor: pointer;
    }

    .disabled span{
        background:#ffffff24 !important;
        color: #fff !important;
        border: solid 1px rgba(255, 255, 255, .5) !important;
    }

    nav div:nth-child(1) {
        display: none;
    }
</style>

<div id="background" data-bgimage="url({{ asset('assets') }}/images/background/3.jpg) fixed">
</div>
<div id="content-absolute">



    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-12">
                    <h4>Latest</h4>
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-4">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b" style="aspect-ratio:5/5">
                                <a href="{{ route('front.blog_details', ['slug' => $blog->slug]) }}" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">{{ date('M', strtotime($blog->date)) }}
                                            {{ date('d', strtotime($blog->date)) }},
                                            {{ date('Y', strtotime($blog->date)) }}
                                            <span>
                                            </span>

                                            <h3>{{ $blog->title }}</h3>
                                            {{-- <p> --}}
                                            {!! Str::limit($blog->short_description, 200) !!}
                                            {{-- </p> --}}
                                            <h5 class="d-tag">{{ $blog->blogCategoryData->name }}</h5>
                                    </div>
                                </a>
                                <img src="{{ url('storage/app/' . $blog->image) }}" class="img-fluid w-100 h-100"
                                    alt="{{ $blog->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"></div>

                <!-- **Pagination** -->
                <div class="justify-content-center d-flex">
                    {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>

            </div>

        </div>
    </section>
    <!-- subheader close -->
    <!-- footer begin -->
    @include('frontend.layouts.footer')
    <!-- footer close -->
</div>

@endsection
