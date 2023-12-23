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
        <a href="{{ url('home') }}">
            <div class="logo-name">
                <img src="{{ asset('images/logo.png') }}" alt="SustainablePAK logo">
                <h1>SustainablePAK</h1>
            </div>
        </a>

        <nav>
            <a href="{{ url('home') }}">Home</a>
            <a href="">Sustainable Businesses</a>
            <a href="">Blog</a>
            <!-- <a href="{{ url('resources.html') }}">Resources</a> -->
            <a href="">About</a>
            
            @if(auth()->check())
                <a href="">Dashboard</a> <!-- user signed in -->
            @else
                <a href="{{ url('login') }}">Login/Sign up</a> <!-- user not signed in -->
            @endif
        </nav>

        <div id="menu-btn">&#9776;</div>
    </header>

    @yield('section')

    <footer>
     
        <div class="footer">
            
            <div class="footer-links">
                <div class="footer-links-text">
                    <a href="{{ url('home') }}">Home</a>
                    <a href="">Sustainable Businesses</a>
                    <a href="">Blog</a>
                    <!-- <a href="">Resources</a> -->
                    <a href="">About</a>
                    <a href="{{ url('login') }}">Login/Sign up</a>
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
