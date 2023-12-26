Business Lists

<h1>Businesses in Specific Category</h1>

@if($businesses->isEmpty())
<p>No businesses found.</p>
@else
<ul>
    @foreach($businesses as $business)
    <li>
        <h3>{{ $business->user->name }}</h3>
        <p>Detail: {{ $business->description }}</p>
        <p>Category: {{ $business->category->name }}</p>
        <!-- Add more fields as needed -->

        {{-- Additional business details --}}
    </li>
    @endforeach
</ul>
@endif