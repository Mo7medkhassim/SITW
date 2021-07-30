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
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

@endsection

@section('content')

<section class="content">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('post.store') }}">
            @csrf
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" data-select2-id="38">
                                    <label>Category</label>
                                    <select name="categories[]" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select Category" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" data-select2-id="75">
                                    <label>Tags</label>
                                    <div class="select2-purple" data-select2-id="65">
                                        <select name="tags[]" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select Tag" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                        @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
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
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" name="status" class="form-check-input" id="statuscheck">
                            <label class="form-check-label" for="exampleCheck1">Publish</label>
                        </div>
                    </div>
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

<!-- Select2 -->
<script src="{{ asset('dashboard/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

    })
</script>
@endsection

@endsection()