@extends('admin.layouts.main')
@section('page_title','Sliders')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" >
                    <h4 class="card-title">Home Video</h4>
                    <p><a href="{{route('admin.slider_create')}}" class="btn btn-success btn-sm">Add Slider</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="display responsive" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Sub-Title</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- use your script code here -->
@section('script')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            order: [
                [0, 'asc']
            ],
            ajax: "{{ route('admin.slider_data') }}",
            columns: [
                { data: 'id' },
                { data: 'title' },
                { data: 'sub_title' },
                { data: 'image' },
                { data: 'link' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection

