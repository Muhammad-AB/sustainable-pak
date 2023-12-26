All Business categories

<h1>All Categories</h1>

@if($categories->isEmpty())
<p>No categories found.</p>
@else
<ul>
    @foreach($categories as $category)
    <li>
        <strong>{{ $category->name }}</strong>
        <!-- <p>{{ $category->description }}</p> -->
        <!-- Add more fields as needed -->

        {{-- Additional category details --}}
    </li>
    @endforeach
</ul>
@endif