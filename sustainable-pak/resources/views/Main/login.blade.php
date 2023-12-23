@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <p>Enter Your Credentials</p>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Login">
                </form>
            </div>

            <div class="sign-up-text">
                <p>Don't have an account?</p>
                <!-- <a href="{{ url('Signup/user-signup') }}">Sign up as a User</a> -->
                <a href="{{ route('business.signup') }}">Sign up as a Business</a>
            </div>
        </div>
    </div>

</body>

@endsection
