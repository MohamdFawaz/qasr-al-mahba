<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
<div id="app">
    @include('admin.layouts.sidemenu')
    @yield('content')
</div>
<script src="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script src="{{asset('js/main.js')}}"></script>
@yield('js')
</body>

</html>
