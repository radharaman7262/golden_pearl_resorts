@extends('admin.layouts.main')
@section('page_title','SEO')

@section('body')

<div class=" container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">SEO List</h4>
                <p><a href="{{route('admin.seo_create')}}" class="btn btn-success btn-sm">Add SEO</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="display responsive" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Page Name</th>
                                <th>Page Banner</th>
                                <th>Meta-Title</th>
                                <th>Meta-Keyword</th>
                                <th>Meta-Description</th>
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
            ajax: "{{ route('admin.seo_data') }}",
            columns: [
                { data: 'id' },
                { data: 'page_name' },
                { data: 'banner' },
                { data: 'meta_title' },
                { data: 'meta_keyword' },
                { data: 'meta_desc' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection

