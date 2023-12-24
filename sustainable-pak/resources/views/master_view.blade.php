<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SustainablePAK</title>
    <link rel="icon" href="{{ asset('images/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <a href="{{ route('home') }}">
            <div class="logo-name">
                <img src="{{ asset('images/logo.png') }}" alt="SustainablePAK logo">
                <h1>SustainablePAK</h1>
            </div>
        </a>

        <nav>
            @if(auth()->check())
            @if(auth()->user()->role == 'A')
            <a href="{{ route('admin.dashboard') }}">Dashboard</a> <!-- user signed in -->
            @endif
            @if(auth()->user()->role == 'B')
            <a href="{{ route('business.dashboard') }}">Dashboard</a> <!-- user signed in -->
            @endif
            @endif
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('all.categories') }}">Businesses</a>
            <a href="{{ route('all.blogs') }}">Blog</a>
            <!-- <a href="{{ url('resources.html') }}">Resources</a> -->
            <a href="{{ route('about') }}">About</a>

            @if(auth()->check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
            @else
            <a href="{{ route('login') }}">Login</a> <!-- user not signed in -->
            @endif

        </nav>

        <div id="menu-btn">&#9776;</div>
    </header>

    @yield('section')

    <footer>

        <div class="footer">

            <div class="footer-links">
                <div class="footer-links-text">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('all.categories') }}">Sustainable Businesses</a>
                    <a href="{{ route('all.blogs') }}">Blog</a>
                    <!-- <a href="">Resources</a> -->
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('login') }}">Login/Sign up</a>
                </div>

                <div class="contact">
                    <p><b>Contact Us: </b></p>
                    <div class="contact-icons">
                        <a href=""><img src="{{ asset('images/icons/facecbook.png') }}" alt="facebook"></a>
                        <a href=""><img src="{{ asset('images/icons/instagram.png') }}" alt="instagram"></a>
                        <a href=""><img src="{{ asset('images/icons/twitter.png') }}" alt="twitter"></a>
                        <a href=""><img src="{{ asset('images/icons/whatsapp.png') }}" alt="whatsapp"></a>
                        <a href=""><img src="{{ asset('images/icons/linkedin.png') }}" alt="linkedin"></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

</body>

</html>