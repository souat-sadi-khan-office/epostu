@extends('admin.layouts.app', ['title' => 'Show Gift Owner', 'modal' => 'md'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Show Gift Owner</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.gift-item.index') }}">
                                Gift Item
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">'Show Gift Owner</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                    <a href="{{ route('admin.gift-item.index') }}" class="btn btn-success">
                        Back
                    </a>
                </div>                        
            </div>
        </div>          
    </div>

    <div class="contentbar">                
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </thead>
                            <tbody>
                                @if (count($model->events) > 0)
                                    @foreach ($model->events as $key => $event)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date('d F, Y h:i A', strtotime($event->created_at)) }}</td>
                                            <td>{{ $event->first_name . ' '. $event->last_name }}</td>
                                            <td>{{ $event->email }}</td>
                                            <td>{{ $event->phone }}</td>
                                        </tr>
                                    @endforeach
                                @else    
                                    <tr>
                                        <td class="text-center" colspan="4">Nothing to show.</td>
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
  
@endpush