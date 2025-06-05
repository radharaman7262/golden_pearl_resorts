  <!-- footer begin -->
  <footer class="no-top pl20 pr20">
    <div class="subfooter">
        <div class="container-fluid">
            <div class="row">
                <li>
                    <a href="{{route('front.termCondition')}}">Terms & Conditions</a>
                    <a href="{{route('front.privacyPolicy')}}"><strong> . </strong> Policy & Policy</a>
                </li>
                <div class="col-md-6">&copy; {{ business_setting('copyright') }} 
                    {{-- <span class="id-color">Designesia</span> --}}
                </div>
                <div class="text-right col-md-6">
                    <div class="social-icons">
                        {{-- <a href="{{ business_setting('facebook') }}"><i class="fa fa-facebook fa-lg"></i></a> --}}
                        {{-- <a href="#"><i class="fa fa-twitter fa-lg"></i></a> --}}
                        {{-- <a href="{{ business_setting('twitter') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                              </svg>
                        </a> --}}
                        @if(business_setting('linkedin')) <a href="{{ business_setting('linkedin') }}"><i class="fa fa-linkedin fa-lg"></i></a> @endif
                        @if(business_setting('facebook')) <a href="{{ business_setting('facebook') }}"><i class="fa fa-facebook fa-lg"></i></a> @endif
                        @if(business_setting('instagram')) <a href="{{ business_setting('instagram') }}"><i class="fa fa-instagram fa-lg"></i></a> @endif
                        {{-- <a href="{{ business_setting('instagram') }}"><i class="fa fa-dribbble fa-lg"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>
</footer>
<!-- footer close -->