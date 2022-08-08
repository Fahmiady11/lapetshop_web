<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('style/assets/scss/main.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset()}}style/owl/owl.theme.default.min.css"> --}}
    <link rel="stylesheet" href="{{asset('style/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/stylelogin.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('style/node_modules/@fortawesome/css/all.min.css')}}">

    <title>Halaman {{$title}}</title>
</head>

<body class="bg-white">
    <!-- nav -->
    @if ($layout == 'main' )
        <x-navbar></x-navbar>
    @endif

    <!---main--->
        {{ $slot }}
    
    <!-- footer -->
    @if ($layout == 'main')
        <x-footbar></x-footbar>
    @endif
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="{{asset('style/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
</body>

</html>