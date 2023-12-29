@extends('master_view')

@section('section')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

                <form action="{{ route('admin.deleteBlog', ['id' => $blog->id]) }}" method="post">
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
<div style="margin-right: 20px; margin-left: 20px; text-align: center;">
    {{ $blogs->links('pagination::bootstrap-5') }}
</div>

@endsection