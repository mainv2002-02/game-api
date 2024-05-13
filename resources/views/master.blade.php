<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="icon" type="image/x-icon" href="{{url('assets/img/favicon.ico')}}">
    {{--CSRF Token--}}
    <input type="hidden" name="_token" value="{{ app('request')->session()->get('_token') }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{--Styles css common--}}
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Optional: Include Bootstrap JS and Popper.js for Bootstrap's JavaScript components -->

    <link rel="stylesheet" href="{{ url('assets/css/app.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css?v=1.1') }}">
    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>
<body>

    @yield('content')
    {{--Scripts js common--}}
    <script src="//code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js" defer></script>
    <script src="{{ url('assets/js/jquery.typer.js?v=1.0') }}"></script>
    <script src="{{ url('assets/js/app.js?v=1.0') }}"></script>
    {{--Scripts link to file or js custom--}}
    @yield('scripts')
</body>
</html>
