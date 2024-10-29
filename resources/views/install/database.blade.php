@extends('install.layout', ['title' => 'Database'])

@section('content')
<div class="auth-box login-box">
    <div class="row no-gutters align-items-center justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="auth-box-right">
                <div class="card">
                    <div class="card-body">
                        <h4 class="error-subtitle mb-4">Database Settings</h4>
                        
                        @if (\Session::has('error'))
                            <div class="alert text-left alert-danger">
                                <p>{{ \Session::get('error') }}</p>
                            </div>
                        @endif
                        
                        <form action="{{ route('install.database.post') }}" method="post" class="text-left">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Hostname:</label>
                                <input type="text" required autocomplete="off" class="form-control" value="localhost" name="hostname" id="hostname">
                            </div>
                            
                            <div class="form-group">
                                <label>Database:</label>
                                <input type="text" required autocomplete="off" class="form-control" name="database" id="database">
                            </div>
                            
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" required autocomplete="off" class="form-control" name="username" id="username">
                            </div>
                            
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" id="next-button" class="btn btn-success btn-lg btn-block font-18">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#next-button').attr('disabled', true);

            $('#hostname, #username, #database').keyup(function() {
                inputCheck();
            });
        });

        function inputCheck() {
            hostname = $('#hostname').val();
            username = $('#username').val();
            database = $('#database').val();

            if (hostname != '' && username != '' && database != '') {
                $('#next-button').attr('disabled', false);
            } else {
                $('#next-button').attr('disabled', true);
            }
        }
    </script>
@stop