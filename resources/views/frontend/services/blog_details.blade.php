@extends('frontend.layouts.main')
@section('content')
@section('blog', 'active')
@section('meta_title', $blog_details->meta_title)
@section('meta_keyword', $blog_details->meta_keyword)
@section('meta_description', $blog_details->meta_desc)

<div id="background" data-bgimage="url({{ asset('assets') }}/images/background/4.jpg) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="mt-4 text-center col-md-10 offset-md-1">
                    <h1>{{ $blog_details->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-10 offset-md-1">
                    <div class="de-post-read">
                        <div class="post-content">

                            <div class="post-text">
                                <p>{!! $blog_details->long_description !!}</p>

                                <blockquote>{!! $blog_details->long_description !!}</blockquote>

                                <p>{!! $blog_details->long_description !!}</p>
                            </div>
                        </div>

                        {{-- <div class="post-meta"><span><i class="fa fa-user id-color"></i>By: <a
                                    href="#">{{ $blog_details->staffData->name }}</a></span> <span><i
                                    class="fa fa-tag id-color"></i><a
                                    href="#">{{ $blog_details->blogCategoryData->name }}</a>, </span> 
                                    <span class="d-flex justify-content-center align-items-center gap-2">
    <img src="{{ url('storage/app/' . $blog_details->company_logo) }}"
         class="img-fluid"
         style="width: 24px; height: 24px; object-fit: contain;"
         alt="{{ $blog_details->title }}"
         onerror="this.onerror=null;this.src='{{ asset('assets/images/defaultimg.jpg') }}';">
    <span>{!! $blog_details->company_name !!}</span>
</span> --}}

                        <div class="post-meta d-flex align-items-center flex-wrap gap-3">
                            <span class="d-flex align-items-center gap-1">
                                <i class="fa fa-user id-color"></i> By: <a
                                    href="#">{{ $blog_details->staffData->name }}</a>
                            </span>

                            <span class="d-flex align-items-center gap-1">
                                <i class="fa fa-tag id-color"></i> <a
                                    href="#">{{ $blog_details->blogCategoryData->name }}</a>
                            </span>

                            <span class="d-flex align-items-center gap-2">
                                <img src="{{ url('storage/app/' . $blog_details->company_logo) }}" class="img-fluid rounded"
                                    style="width: 34px; height: 34px; object-fit: contain;"
                                    alt="{{ $blog_details->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/images/defaultimg.jpg') }}';">
                                <span>{!! $blog_details->company_name !!}</span>
                            </span>
                        </div>


                        {{-- <span><i
                                    class="fa fa-comment id-color"></i><a href="#">10 Comments</a></span></div> --}}

                        <div class="spacer-single"></div>


                        {{-- <div class="post-content">

                            <div class="post-text">
                                <p>{!! $blog_details->company_name !!}</p>
                                <img src="{{ url('storage/app/' . $blog_details->company_logo) }}" class="img-fluid"
                                    style="max-width: 120px; max-height: 120px; object-fit: contain;"
                                    alt="{{ $blog_details->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/images/defaultimg.jpg') }}';">
                            </div>
                        </div> --}}

                        {{-- <div id="blog-comment">
                            <h3>Comments (5)</h3>

                            <div class="spacer-half"></div>

                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('assets') }}/images/ui/avatar.jpg" alt=""
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">8 August 2018</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="{{ asset('assets') }}/images/ui/avatar.jpg" alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">John Smith</span>
                                                <span class="c_date id-color">8 August 2018</span>
                                                <span class="c_reply"><a href="#">Reply</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                dicta sunt explicabo.</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('assets') }}/images/ui/avatar.jpg" alt=""
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">8 August 2018</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="{{ asset('assets') }}/images/ui/avatar.jpg" alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">John Smith</span>
                                                <span class="c_date id-color">8 August 2018</span>
                                                <span class="c_reply"><a href="#">Reply</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                dicta sunt explicabo.</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('assets') }}/images/ui/avatar.jpg" alt=""
                                        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.jpg';">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">8 August 2018</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                </li>
                            </ol>

                            <div class="spacer-single"></div>

                            <div id="comment-form-wrapper">
                                <h3>Leave a Comment</h3>
                                <div class="comment_form_holder">
                                    <form id="contact_form" name="form1" method="post" action="#">

                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control">

                                        <label>Email <span class="req">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control">
                                        <div id="error_email" class="error">Please check your email</div>

                                        <label>Message <span class="req">*</span></label>
                                        <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                        <div id="error_message" class="error">Please check your message</div>
                                        <div id="mail_success" class="success">Thank you. Your message has been sent.
                                        </div>
                                        <div id="mail_failed" class="error">Error, email not sent</div>

                                        <p id="btnsubmit">
                                            <input type="submit" id="send" value="Send"
                                                class="btn btn-line">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
    </section>
    <!-- subheader close -->

    @include('frontend.layouts.footer')

@endsection
