@php
    $current_route = request()->route()->getName();
    $currenturl = url()->full();
    $baseUrl = request()->root();
@endphp

<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @if(checkAccess('1'))
            <li>
                <a href="{{ route('admin.dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @endif
{{-- 
            @if(checkAccess('2') || checkAccess('3') || checkAccess('4'))
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Staff Manage</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('2'))
                    <li><a href="{{ route('admin.admin') }}">Staff</a></li>
                    @endif
                    @if(checkAccess('3'))
                    <li><a href="{{ route('admin.role') }}">Role</a></li>
                    @endif
                    @if(checkAccess('4'))
                    <li><a href="{{ route('admin.permission') }}">Permission</a></li>
                    @endif
                </ul>
            </li>
            @endif --}}
                
            @if(checkAccess('5') || checkAccess('6') || checkAccess('7'))
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings Manage</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('5'))
                    <li><a href="{{ route('admin.business_setting') }}">Bussiness Setting</a></li>
                    <li><a href="{{ route('admin.about_setting') }}">About Setting</a></li>
                    @endif
                    {{-- @if(checkAccess('6'))
                    <li><a href="{{ route('admin.cms_setting') }}">CMS Setting</a></li>
                    @endif
                    @if(checkAccess('7'))
                    <li><a href="{{ route('admin.heading') }}">CMS Heading</a></li>
                   
                    @endif --}}
                </ul>
            </li>
            @endif

            @if(checkAccess('19'))
            <li><a href="{{ route('admin.slider') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Slider</span>
                </a>
            </li>
            @endif

            @if(checkAccess('22'))
            <li>
                <a href="{{ route('admin.services') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Resorts</span>
                </a>
            </li>
            @endif

            @if(checkAccess('8') || checkAccess('9') || checkAccess('10'))
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Blog Manage</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('8'))
                    <li><a href="{{ route('admin.blog_category') }}">Category</a></li>
                    @endif
                    @if(checkAccess('9'))
                    <li><a href="{{ route('admin.blog') }}">Blogs</a></li>
                    @endif
                </ul>
            </li>
            @endif

            @if(checkAccess('20'))
            <li>
                <a href="{{ route('admin.feature') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">About Facilities</span>
                </a>
            </li>
            @endif

            {{-- @if(checkAccess('21'))
            <li>
                <a href="{{ route('admin.testimonial') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Testimonials</span>
                </a>
            </li>
            @endif --}}

            
            @if(checkAccess('14'))
            <li>
                <a href="{{ route('admin.gallery') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Gallery & Brands</span>
                </a>
            </li>
            @endif

            {{-- @if(checkAccess('14') || checkAccess('15'))
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Gallery</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('14'))
                    <li><a href="{{ route('admin.gallery') }}">Gallery</a></li>
                    @endif
                </ul>
            </li>
            @endif --}}

            {{-- @if(checkAccess('23'))
            <li>
                <a href="{{ route('admin.faq') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">FAQ's</span>
                </a>
            </li>
            @endif --}}

               
            @if(checkAccess('16'))
            <li>
                <a href="{{ route('admin.contact') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Invest Enquiry</span>
                </a>
            </li>
            @endif

            {{-- @if(checkAccess('16') || checkAccess('17') || checkAccess('18'))
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-controls-3"></i>
                <span class="nav-text">Invest</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('16'))
                    <li><a href="{{ route('admin.contact') }}">Invest Enquiry</a></li>
                    @endif
                    @if(checkAccess('16'))
                    <li><a href="{{ route('admin.news_letter') }}">News-Letter</a></li>
                    @endif
                </ul>
            </li>
            @endif --}}

            {{-- @if(checkAccess('24'))
            <li><a href="{{ route('admin.seo') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">SEO</span>
                </a>
            </li>
            @endif --}}
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

