@extends('master_view')

@section('section')

<div class="blogs-container">
    <h2>All Blogs</h2>

    @foreach($blogs as $blog)
        <div class="blog-card">
            <h3>{{ $blog->name }}</h3>
            <p>Updated: {{ $blog->created_at->format('F j, Y') }}</p>
            <p>{{ $blog->content }}</p>
            <a href="">Read More</a>
            @if(auth()->user()->role == 'A')
                <div class="admin-actions">
                    <button>Edit Blog</button>
                    <button>Delete Blog</button>
                </div>
            @endif
        </div>
    @endforeach

</div>

@endsection
