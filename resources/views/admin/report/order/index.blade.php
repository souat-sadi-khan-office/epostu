@extends('admin.layouts.app', ['title' => 'Order Records', 'modal' => 'lg'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Order Records</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Order Records</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                </div>                        
            </div>
        </div>          
    </div>

    <div class="contentbar">                
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Order Records</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>Plan</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('backend/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #datatable-buttons_wrapper {
            padding-left: 0px;
            padding-right: 0px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('backend/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/responsive.bootstrap4.min.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            var table = $('#datatable-buttons').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.report.order') }}",
                columns: [
                    {data: 'created_at', name: 'created_at'},
                    {data: 'name', name: 'name'},
                    {data: 'product', name: 'product'},
                    {data: 'plan', name: 'plan'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                lengthChange: false,
                responsive: true,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                order: [0, 'desc']
            });
            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

            _componentRemoteModalLoadAfterAjax();

        });

    </script>
@endpush