@extends('master_view')

@section('section')

<main>
    <div class="blog-content">
        <h2>{{ $blog->title ?? 'Blog Title' }}</h2>

        @if(isset($blog->content))
            {!! $blog->content !!}
        @else
            <p>No content available for this blog.</p>
        @endif
    </div>
    <p>Created at: {{ $blog->time_created }}</p>
</main>

@if(auth()->user()->role == 'A')
    <div class="admin-actions">
            <button>Edit Blog</button>
            <button>Delete Blog</button>
    </div>
@endif

<hr/>

<div class="blog-suggestion-container">
    <h3>Consider checking these out next:</h3>

    <div class="element-container">
        <div class="individual-element-container">
            <a href="{{ url('blog2') }}">How to Reduce<br/>Food Waste</a>
        </div>

        <div class="individual-element-container">
            <a href="{{ url('blog3') }}">Why You Should Use<br/>Bamboo Toothbrushes</a>
        </div>
    </div>
</div>

@endsection