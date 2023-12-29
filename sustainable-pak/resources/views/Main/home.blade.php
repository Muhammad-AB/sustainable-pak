@extends('master_view')

@section('section')

<div class="intro">
    <div class="intro-text">
        <h3>Our Vision</h3>
        <p>"Our vision at SustainablePAK is to catalyze a green revolution in Pakistan, fostering a nation where sustainability is not just a choice but a way of life. We aspire to build a future where eco-consciousness is ingrained in every individual and business, creating a harmonious balance between progress and environmental well-being."</p>
    </div>
</div>

<div class="sustainable-business-container">

    <h2>Sustainable Businesses</h2>
    <div class="view-all"><a href="{{ route('all.categories') }}">View all categories &rarr;</a></div>

    <div class="element-container">


        @foreach($categories->slice(0, 3) as $category)
        <div class="individual-element-container">
            <a href="{{ route('business.list', ['id' => $category->id]) }}">
                <img src="{{ asset($category->img_link) }}" alt="{{ $category->name }}">
            </a>
            <a href="{{ route('business.list', ['id' => $category->id]) }}">
                {{ $category->name }}
            </a>
        </div>
        @endforeach


    </div>
</div>

<hr />

<div class="blog-container">

    <h2>Blog</h2>
    <div class="view-all"><a href="{{ route('all.blogs') }}">View all blogs &rarr;</a></div>

    <div class="element-container">

        @foreach($blogs->slice(0, 3) as $blog)
        <div class="individual-element-container">
            <a href="{{ route('blog', ['id' => $blog->id]) }}">
                <img src="{{ asset($categories[1]->img_link) }}" alt="{{ $blog->name }}">
            </a>
            <a href="{{ route('blog', ['id' => $blog->id]) }}">
                {{ $blog->name }}
            </a>
        </div>
        @endforeach

    </div>
</div>

@endsection