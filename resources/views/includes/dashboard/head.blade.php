<!doctype html>

<html {{ LaravelLocalization::getCurrentLocaleDirection() }}>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@section('head-links')
    @show
@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.rtl.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href=" {{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/custom-style.css') }}">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>
    @else
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.min.css')}}">

    <style>
        .navbar .m_dir {

            margin-left: auto !important;
        }
    </style>
    @endif

<!-- coustom style css  -->
<link rel="stylesheet" href="{{asset('dashboard/dist/css/common.css')}}">

