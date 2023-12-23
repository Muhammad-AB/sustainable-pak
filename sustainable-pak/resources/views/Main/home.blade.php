@extends('master_view')

@section('section')

<div class="intro">
    <div class="intro-text">
        <h3>Our Vision</h3>
        <p>{{ $about->vision ?? 'No vision available' }}</p>
    </div>
</div>

<div class="sustainable-business-container">

    <h2>Sustainable Businesses</h2>
    <div class="view-all"><a href="">View all categories &rarr;</a></div>

    <div class="element-container">

        <div class="individual-element-container">
            <a href=""><img
                    src="{{ asset('images/zero-waste.png') }}" alt="Zero-Waste"></a>
            <a href="">Zero-Waste</a>
        </div>

        <div class="individual-element-container">
            <a href=""><img
                    src="{{ asset('images/sustainable-energy.png') }}" alt="Sustainable Energy"></a>
            <a href="">Sustainable Energy</a>
        </div>

        <div class="individual-element-container">
            <a href=""><img
                    src="{{ asset('images/sustainable-clothing.png') }}" alt="Sustainable Clothing"></a>
            <a href="">Sustainable Clothing</a>
        </div>

    </div>
</div>

<hr />

<div class="blog-container">

    <h2>Blog</h2>
    <div class="view-all"><a href="{{ url('blog.html') }}">View all blogs &rarr;</a></div>

    <div class="element-container">

        <div class="individual-element-container">
            <a href=""><img src="{{ asset('images/blog0.png') }}"
                    alt="Image to promote sustainability"></a>
            <a href="">Why Support Sustainable</br>Businesses</a>
        </div>

        <div class="individual-element-container">
            <a href=""><img src="{{ asset('images/blog1.png') }}"
                    alt="Image to sustainable lifestyle"></a>
            <a href="">How to Live a More<br />Sustainable Lifestyle</a>
        </div>

        <div class="individual-element-container">
            <a href=""><img src="{{ asset('images/blog2.png') }}"
                    alt="Image of Food"></a>
            <a href="">How to Reduce<br />Food Waste</a>
        </div>

    </div>
</div>

@endsection
