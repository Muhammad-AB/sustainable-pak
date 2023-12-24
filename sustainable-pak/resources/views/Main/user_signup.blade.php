@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <p>Sign Up as a User</p>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Sign Up">
                </form>
            </div>

            <div class="sign-up-text">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('business.signup') }}">Sign up as a Business</a>
            </div>
        </div>
    </div>

</body>

@endsection
