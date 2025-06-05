@extends('admin.layouts.main')
@section('page_title','FAQs')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($faq)) Edit @else Add @endif FAQ's</h4>
                <p><a href="{{route('admin.faq')}}"  class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.faq_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($faq)) value="{{$faq->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="col-form-label" for="question">Question<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="question" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($faq)){{$faq->question}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a question.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="answer">Answer<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="answer" id="editor" rows="5" placeholder="What would you like to see?" required>@if(isset($faq)){{$faq->answer}}@endif</textarea>
                                <div class="invalid-feedback">Please enter a answer.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($faq)) Update @else Submit @endif</button>
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
