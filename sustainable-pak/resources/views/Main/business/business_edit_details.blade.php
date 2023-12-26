@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="" style="text-align: center;">Edit Details</h2>
            </div>
            <div class="dashboard-body">
                <h2>{{ $business->user->name ?? '' }}</h2>
                <form action="{{ route('business.saveDetails') }}" method="post">
                    @csrf

                    <!-- <label for="name">Business Name:</label>
                    <input type="text" id="name" name="name" value="{{ $business->user->name ?? '' }}" required> -->

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required>{{ $business->description ?? '' }}</textarea>

                    <label for="category">Category:</label>
                    <!-- <select name="category">
                        <option value="Zero Waste" {{ $business->category->name == 'Zero Waste' ? 'selected' : '' }}>Zero Waste</option>
                        <option value="Sustainable Energy" {{ $business->category->name == 'Sustainable Energy' ? 'selected' : '' }}>Sustainable Energy</option>
                        <option value="Sustainable Clothing" {{ $business->category->name == 'Sustainable Clothing' ? 'selected' : '' }}>Sustainable Clothing</option>
                        <option value="Other" {{ $business->category->name == 'Other' ? 'selected' : '' }}>Other</option>
                    </select> -->
                    <select name="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $business->category->name == $category ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>


                    <label for="main_link">Main Link:</label>
                    <input type="text" id="main_link" name="main_link" value="{{ $business->main_link ?? '' }}" required>

                    <label for="website">Website:</label>
                    <input type="text" id="website" name="website" value="{{ $business->web_link ?? '' }}">

                    <label for="facebook">Facebook:</label>
                    <input type="text" id="facebook" name="facebook" value="{{ $business->fb_link ?? '' }}">

                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram" value="{{ $business->insta_link ?? '' }}">

                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" id="linkedin" name="linkedin" value="{{ $business->lin_link ?? '' }}">

                    <label for="twitter">Twitter:</label>
                    <input type="text" id="twitter" name="twitter" value="{{ $business->twitter_link ?? '' }}">

                    <label for="product1">Product 1:</label>
                    <input type="text" id="product1" name="product1" value="{{ $business->product1 ?? '' }}">



                    <label for="product2">Product 2:</label>
                    <input type="text" id="product2" name="product2" value="{{ $business->product2 ?? '' }}">



                    <label for="product3">Product 3:</label>
                    <input type="text" id="product3" name="product3" value="{{ $business->product3 ?? '' }}">

                    <!-- <label for="product3_link">Product 3 Link:</label>
                    <input type="text" id="product3_link" name="product3_link" value="{{ $business->product3_link ?? '' }}"> -->

                    <button class="button" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection