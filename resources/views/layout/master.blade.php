<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" /> --}}
    <link rel="stylesheet" href="./css/vendor.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/@yield('file').css">
    <title>@yield('title')</title>


</head>

</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
        @include('layout.header')
        @show
        @yield('content')
        @section('footer')
        @include('layout.footer')
        @show
    </div>
</body>
<script rel="preload" as="script" src="{{url('js/app.js')}}" async></script>
</html>
