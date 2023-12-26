@extends('master_view') <!-- Assuming you have a layout file, adjust as needed -->

@section('section')
    <h1>Pending Business Requests</h1>

    @if($requests->isEmpty())
        <p>No pending business requests at the moment.</p>
    @else
        <ul>
            @foreach($requests as $request)
                <li>
                    <strong>Business Name:</strong> {{ $request->name }} <br>
                    <strong>Description:</strong> {{ $request->description }} <br>
                    <!-- Add more details as needed -->

                    <!-- Approve Button -->
                    <form action="{{-- route('admin.approve', $request->id) --}}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Approve</button>
                    </form>

                    <!-- Deny Button -->
                    <form action="{{-- route('admin.deny', $request->id) --}}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Deny</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
