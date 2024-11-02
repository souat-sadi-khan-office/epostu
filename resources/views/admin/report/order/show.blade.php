<div class="modal-header">
    <h5 class="modal-title">Order Details: {{ $model->first_name . ' '. $model->last_name }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <td width="30%">Status</td>
                    <td>
                        @if ($model->status)
                            <span class="badge badge-success">Checked</span>
                        @else 
                            <span class="badge badge-danger">Unchecked</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td width="30%">Date</td>
                    <td>{{ date('d F, Y h:i A', strtotime($model->created_at)) }}</td>
                </tr>
                <tr>
                    <td width="30%">Product</td>
                    <td>{{ ucfirst($model->product) }}</td>
                </tr>
                <tr>
                    <td width="30%">Plan</td>
                    <td>{{ ucfirst($model->plan) }}</td>
                </tr>
                <tr>
                    <td width="30%">Pricing Plan</td>
                    <td>{{ ucfirst($model->pricing_plan) }}</td>
                </tr>
                <tr>
                    <td width="30%">First Name</td>
                    <td>{{ $model->first_name }}</td>
                </tr>
                <tr>
                    <td width="30%">Last Name</td>
                    <td>{{ $model->last_name }}</td>
                </tr>
                <tr>
                    <td width="30%">Email</td>
                    <td>{{ $model->email }}</td>
                </tr>
                <tr>
                    <td width="30%">Phone</td>
                    <td>{{ $model->phone }}</td>
                </tr>
                <tr>
                    <td width="30%">Address</td>
                    <td>{{ $model->address }}</td>
                </tr>
                <tr>
                    <td width="30%">Address 2</td>
                    <td>{{ $model->address2 }}</td>
                </tr>
                <tr>
                    <td width="30%">Country</td>
                    <td>{{ $model->country }}</td>
                </tr>
                <tr>
                    <td width="30%">Zip</td>
                    <td>{{ $model->zip }}</td>
                </tr>
            </table>
        </div>
        
        <div class="col-md-12 mt-3 text-end">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>