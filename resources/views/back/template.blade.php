<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <link media="all" type="text/css" rel="stylesheet" href='{{url('css/app.css')}}'>
    <link media="screen,projection" type="text/css" rel="stylesheet" href="{{url('assets/css/')}}">

    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="page" content="{!! Request::segment(1) !!}"/>
    @yield('title')
</head>
<body>
<header>
    @include('back.components.navbar')
    @include('back.components.side')
</header>
<main>
    <div class="col s12 m12 l10">
        @yield('main')
    </div>
</main>

@include('back.components.footer')


<script src="{{url('assets/js/jquery-2.1.4.min.js')}}"></script>


<script src="{{url('assets/js/main.js')}}"></script>

<link  href="/path/to/cropper.css" rel="stylesheet">
<script src="/path/to/cropper.js"></script>
@yield('script')
</body>
</html>