@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
            <h2 style="text-align: left;">Log In</h2>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="email" required>
                    @error('email')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </form>
            </div>

            <div class="sign-up-text">
                <p>Don't have an account?</p>
                <a href="{{ route('register.user') }}">Sign up as a User</a>
                <a href="{{ route('register.business') }}">Sign up as a Business</a>
            </div>
        </div>
    </div>

</body>

@endsection
