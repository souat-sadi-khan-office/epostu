<div class="modal-header">
    <h5 class="modal-title">Update Pricing Plan</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form action="{{ route("admin.truspan-pricing-plan.update", $model->id) }}" method="POST" class="ajax-form">
        @method('PATCH')
        <div class="row">

            <div class="col-md-12 form-group">
                <label for="plan_id">Plan</label>
                <select name="plan_id" id="plan_id" class="form-control">
                    <option {{ $model->plan_id == 1 ? 'selected' : '' }} value="1">{{ get_settings('basic_plan_name') }}</option>
                    <option {{ $model->plan_id == 2 ? 'selected' : '' }} value="2">{{ get_settings('premium_plan_name') }}</option>
                    <option {{ $model->plan_id == 3 ? 'selected' : '' }} value="3">{{ get_settings('corporate_plan_name') }}</option>
                </select>
            </div>

            <div class="col-md-12 form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ $model->name }}">
            </div>

            <div class="col-md-6 form-group">
                <label for="checked">Is Checked <span class="text-danger">*</span></label>
                <select name="checked" id="checked" class="form-control" required>
                    <option {{ $model->checked == 1 ? 'selected' : '' }} value="1">Checked</option>
                    <option {{ $model->checked == 0 ? 'selected' : '' }} value="0">Unchecked</option>
                </select>
            </div>

            <div class="col-md-6 form-group">
                <label for="status">Status <span class="text-danger">*</span></label>
                <select name="status" id="status" class="form-control" required>
                    <option {{ $model->status == 1 ? 'selected' : '' }} value="1">Active</option>
                    <option {{ $model->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
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