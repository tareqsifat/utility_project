<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/all.css">
    </head>
    <body>
        @include('include.flash')
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark" >
                <div class="container">
                    <a href="{{ URL('/') }}" class="navbar-brand">{{ str_replace( '_',' ',  env('APP_NAME')) }}</a>

                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link">Home</a></li>
                        <li><a href="{{ route('website_about') }}" class="nav-link">About</a></li>
                        <li><a href="{{ route('website_services') }}" class="nav-link">Services</a></li>
                    </ul>
                    @auth()
                        <ul class="navbar-nav">
                            <li><a href="" class="nav-link">{{ Auth::user()->name }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();  confirm('Sure! You want to Logout!!') && document.getElementById('logout-form').submit();">
                                    <div class="menu-title">logout</div>
                                </a>
                            </li>
                        </ul>
                    @endauth
                    @guest
                        <ul class="navbar-nav">
                            <li><a href="{{ route('register') }}" class="nav-link">SignUp</a></li>
                            <li><a href="{{ route('technician.create') }}" class="nav-link">Join Our Tecnical Team</a></li>
                            <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        </ul>
                    @endguest
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="py-5">
            <div class="container">
                <hr>
                <h5>&copy Home Utility Services Since 2022</h5>
            </div>
        </footer>
        <script src="{{ asset('contents/website') }}/js/bootstrap.bundle.js"></script>
        
    </body>
</html>