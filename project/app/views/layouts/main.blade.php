<!DOCTYPE html>
<html>
<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>Dasboard </title>
  <meta name="keywords" content="" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" value="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/theme/assets/fonts/glyphicons-pro/glyphicons-pro.css')}}">
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/theme/assets/skin/default_skin/css/theme.css')}}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/theme/assets/admin-tools/admin-forms/css/admin-forms.min.css')}}">
  <!--  select2 css -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/lib/select2/select2.min.css')}}">
  <!--  select2 css -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/theme/vendor/plugins/pnotify/pnotify.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{URL::to('favicon.ico')}}">
  <style type="text/css">
  label.error{
    margin-top:10px;
    color:#C10D0D;
  }
  .alert{
    margin:0px!important;
    position: fixed;
    z-index: 9999;
    width:100%;
    left:0px;
    top:0px;
    text-align: center;
    border-radius: 0px;
    min-height: 60px;
    background: transparent\8;
  }
  </style>
</head>
<body class="dashboard-page sb-l-o sb-r-c onload-check">
    <div id="main">
    @include("layouts.header")
    @include("layouts.menu")


    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
    @yield("content")
    </section>
    <!-- End: Content-Wrapper -->

    <!-- End: Right Sidebar -->
    @include("layouts.footer")
	@if ($alert = Session::get('message'))
	   @include('layouts/flash/flash', array('message' => $alert))
	@endif
    </div>
</body>
</html>
