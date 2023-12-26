@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card edit-blog-card">
            <div class="dashboard-header">
                @if(!empty($blog->title))
                    <h2>Edit {{ $blog->title }}</h2>
                @else
                    <h2>Add Blog</h2>
                @endif
            </div>
            <div class="dashboard-body">
                <form action="" method="post">
                    @csrf

                    <label for="blog-title">Blog Title:</label>
                    <input class="blog-title" type="text" id="blog-title" name="blog-title" value="{{ $blog->title ?? '' }}" required>

                    <label for="blog-content">Blog Content:</label>
                    <textarea class="blog-content" id="blog-content" name="blog-content" rows="50" required>{{ $blog->content ?? '' }}</textarea>

                    @if(!empty($blog->title))
                        <button class="button" type="submit">Update Blog</button>
                    @else
                        <button class="button" type="submit">Add Blog</button>
                    @endif
                </form>
            </div>
        </div>
    </div>

</body>

@endsection
