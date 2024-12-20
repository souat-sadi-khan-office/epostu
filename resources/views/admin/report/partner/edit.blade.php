<div class="modal-header">
    <h5 class="modal-title">Update Partner Details: {{ $model->first_name . ' '. $model->last_name }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form action="{{ route("admin.report.partner.update", $model->id) }}" method="POST" class="ajax-form">
        @method('PATCH')
        <div class="row">

            <div class="col-md-6 form-group">
                <label for="first_name">First Name <span class="text-danger">*</span></label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required value="{{ $model->first_name }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required value="{{ $model->last_name }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="email">Email Address <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Address" required value="{{ $model->email }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="phone">Phone Number <span class="text-danger">*</span></label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required value="{{ $model->phone }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="company_name">Company Name </label>
                <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Enter Company Name" value="{{ $model->company_name }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" id="contact_person" class="form-control" placeholder="Enter Contact Person" value="{{ $model->contact_person }}">
            </div>

            <div class="col-md-12 form-group">
                <label for="status">Status <span class="text-danger">*</span></label>
                <select name="status" id="status" class="form-control" required>
                    <option {{ $model->status == 1 ? 'selected' : '' }} value="1">Verified</option>
                    <option {{ $model->status == 0 ? 'selected' : '' }} value="0">Unverified</option>
                </select>
            </div>

            <div class="col-md-12 mt-3 text-end">
                <button class="btn btn-success" type="submit" id="submit">
                    <i class="bi bi-send"></i>
                    Update
                </button>
                <button class="btn btn-warning" style="display: none;" id="submitting" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
</div>