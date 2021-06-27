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

<section class="content">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Tag</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('tag.update', $tag->id) }}">
            @csrf 
            {{ method_field('PUT') }}
            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">
                        <div class="">
                            <div class="form-group">
                                <label for="tagtitle">Tag Name</label>
                                <input type="text" name="title" class="form-control" id="tagtitle" placeholder="Enter title" value="{{$tag->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tagslug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="tagslug" placeholder="Enter slug" value="{{$tag->slug}}">
                                </div>
                            </div>
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

<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
</script>
@endsection

@endsection()