<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        #app {
            min-height: 100vh;
        }
    </style>
    @yield('style')
 </head>

<body>
    @include('include.navbar')
    <div class="columns is-" id="app">
        @include('include.sidebar')
        <div class="column is-10" id="page-content">
            <div class="content-header">
                <div class="hero">
                    <div class="hero-body has-background-warning">
                        <h1 class="title">@yield('title')</h1>
                    </div>
                </div>
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
