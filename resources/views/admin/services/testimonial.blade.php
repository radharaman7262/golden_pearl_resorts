@extends('admin.layouts.main')
@section('page_title','Testimonial')

@section('body')

<div class=" container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">Testimonial List</h4>
                <p><a href="{{route('admin.testimonial_create')}}" class="btn btn-success btn-sm">Add Testimonial</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="display responsive" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Star</th>
                                <th>Comment</th>
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
            ajax: "{{ route('admin.testimonial_data') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'image' },
                { data: 'designation' },
                { data: 'star' },
                { data: 'comment' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection

