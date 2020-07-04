<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>

    <title>Laravel</title>
</head>
<body>
@php
    date_default_timezone_set('Europe/Paris');
@endphp
@include('layouts/header')
<div class="ui container">
    @yield('content')
</div>
</body>
</html>
