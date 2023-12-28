@extends('master_view')

@section('section')
<main>
    <div class="about-container">
        <h2>About Us</h2>
        <h2>About Us</h2>

        <h3>{{ $about->name }}</h3>
        <p>{{ $about->content }}</p>
        <div class="about-content-container">
            <h3>{{ $about->name }}</h3>
            <!-- <h2>About Us</h2> -->

            @if($about)
            <div class="about-content">
                <!-- These are not showing bcz of styling issue in style.css-->
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
</main>
@endsection