@extends('master_view')

@section('section')

<div class="about-container">
    <h2>About Us</h2>

    <div class="about-content-container">
        <h2>About Us</h2>
        <div class="about-content-container">
            @if($about)
            <div class="about-content">
                <h3>{{ $about->name }}</h3>
                <p>{{ $about->content }}</p>
            </div>
            @else
            <div class="about-content">
                <p>To be added</p>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection