<!doctype html>
<html lang="{{lang()}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('web_files/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('web_files/css/all.min.css')}}">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{asset('web_files/css/owl.carousel.min.css')}}">
    <!--Animate-->
    <link rel="stylesheet" href="{{asset('web_files/css/animate.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('web_files/css/style.css')}}">

    @if(lang() == 'en')
        <link rel="stylesheet" href="{{asset('web_files/css/en.css')}}">
    @endif

    <title>{{ $setting[lang() . '_name'] ?? "" }}</title>
</head>
<body>
<div class="above-all">

    @include('web.layouts._header')

    @yield('content')

    @include('web.layouts._footer')


</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('web_files/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('web_files/js/popper.min.js')}}"></script>
<script src="{{asset('web_files/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web_files/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web_files/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>


<!--Mein-->
<script src="{{asset('web_files/js/script.js')}}"></script>
</body>
</html>
