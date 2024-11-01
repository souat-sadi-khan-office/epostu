@extends('admin.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>          
    </div>

    <div class="contentbar">   
        <div class="row"> 
            <div class="col-md-12 col-xl-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-8">
                                        <p class="font-15">Total Partner</p>
                                        <h4 class="card-title mb-0">{{ $total_partner }}</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="iconbar iconbar-md bg-primary text-white rounded">
                                            <i class="ri-group-line align-unset"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-8">
                                        <p class="font-15">Total Active Partner</p>
                                        <h4 class="card-title mb-0">{{ $total_partner_active }}</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="iconbar iconbar-md bg-success text-white rounded">
                                            <i class="ri-group-line align-unset"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-8">
                                        <p class="font-15">Total Contact Message</p>
                                        <h4 class="card-title mb-0">{{ $total_contact_message }}</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="iconbar iconbar-md bg-info text-white rounded"><i class="ri-contacts-line align-unset"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-8">
                                        <p class="font-15">Total Subscribers</p>
                                        <h4 class="card-title mb-0">{{ $total_subscribers }}</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="iconbar iconbar-md bg-warning text-white rounded"><i class="ri-mail-line align-unset"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->  

            <div class="col-md-12 col-xl-6">
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-6 col-lg-9">
                                <h5 class="card-title mb-0">Partner Compare</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="apex-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start row -->
        <div class="row"> 
            
            <!-- Start col -->
            <div class="col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">Latest Partner</h5>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('admin.report.partner') }}" class="btn btn-outline-light text-muted btn-sm float-right font-12">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($latest_partners) > 0)
                                        @foreach ($latest_partners as $partner)
                                            <tr>
                                                <td>{{ date('d F, Y h:i', strtotime($partner->created_at)) }}</td>
                                                <td>{{ $partner->name }}</td>
                                                <td>{{ $partner->email }}</td>
                                            </tr>
                                        @endforeach
                                    @else    
                                        <tr>
                                            <td class="text-center" colspan="3"> Nothing to show</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">Latest Messages</h5>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('admin.report.contact-message') }}" class="btn btn-outline-light text-muted btn-sm float-right font-12">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($latest_messages) > 0)
                                    @foreach ($latest_messages as $message)
                                        <tr>
                                            <td>{{ date('d F, Y h:i', strtotime($message->created_at)) }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                        </tr>
                                    @endforeach
                                @else    
                                    <tr>
                                        <td class="text-center" colspan="3"> Nothing to show</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">Latest Subscriber</h5>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('admin.report.subscribers') }}" class="btn btn-outline-light text-muted btn-sm float-right font-12">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($latest_subscribers) > 0)
                                    @foreach ($latest_subscribers as $subscriber)
                                        <tr>
                                            <td>{{ date('d F, Y h:i', strtotime($subscriber->created_at)) }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                        </tr>
                                    @endforeach
                                @else    
                                    <tr>
                                        <td class="text-center" colspan="2"> Nothing to show</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/js/apexcharts.min.js') }}"></script>
    <script>
        $(document).ready(function() {    
            
            var options = {
                chart: {
                    height: 270,
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '25%',
                        endingShape: 'rounded'  
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                colors: ['#0442ba', '#9ccc34'],
                series: [{
                    name: 'Total Partner',
                    data: [65, 87, 105, 72, 90, 50]
                }, {
                    name: 'Total Active Partner',
                    data: [42, 61, 58, 66, 78, 42]
                }],
                legend: {
                    show: false,
                },
                xaxis: {
                    categories: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    axisBorder: {
                        show: true, 
                        color: 'rgba(0,0,0,0.05)'
                    },
                    axisTicks: {
                        show: true, 
                        color: 'rgba(0,0,0,0.05)'
                    }
                },
                grid: {
                    row: {
                        colors: ['transparent', 'transparent'], opacity: .2
                    },
                    borderColor: 'rgba(0,0,0,0.05)'
                },
                fill: {
                    opacity: 1,
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#apex-bar-chart"),
                options
            );
            chart.render();

        });
    </script>
@endpush