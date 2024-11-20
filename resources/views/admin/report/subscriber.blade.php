@extends('admin.layouts.app', ['title' => 'Subscriber Records'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Subscriber Records</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Subscriber Records</li>
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
                        <h5 class="card-title">Subscriber Records</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <div class="alert alert-info">
                                    <b><i class="ri-information-line"></i> Note</b>: If you want to export all record, you need to select <b>Show All</b>, then you can export all record at a time.
                                </div>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5%">ID</th>
                                            <th>Email</th>
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
        #datatable-buttons_filter {
            float: right !important;
        }
        #datatable-buttons_length {
            float: left !important;
            margin-right: 25px;
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
                ajax: "{{ route('admin.report.subscribers') }}",
                columns: [
                    {data: 'id', name: 'id', orderable: true},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[0, 'desc']], 
                lengthChange: true,
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn btn-info',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            modifier: {
                                page: 'all'
                            }
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-success',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            modifier: {
                                page: 'all'
                            }
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-primary',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            modifier: {
                                page: 'all'
                            }
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-danger',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            modifier: {
                                page: 'all'
                            }
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-warning',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            modifier: {
                                page: 'all'
                            }
                        }
                    }
                ],
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "Show All"] ],
            });
            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-primary');
            $('.dt-buttons .btn').css('margin-right', '10px');
        });
    </script>
@endpush