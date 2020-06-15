<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="EFtS0B47HxN7Z3Flkh5fbWHYsw5PR8HYSOL9f6ig">
    <meta name="base_url" content="{{ url('') }}">
    <title>ImkersLeiden - @yield('title')</title>

    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/bulma.css') }}">

    <script src="{{ url('js/app.js') }}"></script>

    <style>
        body {
            padding: 0 0;
            margin: 0 0;
        }
    </style>
    @yield('style')
 </head>

<body>
@include('include.navbar')
<div class="columns" id="app">
    @include('include.sidebar')
    <div class="column is-10" id="page-content">
        <div class="content-header">
            <h4 class="title is-4">@yield('title')</h4>
        </div>

        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@yield('scripts')
</body>

</html>
