@extends('admin.layouts.main')
@section('page_title','Staff')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Staff List</h4>
                <p><a href="{{route('admin.create')}}" class="btn btn-success btn-sm">Add Staff</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Role</th>
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
            ajax: "{{ route('admin.data') }}",
            columns: [
                { data: 'id' },
                { data: 'employee_id' },
                { data: 'name' },
                { data: 'phone' },
                { data: 'email' },
                { data: 'role' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection
