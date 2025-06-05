@extends('admin.layouts.main')
@section('page_title','Staff')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@if(isset($admin)) Edit @else Add @endif Staff</h4>
                <p><a href="{{route('admin.admin')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('admin.create')}}" method="POST" enctype="multipart/form-data" class="form-valide-with-icon needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($admin)) value="{{$admin->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="text-label form-label" for="email">Email Id<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Enter Valid Email"
                                        @if(isset($admin)) value="{{$admin->email}}" @endif class="form-control border-s-1" placeholder="Enter a email.." required>
                                    <div class="invalid-feedback">Please enter a email.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="text-label form-label" for="dlab-password">Password<span class="text-danger">*</span></label>
                                <div class="input-group transparent-append">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input @if(!isset($admin)) required @endif type="password" name="password" id="dlab-password"
                                        @if(isset($admin)) value="" @endif class="form-control" placeholder="Choose a safe one..">
                                    <span class="input-group-text show-pass border-s-1 "> 
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <div class="invalid-feedback">Please enter a password.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="text-label form-label" for="name">Name<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" id="name" onkeydown="return /[a-z]/i.test(event.key)"
                                        @if(isset($admin)) value="{{$admin->name}}" @endif class="form-control border-s-1" placeholder="Enter a name.." required>
                                    <div class="invalid-feedback">Please enter a name.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="text-label form-label" for="phone">Phone<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" pattern="[0-9]{10}" maxlength="10"
                                        @if(isset($admin)) value="{{$admin->phone}}" @endif class="form-control border-s-1" id="phone" placeholder="Enter a phone.." required>
                                    <div class="invalid-feedback">Please enter a phone.</div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <p>Role<span class="text-danger">*</span></p>
                                <select name="is_admin" id="single-select" class="form-control" required>
                                    @foreach ($roles as $post)
                                        <option @if(isset($admin)) @if($admin['is_admin']==$post->id) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($admin)) Update @else Submit @endif</button>
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
    
      
 
           