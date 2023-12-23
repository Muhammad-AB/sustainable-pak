@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <p>Enter Your Credentials</p>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Login">
                </form>
            </div>

            <div class="sign-up-text">
                <p>Don't have an account?</p>
                <!-- <a href="{{ url('Signup/user-signup') }}">Sign up as a User</a> -->
                <a href="{{ url('business_signup') }}">Sign up as a Business</a>
            </div>
        </div>
    </div>

</body>

@endsection
