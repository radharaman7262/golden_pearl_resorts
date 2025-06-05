@extends('layouts.main')

@section('content-header')
<?php

// print_r(Auth::user()->is_admin);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Welcome User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('body')
@php
// $arr = ["a"=>"info", "b"=>"success", "c"=>"warning", "d"=>"danger"];
@endphp
<div class="row">
{{-- @if(checkAccess(1))
    @php
    $consent = \App\Models\Admin\Consent::get()->count();
    @endphp
    @php
    $key = array_rand($arr);
    @endphp
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-{{$arr[$key]}}">
            <div class="inner">
                <h3>{{$consent}}</h3>
                <p>Total Consent </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('admin.consent')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
@endif
@if(checkAccess(4))
@php

$district = \App\Models\Admin\District::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$district}}</h3>
            <p>Total District</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.district')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>


@php

$tehsil = \App\Models\Admin\Tehsil::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$tehsil}}</h3>
            <p>Total Tehsil</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.tehsil')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$halka = \App\Models\Admin\Halka::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$halka}}</h3>
            <p>Total Halka</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.halka')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$village = \App\Models\Admin\Village::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$village}}</h3>
            <p>Total village</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.village')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$tree = \App\Models\Admin\Tree::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$tree}}</h3>
            <p>Total Tree</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.tree')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@endif


@if(checkAccess(3))
@php

$gallery = \App\Models\Admin\Gallery::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$gallery}}</h3>
            <p>Total Gallery Images</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.gallery')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>


@php

$service = \App\Models\Admin_front\Services::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$service}}</h3>
            <p>Total Services</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$work = \App\Models\Admin_front\Work::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$work}}</h3>
            <p>Total Work</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.work')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$client = \App\Models\Admin_front\Clients::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$client}}</h3>
            <p>Total client</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.clients')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php

$news = \App\Models\Admin_front\News::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$news}}</h3>
            <p>Total news</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.news')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php
$team = \App\Models\Admin_front\Team::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$team}}</h3>
            <p>Total team</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.team')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@php
$contact = \App\Models\Admin_front\Contacts::get()->count();
@endphp
@php
$key = array_rand($arr);
@endphp
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$arr[$key]}}">
        <div class="inner">
            <h3>{{$contact}}</h3>
            <p>Total contact</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin_front.contacts')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

@endif --}}
    <!-- ./col -->
</div>
@endsection
