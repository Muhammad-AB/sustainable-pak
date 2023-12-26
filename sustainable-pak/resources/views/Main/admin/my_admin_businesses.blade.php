@extends('master_view') <!-- Assuming you have a layout file, adjust as needed -->

@section('section')
    <h1 style="text-align: center;">All Businesses</h1>

    <div class="row" style="margin: 20px;">
        @forelse($businesses as $business)
            <div class="col-md-4 mb-3">
                <div class="card" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.5rem; font-weight: bold;">{{ $business->user->name }}</h5>
                        <p class="card-text" style="color: #555;">{{ $business->description }}</p>

                        <!-- Remove Button -->
                        <form action="{{-- route('admin.remove', $business->id) --}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="width: 100%;">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>No businesses found.</p>
        @endforelse
    </div>
@endsection
