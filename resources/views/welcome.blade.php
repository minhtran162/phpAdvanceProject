<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px">
        <div class="container-fluid">
            <!--header logo-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Store</a>
            </div>

            <!--  -->
            <ul class="nav navbar-nav">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>

                <!-- <li class="active"><a href="#">Home</a></li> -->
                <li><a href="">Page 2</a></li>
                <li><a href="">Hot Sale 🔥🔥🔥</a></li>
            </ul>

            <!--  -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-user"></span> Admin Panel</a></li>
            </ul>
        </div>
    </nav>

    @include('body')
</body>

</html>