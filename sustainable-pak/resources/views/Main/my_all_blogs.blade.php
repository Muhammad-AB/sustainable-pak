All Blog List here

<h1>All Blogs</h1>

    @if($blogs->isEmpty())
        <p>No blogs found.</p>
    @else
        <ul>
            @foreach($blogs as $blog)
                <li>
                    <!-- {{$content = $blog->content}}
                    {{$content = $content.substr(0,4)}} -->

                    <strong>{{ $blog->name }}</strong>
                    <p>{{ $content }}</p>
                    <!-- Add more fields as needed -->

                    {{-- Additional blog details --}}
                </li>
            @endforeach
        </ul>
    @endif
