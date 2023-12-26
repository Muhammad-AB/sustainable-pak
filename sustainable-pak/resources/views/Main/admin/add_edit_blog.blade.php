@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card edit-blog-card">
            <div class="dashboard-header">
                @if(!empty($blog->name))
                    <h2>Edit {{ $blog->name }}</h2>
                @else
                    <h2>Add Blog</h2>
                @endif
            </div>
            <div class="dashboard-body">
                <form action="" method="post">
                    @csrf

                    <label for="blog-title">Blog Title:</label>
                    <input class="blog-title" type="text" id="name" name="name" value="{{ $blog->name ?? '' }}" required>

                    <label for="blog-content">Blog Content:</label>
                    <textarea class="blog-content" id="content" name="content" rows="50" required>{{ $blog->content ?? '' }}</textarea>

                    @if(!empty($blog->name))
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
