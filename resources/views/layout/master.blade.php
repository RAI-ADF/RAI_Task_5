<!DOCTYPE html>
<html lang="id">
<head>
    <title>Go-Laundry</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" media="screen">
    @yield('stylesheet')
</head>
<body background="{{ asset('images/bg.jpg') }}">
@yield('content')

</body>

<script src="{{asset('js/all.js')}}"></script>
@yield('script')
</html>
