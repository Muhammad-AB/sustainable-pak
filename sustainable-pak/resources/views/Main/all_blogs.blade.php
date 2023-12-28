@extends('master_view')

@section('section')

<div class="blogs-container">
    <h2>All Blogs</h2>

    @foreach($blogs as $blog)
    <a href="{{ route('blog', ['id' => $blog->id]) }}" class="blog-card-link">
        <div class="blog-card">
            <h3>{{ $blog->name }}</h3>
            <p>Updated: {{ $blog->updated_at->format('F j, Y') }}</p>
            <p>{{ Str::limit($blog->content, 100) }}</p>
            <p><a href="{{ route('blog', ['id' => $blog->id]) }}">Read More</a></p>

            @if(auth()->user()->role == 'A')
            <div class="admin-actions">
                <form action="{{ route('admin.addBlog', ['id' => $blog->id]) }}" method="post">
                    @csrf
                    <button type="submit">Edit Blog</button>
                </form>

                <form action="{{-- route('admin.deleteBlog', ['id' => $blog->id]) --}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete Blog</button>
                </form>
            </div>
            @endif
        </div>
    </a>
    @endforeach


</div>

@endsection