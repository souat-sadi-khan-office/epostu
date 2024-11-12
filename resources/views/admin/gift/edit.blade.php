@extends('admin.layouts.app', ['title' => 'Update Gift Item', 'modal' => 'md'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Update Gift Item</h4>
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
                        <li class="breadcrumb-item active" aria-current="page">Update Gift Item</li>
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
        <form enctype="multipart/form-data" action="{{ route('admin.gift-item.update', $model->id) }}" method="POST" class="content_form">
            @method('PATCH')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Update Gift Item</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required value="{{ $model->name }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="photo">Photo </label>
                                    <input type="file" name="photo" id="photo" class="form-control dropify" data-default-file="{{ $model->photo ? asset($model->photo) : asset('assets/images/b1.jpg') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="quantity">Quantity <span class="text-danger">*</span></label>
                                    <input type="text" value="{{ $model->quantity }}" name="quantity" id="quantity" class="form-control" required>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option {{  $model->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                        <option {{  $model->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mx-auto">
                                    <button class="btn btn-success btn-block" type="submit" id="submit">
                                        Update
                                    </button>
                                    <button class="btn btn-warning btn-block" style="display: none;" id="submitting" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify({
            imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'webp']
        });
        
        _formValidation();
    </script>
@endpush