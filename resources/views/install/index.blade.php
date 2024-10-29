@extends('install.layout', ['title' => 'Install'])

@section('content')
<div class="auth-box login-box">
    <div class="row no-gutters align-items-center justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="auth-box-right">
                <div class="card">
                    <div class="card-body">
                        <h4 class="error-subtitle mb-4">Terms And Condition</h4>
                        <form action="{{ route('install') }}" class="form-validate-jquery" id="install_form" method="POST">
                            <fieldset class="mb-3">
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group pt-2">
                                                <label class="form-check-label">
                                                    <input type="hidden" name="step_0" value="step_0">
                                                    <input type="checkbox" name="terms" id="terms" class="form-input-styled" data-fouc data-parsley-errors-container="#terms_error">
                                                    I accpet terms & Condition
                                                </label>
                                                <span id="terms_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                        <button type="submit" class="btn btn-primary ml-3l" id="submit" data-url="{{ route('install.server') }}" style="width: 100%;" >Submit</button>

                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
