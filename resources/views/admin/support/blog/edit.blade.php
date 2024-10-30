@extends('admin.layouts.app', ['title' => 'Update Knowledge Base', 'modal' => 'md'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Update Knowledge Base</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.knowledge-base.index') }}">
                                Knowledge Base
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Knowledge Base</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                    <a href="{{ route('admin.knowledge-base.index') }}" class="btn btn-success">
                        Back
                    </a>
                </div>                        
            </div>
        </div>          
    </div>

    <div class="contentbar">                
        <form enctype="multipart/form-data" action="{{ route('admin.knowledge-base.update', $model->id) }}" method="POST" class="content_form">
            @method('PATCH')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Update Knowledge Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required value="{{ $model->name }}">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="slug">Slug <span class="text-danger">*</span></label>
                                    <input type="text" name="slug" id="slug" class="form-control" required value="{{ $model->slug }}">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="tag">Tag <span class="text-danger">*</span></label>
                                    <input type="text" name="tag" id="tag" class="form-control" required value="{{ $model->tag }}">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="thumb_image">Thumbnail Image </label>
                                    <input type="file" name="thumb_image" id="thumb_image" class="form-control dropify" data-default-file="{{ $model->thumb_image ? asset($model->thumb_image) : asset('assets/images/b5.jpg') }}">
                                    <small class="text-danger">Image Size will be 400 X 250 px</small>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="main_image">Main Image </label>
                                    <input type="file" name="main_image" id="main_image" class="form-control dropify" data-default-file="{{ $model->main_image ? asset($model->main_image) : asset('assets/images/b1.jpg') }}">
                                    <small class="text-danger">Image Size will be 1000 X 650 px</small>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="short_details">Short Details</label>
                                    <textarea name="short_details" id="short_details" cols="30" rows="3" class="form-control">{{ $model->short_details }}</textarea>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="details">Details</label>
                                    <textarea name="details" id="details" cols="30" rows="3" class="form-control">{{ $model->details }}</textarea>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="site_title">Site Title <span class="text-danger">*</span></label>
                                    <input type="text" name="site_title" id="site_title" class="form-control" required value="{{ $model->site_title }}">
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="meta_title">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" required value="{{ $model->meta_title }}">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <textarea name="meta_keyword" id="meta_keyword" cols="30" rows="3" class="form-control">{{ $model->meta_keyword }}</textarea>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" cols="30" rows="3" class="form-control">{{ $model->meta_description }}</textarea>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>    
    <script>
        $('.dropify').dropify();

        _formValidation();

        let _initCkEditor = function(editorName, startupFocus = false, editorHeight = false) {
            CKEDITOR.replace(editorName, {
                filebrowserUploadMethod: 'form',
                height: editorHeight ? editorHeight : '',
                startupFocus: startupFocus == 1 ? true : false,
                removePlugins: 'exportpdf',
            });
        }

        $(document).on('keyup', '#name', function() {
            let name = $(this).val();

            $.ajax({
                url: "{{ route('admin.check.slug') }}",
                type: 'GET',
                data: { name: name },
                success: function(response) {
                    $('#slug').val(response.slug);
                }
            });
        });

        _initCkEditor('details');
    </script>
    <script>
        
    </script>
@endpush