<div class="modal-header">
    <h5 class="modal-title">Partner Details: {{ $model->first_name . ' '. $model->last_name }}</h5>
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
                            <span class="badge badge-success">Verified</span>
                        @else 
                            <span class="badge badge-danger">Unverified</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td width="30%">Date</td>
                    <td>{{ date('d F, Y h:i A', strtotime($model->created_at)) }}</td>
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
                    <td width="30%">Company</td>
                    <td>{{ $model->company_name }}</td>
                </tr>
                <tr>
                    <td width="30%">Contact</td>
                    <td>{{ $model->contact_person }}</td>
                </tr>
                <tr>
                    <td colspan="2">Message</td>
                </tr>
                <tr>
                    <td colspan="2">{!! nl2br($model->message) !!}</td>
                </tr>
            </table>
        </div>
        
        <div class="col-md-12 mt-3 text-end">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>