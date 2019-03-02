<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran</title>

    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/fonts/beyond_the_mountains-webfont.css')}}">

    <!-- Stylesheets -->
    <link href="{{asset('front/plugin-frameworks/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/plugin-frameworks/swiper.css')}}" rel="stylesheet">
    <link href="{{ asset('front/fonts/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('front/common/styles.css')}}" rel="stylesheet">
</head>
<body>
        @include('front/header') 
        @yield('content')
        @include('front/footer')

        <script src="{{asset('front/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('front/plugin-frameworks/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/plugin-frameworks/swiper.js')}}"></script>
        <script src="{{asset('front/common/scripts.js')}}"></script>
</body>
</html>