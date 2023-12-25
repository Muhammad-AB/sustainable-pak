@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <h2 style="text-align: center;">User Sign Up</h2>
                <form action="{{ route('register.user') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Username" required>
                    @error('name')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="email" name="email" placeholder="Email" required>
                    @error('email')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="password" name="password" placeholder="Password" required>
                    @error('password')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <input type="submit" value="Sign Up">
                </form>
            </div>

            <div class="sign-up-text">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register.business') }}">Sign up as a Business</a>
            </div>
        </div>
    </div>

</body>

@endsection