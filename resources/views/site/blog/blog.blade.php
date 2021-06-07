@extends('site.blog.layouts.app')

@section('main-section')
 <!-- Responsive navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="posts-grid">
                <div class="grid-post-item">
                    <div class="grid-post-title">Post 1</div>
                    <div class="grid-post-excerpt">Some Random Text</div>
                    <div class="grid-post-meta">Mohammed - 20 june 2021</div>
                </div>

                <div class="grid-post-item">
                    <div class="grid-post-title">Post 1</div>
                    <div class="grid-post-excerpt">Some Random Text</div>
                    <div class="grid-post-meta">Mohammed - 20 june 2021</div>
                </div>

                <div class="grid-post-item">
                    <div class="grid-post-title">Post 1</div>
                    <div class="grid-post-excerpt">Some Random Text</div>
                    <div class="grid-post-meta">Mohammed - 20 june 2021</div>
                </div>

                <div class="grid-post-item">
                    <div class="grid-post-title">Post 1</div>
                    <div class="grid-post-excerpt">Some Random Text</div>
                    <div class="grid-post-meta">Mohammed - 20 june 2021</div>
                </div>

              
            </div>
        </div>
        @endsection