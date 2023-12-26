@extends('master_view')

@section('section')

<body class="background-color">

    <div class="login-container">
        <div class="login-card">
            <div class="login-form">
                <h2 style="text-align: center;">Business Sign Up</h2>
                <form action="{{ route('register.business') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Business Name" required>
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

                    <!-- <label for="category">Choose a Category:</label>
                    <select name="category" id="category" required>
                        <option value="Zero Waste">Zero Waste</option>
                        <option value="Sustainable Energy">Sustainable Energy</option>
                        <option value="Sustainable Clothing">Sustainable Clothing</option>
                        <option value="Other">Other</option>
                    </select> -->
                    
                    <label for="category">Choose a Category:</label>
                    <select name="category" id="category" required>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>

                    <input type="text" name="description" placeholder="Description/Product Details" required>
                    <input type="text" name="main_link" placeholder="Link of website/socials" required>
                    <input type="submit" value="Sign Up">
                </form>
            </div>

            <div class="sign-up-text">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register.user') }}">Sign up as a User</a>
            </div>
        </div>
    </div>

</body>

@endsection