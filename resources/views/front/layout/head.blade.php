<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    @yield('title')
    <!-- Fav Icons -->
    <link rel="shortcut icon" href="{{asset('images/header_icon.png')}}" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/menu.css?v=1.5')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/spacing.min.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css?v=1.1')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front/css/style.min.css?v=1.18')}}">
    @yield('css')
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>
{{--<div class="preloader"></div>--}}
<!-- Preloader -->
