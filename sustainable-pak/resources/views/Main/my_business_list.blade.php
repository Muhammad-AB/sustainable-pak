Business Lists

<h1>Businesses in Specific Category</h1>

@if($businesses->isEmpty())
<p>No businesses found.</p>
@else
<ul>
    @foreach($businesses as $business)
    <li>
        <strong>{{ $business->user->name }}</strong>
        <p>{{ $business->description }}</p>
        <!-- Add more fields as needed -->

        {{-- Additional business details --}}
    </li>
    @endforeach
</ul>
@endif