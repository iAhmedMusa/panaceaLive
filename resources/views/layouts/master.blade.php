<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', "Panacea Live")</title>
    @include('layouts.styles')
</head>

<body>
    <div class="page-wrapper">
        @section('section')
        @show
    </div>
</body>
</html>
@yield('script')