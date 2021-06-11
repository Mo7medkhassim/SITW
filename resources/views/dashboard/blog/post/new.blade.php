@extends('layouts.dashboard.app')

@section('title', 'SIT Blog')

@section('head-links')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('content')

<section class="content py-5">

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">

            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <div class="form-group">
                            <label for="posttitle">Post Title</label>
                            <input type="text" name="title" class="form-control" id="posttitle" placeholder="Enter title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postslug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="postslug" placeholder="Enter slug">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="postfeaturedimg">Post Featured Image</label>
                                <input type="file" name="image" class="form-control-file border py-1 bg-white" id="postfeaturedimg">

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Post Content
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" name="body" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


</section>
<!-- Summernote -->


@section('footer-scripts')
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
</script>
@endsection

@endsection()