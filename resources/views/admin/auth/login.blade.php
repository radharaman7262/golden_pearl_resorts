<!DOCTYPE html>
<html lang="en" class="h-100">

<!--  page-login  08:46:40 GMT -->
<head>
    <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="description" content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
	<meta property="og:title" content="Welly - Hospital Admin Dashboard Bootstrap HTML Template">
	<meta property="og:description" content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>Admin Login || {{business_setting('site_name')}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('storage/app/'.business_setting('fav_icon'))}}">
    <link href="{{ asset('admin-assets') }}/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="text-center mb-3">
                        <a href="{{route('front.index')}}"><img loading="lazy" src="{{ url('storage/app/' .business_setting('header_logo')) }}" alt="{{business_setting('site_name')}}" style="height:200px;"></a>
                    </div>
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                    @endif
                                    <div class="form-validation">
                                        <form action="{{ route('admin.login') }}" method="post" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="form-group">
                                                <label class="mb-1 text-white" for="email"><strong>Email</strong><span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                                                        title="Enter Valid Email" class="form-control border-s-1" placeholder="Enter a email.." required>
                                                    <div class="invalid-feedback">Please enter a email.</div>
                                                </div>
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                            @enderror

                                            <div class="form-group">
                                                <label class="mb-1 text-white" for="dlab-password"><strong>Password</strong><span class="text-danger">*</span></label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                    <input type="password" name="password" id="dlab-password" required class="form-control" placeholder="Choose a safe one..">
                                                    <span class="input-group-text show-pass border-s-1 "> 
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                    <div class="invalid-feedback">Please enter a password.</div>
                                                </div>
                                            </div>
                                            @error('password')
                                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                            @enderror
                                            
                                            {{-- <div class="row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                <div class="form-check custom-checkbox ms-1 text-white">
                                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                        <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <a class="text-white" href="#">Forgot Password?</a>
                                                </div>
                                            </div> --}}
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin-assets') }}/vendor/global/global.min.js"></script>
	<script src="{{ asset('admin-assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('admin-assets') }}/js/custom.min.js"></script>
    <script src="{{ asset('admin-assets') }}/js/deznav-init.js"></script>
    <!-- Jquery Validation -->
    <script src="{{ asset('admin-assets') }}/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin-assets') }}/js/plugins-init/jquery.validate-init.js"></script>
	<script>
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
	</script>
</body>
<!--  page-login  08:46:41 GMT -->
</html>

