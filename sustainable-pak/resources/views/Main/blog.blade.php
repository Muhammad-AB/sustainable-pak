@extends('master_view')

@section('section')

<main>
    <div class="blog-content">
        <h2>{{ $blog->name ?? 'Blog Title' }}</h2>

        @if(isset($blog->content))
        {!! $blog->content !!}
        @else
        <p>No content available for this blog.</p>
        @endif

        <p class="blog-date">Created at: {{ $blog->updated_at->format('F j, Y') }}</p>
    </div>
</main>


@if(auth()->user()->role == 'A')
<div class="admin-actions">
    <form action="{{ route('admin.addBlog', ['id' => $blog->id]) }}" method="post">
        @csrf
        <button type="submit">Edit Blog</button>
    </form>

    <form action="{{ route('admin.deleteBlog', ['id' => $blog->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Blog</button>
    </form>
</div>
@endif

<hr />

<div class="blog-suggestion-container">
    <h3>Consider checking these out next:</h3>


    <div class="element-container">
        @foreach($blogSuggestions->slice(0, 3) as $blog)
        <div class="individual-element-container">
            <a href="{{ route('blog', ['id' => $blog->id]) }}">
                <img src="https://www.sympatex.com/wp-content/uploads/2022/06/top10-blogs-nachhaltigkeit.jpg" alt="{{ $blog->name }}">
            </a>
            <a href="{{ route('blog', ['id' => $blog->id]) }}">
                {{ $blog->name }}
            </a>
        </div>
        @endforeach

    </div>
</div>

@endsection