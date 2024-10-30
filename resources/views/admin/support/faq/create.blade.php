<div class="modal-header">
    <h5 class="modal-title">Create new</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form action="{{ route("admin.support-faq.store") }}" method="POST" class="ajax-form">
        <div class="row">

            <div class="col-md-12 form-group">
                <label for="question">Question <span class="text-danger">*</span></label>
                <input type="text" name="question" id="question" class="form-control" required>
            </div>

            <div class="col-md-12 form-group">
                <label for="answer">Answer <span class="text-danger">*</span></label>
                <textarea name="answer" id="answer" cols="30" rows="3" class="form-control"></textarea>
            </div>

            <div class="col-md-12 form-group">
                <label for="status">Status <span class="text-danger">*</span></label>
                <select name="status" id="status" class="form-control" required>
                    <option selected value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            
            <div class="col-md-12 mt-3 text-end">
                <button class="btn btn-success" type="submit" id="submit">
                    <i class="bi bi-send"></i>
                    Create
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