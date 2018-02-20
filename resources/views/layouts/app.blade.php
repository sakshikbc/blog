<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--     <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')"> --}}

    @section('meta_tags')
    @if($obj)
        <title>{{$obj->title}} - {{env('SITE_URL', 'Site Name')}}</title>
        <meta name='description' itemprop='description' content='{{$obj->description}}' />
        {{-- <?php $tags = implode(',', $obj->tags); ?> --}}
        <meta name='keywords' content='{{$obj->keywords}}' />
        <meta name="description" content='{{$obj->description}}'>

        <meta property='article:published_time' content='{{$obj->created_at}}' />
        {{-- <meta property='article:section' content='event' /> --}}

        <meta property="og:description" content="{{$obj->description}}" />
        <meta property="og:title" content="{{$obj->title}}" />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="article" />
        <meta property="og:locale" content="en-us" />
        <meta property="og:locale:alternate" content="en-us" />
        <meta property="og:site_name" content="{{env('SITE_URL', 'Site Name')}}" />
        @foreach($obj->images as $image)
            <meta property="og:image" content="{{$image->url}}" />
        $endforeach
        <meta property="og:image:url" content="{{obj->image}}" />
        <meta property="og:image:size" content="300" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$obj->title}}" />
        <meta name="twitter:site" content="@BrnBhaskar" />
    @endif
@endsection





    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
