<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCollect @yield('title')</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}"/>
    @yield('css')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Home</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/activity/all')}}">Title</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/user/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ url('/user/login') }}">Login</a></li>
                    <li><a href="{{ url('/user/register') }}">Sign Up</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')

@yield('footer')
<script src="{{elixir('js/all.js')}}"></script>
<script>
    $( document ).ready(function() {
        console.log( "ready!" );
    });
</script>
@yield('page_js')
</body>
</html>
