@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <p>Sign Up as a Business</p>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Business Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">

                    <label for="category">Choose a Category:</label>
                    <select name="category" id="category">
                        <option value="zero_waste">Zero Waste</option>
                        <option value="sustainable_energy">Sustainable Energy</option>
                        <option value="sustainable_clothing">Sustainable Clothing</option>
                        <option value="other">Other</option>
                    </select>

                    <input type="text" name="details" placeholder="Description/Product Details">
                    <input type="submit" value="Sign Up">
                </form>
            </div>

            <div class="sign-up-text">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('user.signup') }}">Sign up as a User</a>
            </div>
        </div>
    </div>

</body>

@endsection
