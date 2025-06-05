@extends('admin.layouts.main')
@section('page_title','Role')

@section('body')
<div class=" container-fluid">
<div class="row">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($role)) Edit @else Add @endif Role</h4>
                <p><a href="{{route('admin.role')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.role_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($role)) value="{{$role->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="col-form-label" for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" @if(isset($role)) value="{{$role->name}}" @endif class="form-control" placeholder="Enter a name.." required>
                                <div class="invalid-feedback">Please enter a name.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="possition">Possition<span class="text-danger">*</span></label>
                                <input type="number" name="possition" id="possition" @if(isset($role)) value="{{$role->possition}}" @endif class="form-control" placeholder="Enter a possition.." required>
                                <div class="invalid-feedback">Please enter a possition.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="permission">Permission Name<span class="text-danger">*</span></label>
                                <select class="multi-select" name="permission[]" multiple="multiple" required>
                                    @foreach ($permission as $post)
                                        <option @if(isset($role)) @if(in_array($post['id'],json_decode($role['permission']))) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($role)) Update @else Submit @endif</button>
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
