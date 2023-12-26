@extends('master_view')

@section('section')

<div class="about-container">
    <h2>About Us</h2>

    <div class="about-content-container">
        @foreach($aboutContents as $content)
            <div class="about-content">
                <h3>{{ $content->section_title }}</h3>
                <p>{{ $content->content }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
