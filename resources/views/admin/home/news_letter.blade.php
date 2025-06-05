@extends('admin.layouts.main')
@section('page_title','News Letter')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">News Letter Table</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">News Letter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.content-header -->
@endsection  

@section('body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">News Letter</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $num=0;
                        ?>
                        @foreach ($news_letter as $post)
                        <tr>
                            <input type="hidden" class="delete_val_id" value="{{$post->id}}">
                            <td class='id'>{{$num+=1}}</td>
                            <td>{{$post->email}}</td>
                            <td>{{date('d-M-Y', strtotime($post->created_at))}}</td>

                            <td>
                              <div class="text-right project-actions">
                              <a href="javaScript:void(0)" onclick="deleteRecord('news_latters', {{ $post->id }})" class="btn btn-danger btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
                              </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S. No.</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection