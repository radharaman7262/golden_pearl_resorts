@extends('admin.layouts.main')
@section('page_title','Gallery & Brands')

@section('body')

<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">Gallery & Brands List</h4>
                <p><a href="{{route('admin.gallery_create')}}" class="btn btn-success btn-sm">Add Gallery & Brand</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="display responsive" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Image/Logo</th>
                                <th>Broucher (PDF)</th>
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
            ajax: "{{ route('admin.gallery_data') }}",
            columns: [
                { data: 'id' },
                { data: 'type' },
                { data: 'title' },
                { data: 'image' },
                { data: 'broucher' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection

