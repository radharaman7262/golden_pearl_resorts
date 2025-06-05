<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>@yield('meta_title')</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="@yield('meta_description')" content="">
    <meta name="@yield('meta_keyword')" content="">
    <meta name="author" content="">
	
	<!-- Open Graph data -->
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ business_setting('fav_icon') }}" />
    <meta property="og:description" content="@yield('meta_keyword')" />
    <meta property="og:site_name" content="{{ business_setting('site_name') }}" />
    <meta property="fb:app_id" content="">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/color.css" type="text/css">
    
    <link href="{{ url('storage/app/' . business_setting('fav_icon')) }}"  rel="icon" type="image/png">

    <!-- supersized -->
    <link rel='stylesheet' href='{{ asset('assets') }}/js/supersized/css/supersized.css' type='text/css'>
    <link rel='stylesheet' href='{{ asset('assets') }}/js/supersized/theme/supersized.shutter.css' type='text/css'>

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/colors/brown.css" type="text/css" id="colors">

    <style>
       
        #jpreOverlay {
    display: none !important;
}
		
		.logo {
            width: 180px;
            height: 150px;
            /* width: 170px;
            height: 75px; */
        }

        @media only screen and (max-width: 767px) {
            #logo .logo {
                width: 135px;
                height: 110px;
            }

            .jpreLoader{
                /* position: absolute; top: 75%; left: 33%; background-size: cover; */
                left: 50% !important;
            top: 50% !important;
            transform: translate(-50%,-50%) !important;
            }
        }

        @media only screen and (max-width: 524px){
            #mo-menu > li {
                font-family: "Montserrat";
                font-weight: 600;
                text-transform: uppercase;
                font-size: 20px;
                padding: 5px 0;
                display: block;
                cursor: pointer;
                letter-spacing: 5px;
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        <header class="header-fullwidth transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{route('front.index')}}">
                                        <img class="logo logo-as" src="{{ url('storage/app/' . business_setting('header_logo')) }}"
                                            alt="" onerror="this.onerror=null;this.src='{{ asset('frontend-assets') }}/images/defaultimg.jpg';">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>

                            <div class="de-flex-col">
                                <ul id="mainmenu">
                                    <li><a href="{{route('front.index')}}">Home</a></li>
                                    <li><a href="{{route('front.about')}}">About</a></li>
                                    <li><a href="{{route ('front.rooms')}}">Resorts</a></li>
                                    <li><a href="{{route ('front.invest')}}">Invest</a></li>
                                    {{-- <li><a href="{{route('front.blog')}}">Blog</a></li> --}}
                                    <li><a href="{{route('front.gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('front.blog')}}">Blog</a></li>
                                    <li><a href="{{route('front.contact')}}">Contact</a></li>
                                </ul>
                            </div>

                            <div class="de-flex-col">
                                <div class="d-extra">
                                    <a class="btn-main d-lg-block d-none" href="{{route('front.contact')}}"> Enquire now</a>
                                </div>
                                <div id="menu-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->     
    </div>
    <!-- menu overlay close -->

    <div class="float-text">
        <div class="de_social-icons">
          @if(business_setting('facebook'))<a href="{{ business_setting('facebook') }}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a> @endif
          @if(business_setting('twitter'))<a href="{{ business_setting('twitter') }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg>
            </a>
            @endif
            @if(business_setting('instagram'))<a href="{{ business_setting('instagram') }}" target="_blank"><i class="fa fa-instagram fa-lg"></i></a> @endif
            @if(business_setting('linkedin'))<a href="{{ business_setting('linkedin') }}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a> @endif
        </div>
        {{-- <span><a href="{{ route('front.contact') }}">Enquire Now</a></span> --}}
    </div>

    @yield('content')

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/designesia.js"></script>
    {{-- <script src="{{ asset('assets') }}/form.js"></script> --}}
      <script type="text/javascript">
        (function() {
            var options = {
                call: "{{ business_setting('phone_no1') }}", // calling Number
                // whatsapp: "+91 8877001993", // WhatsApp number
                // facebook: "103743984353168", // Facebook page ID
                call_to_action: "Call Us.", // Call to action
                button_color: "#180009", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

        (function() {
            var options = {
                whatsapp: "{{ business_setting('phone_no1') }}", // WhatsApp number
                call_to_action: "Chat with us.", // Call to action
                button_color: "#180009", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>


    @yield('script')

</body>

</html>
