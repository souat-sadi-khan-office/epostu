@extends('admin.layouts.app', ['title' => 'EposTu Pricing Plan', 'modal' => 'md'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">EposTu Pricing Plan</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">EposTu Pricing Plan</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                    <a href="javascript:;" data-url="{{ route('admin.epostu-pricing-plan.create') }}" id="content_management" class="btn btn-success">
                        <i class="bi bi-plus"></i>
                        Create New
                    </a>
                </div>                        
            </div>
        </div>          
    </div>

    <div class="contentbar">                
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion" id="accordionwithicon">
                    <div class="card">
                        <div class="card-header bg-white" id="headingOneicon">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneicon" aria-expanded="true" aria-controls="collapseOneicon"><i class="ri-award-line mr-2"></i>Plan Setup</button>
                            </h2>
                        </div>
                        <div id="collapseOneicon" class="collapse" aria-labelledby="headingOneicon" data-parent="#accordionwithicon">
                            <div class="card-body">
                                <form action="{{ route('admin.settings.update') }}" method="POST" class="content_form">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="basic_plan_name">Basic Plan Name <span class="text-danger">*</span></label>
                                            <input type="text" name="basic_plan_name" id="basic_plan_name" class="form-control" required value="{{ get_settings('basic_plan_name') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="premium_plan_name">Premium Plan Name <span class="text-danger">*</span></label>
                                            <input type="text" name="premium_plan_name" id="premium_plan_name" class="form-control" required value="{{ get_settings('premium_plan_name') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="corporate_plan_name">Corporate Plan Name <span class="text-danger">*</span></label>
                                            <input type="text" name="corporate_plan_name" id="corporate_plan_name" class="form-control" required value="{{ get_settings('corporate_plan_name') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="basic_plan_price_monthly">Basic Plan Monthly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="basic_plan_price_monthly" id="basic_plan_price_monthly" class="form-control" required value="{{ get_settings('basic_plan_price_monthly') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="premium_plan_price_monthly">Premium Plan Monthly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="premium_plan_price_monthly" id="premium_plan_price_monthly" class="form-control" required value="{{ get_settings('premium_plan_price_monthly') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="corporate_plan_pricing_monthly">Corporate Plan Monthly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="corporate_plan_pricing_monthly" id="corporate_plan_pricing_monthly" class="form-control" required value="{{ get_settings('corporate_plan_pricing_monthly') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="basic_plan_price_yearly">Basic Plan Yearly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="basic_plan_price_yearly" id="basic_plan_price_yearly" class="form-control" required value="{{ get_settings('basic_plan_price_yearly') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="premium_plan_price_yearly">Premium Plan Yearly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="premium_plan_price_yearly" id="premium_plan_price_yearly" class="form-control" required value="{{ get_settings('premium_plan_price_yearly') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="corporate_plan_pricing_yearly">Corporate Plan Yearly Pricing <span class="text-danger">*</span></label>
                                            <input type="text" name="corporate_plan_pricing_yearly" id="corporate_plan_pricing_yearly" class="form-control" required value="{{ get_settings('corporate_plan_pricing_yearly') }}">
                                        </div>
                                        <div class="col-md-4 mx-auto">
                                            <button type="submit" id="submit" class="btn btn-success btn-block">
                                                <i class="bi bi-send"></i>
                                                Update
                                            </button>
                                            <button class="btn btn-warning btn-block" style="display: none;" id="submitting" type="button"
                                                disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">EposTu Pricing Plan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Plan</th>
                                            <th>Checked</th>
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
                ajax: "{{ route('admin.epostu-pricing-plan.index') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'plan', name: 'plan'},
                    {data: 'checked', name: 'checked'},
                    {data: 'status', name: 'status', orderable: false, searchable: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                lengthChange: false,
                responsive: true,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

            _componentRemoteModalLoadAfterAjax();
            _formValidation();
        });
    </script>
@endpush