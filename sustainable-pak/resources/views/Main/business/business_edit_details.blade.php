
@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="">Edit Details</h2>
            </div>
            <div class="dashboard-body">
                <form action="" method="post">
                    @csrf

                    <label for="name">Business Name:</label>
                    <input type="text" id="name" name="name" value="{{ $business->name ?? '' }}" required>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required>{{ $business->description ?? '' }}</textarea>

                    <label for="category">Category:</label>
                    <select name="category">
                        <option value="Zero Waste" {{ $business->category == 'Zero Waste' ? 'selected' : '' }}>Zero Waste</option>
                        <option value="Sustainable Energy" {{ $business->category == 'Sustainable Energy' ? 'selected' : '' }}>Sustainable Energy</option>
                        <option value="Sustainable Clothing" {{ $business->category == 'Sustainable Clothing' ? 'selected' : '' }}>Sustainable Clothing</option>
                        <option value="Other" {{ $business->category == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>


                    <label for="main_link">Main Link:</label>
                    <input type="text" id="main_link" name="main_link" value="{{ $business->main_link ?? '' }}" required>

                    <label for="website">Website:</label>
                    <input type="text" id="website" name="website" value="{{ $business->website ?? '' }}">

                    <label for="facebook">Facebook:</label>
                    <input type="text" id="facebook" name="facebook" value="{{ $business->facebook ?? '' }}">

                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram" value="{{ $business->instagram ?? '' }}">

                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" id="linkedin" name="linkedin" value="{{ $business->linkedin ?? '' }}">

                    <label for="twitter">Twitter:</label>
                    <input type="text" id="twitter" name="twitter" value="{{ $business->twitter ?? '' }}">

                    <label for="product1">Product 1:</label>
                    <input type="text" id="product1" name="product1" value="{{ $business->product1 ?? '' }}">

                    <label for="product1_link">Product 1 Link:</label>
                    <input type="text" id="product1_link" name="product1_link" value="{{ $business->product1_link ?? '' }}">

                    <label for="product2">Product 2:</label>
                    <input type="text" id="product2" name="product2" value="{{ $business->product2 ?? '' }}">

                    <label for="product2_link">Product 2 Link:</label>
                    <input type="text" id="product2_link" name="product2_link" value="{{ $business->product2_link ?? '' }}">

                    <label for="product3">Product 3:</label>
                    <input type="text" id="product3" name="product3" value="{{ $business->product3 ?? '' }}">

                    <label for="product3_link">Product 3 Link:</label>
                    <input type="text" id="product3_link" name="product3_link" value="{{ $business->product3_link ?? '' }}">

                    <button class="button" type="submit">Edit Details</button>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection

