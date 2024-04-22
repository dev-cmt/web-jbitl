<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{asset('public/images')}}/favicon-300x300.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/custom.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">

    @yield('style')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page">
        @include('frontend.layouts.partial.header')
    
        @if (Route::currentRouteName() == '/')
            @include('frontend.layouts.partial.slider')
        @else
            @include('frontend.layouts.partial.banner')
        @endif
    
        @yield('content')
        @include('frontend.layouts.partial.footer')
    </div>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('public/frontend')}}/js/core.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/script.js"></script>

    @yield('script')
</body>
</html>
