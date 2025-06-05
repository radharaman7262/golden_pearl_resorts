@extends('frontend.layouts.main')
@section('content')
@section('contact', 'active')
@section('meta_title', seo_helper(5)->meta_title)
@section('meta_keyword', seo_helper(5)->meta_keyword)
@section('meta_description', seo_helper(5)->meta_desc)


<div id="background" data-bgimage="url({{asset('assets')}}/images/background/9.jpg) fixed"></div>
        <div id="content-absolute">
            
            <!-- subheader -->
            <section id="subheader" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            {{-- <h4>Make a</h4> --}}
                            <h1>Invest</h1>
                            <p>{{ business_setting('invest_paragraph') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="de-content-overlay">
                                <div class="row">
                                    @foreach ($brand_pdf as $bpdf)

                                    <div class="col-lg-6">
                                        <div class="card card-body">
                                            <a href="{{ url('storage/app/' . $bpdf->date) }}" target="_blank" class="d-flex justify-content-between align-items-center"><span>{{$bpdf->title}} Broucher Pdf Download</span>
                                            <i class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- @endif

                                    @if(business_setting('testimonial_banner2')) 
                                     <div class="col-lg-6">
                                        <div class="card card-body">
                                            <a href="{{url('storage/app/' . business_setting('testimonial_banner2'))}}" target="_blank" class="d-flex justify-content-between align-items-center"><span>    Broucher Pdf-2 Download </span> <i class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-lg-12">
                                        <div class="spacer-single"></div>
                                        <form action="{{ route('contact_create') }}"  id='contact_form' method="POST"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb10">
                                                    <h3>Send Us Message</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id='name_error' class='error'>Please enter your name.</div>
                                                    <div>
                                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                                    </div>

                                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                                    <div>
                                                        <input type='email' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                                    </div>

                                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                                    <div>
                                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id='message_error' class='error'>Please enter your message.</div>
                                                    <div>
                                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div id='subject_error' class='error'>Please enter your subject.</div>
                                                    <div>
                                                        <input type='text' name='subject' id='subject' class="form-control" placeholder="Your Subject" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                                    <p id='submit' class="mt20">
                                                        <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                                    </p>
                                                    {{-- <button type="submit">submit</button> --}}
                                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                                    
                                                </div>
                                            </div>
                                        </form>

                                        <div id="success_message" class='success'>
                                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                                        </div>
                                        <div id="error_message" class='error'>
                                            Sorry there was an error sending your form.
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-4">
                                        <div class="map-container map-fullwidth">
                                            <iframe src="{{ business_setting('map') }}" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </section>
            <!-- subheader close -->
            <!-- footer begin -->
            @include('frontend.layouts.footer')
            <!-- footer close -->
@endsection
