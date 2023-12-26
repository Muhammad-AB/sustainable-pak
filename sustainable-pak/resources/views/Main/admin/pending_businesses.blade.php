@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="">Pending Business Requests</h2>
            </div>
            <div class="dashboard-body">

                @foreach($requests as $request)
                    <div class="request-card">
                        <div class="request-card-body">
                            <h2 class="request-card-title">{{ $request->name }}</h2>
                            
                            <p class="request-card-text"><strong>Email:</strong></p>
                            <p>{{ $request->email }}</p>

                            <p class="request-card-text"><strong>Description:</strong></p>
                            <p>{{ $request->description }}</p>
                            
                            <p class="request-card-text"><strong>Category:</strong></p>
                            <p>{{ $request->category->name }}</p>
                            
                            <p class="request-card-text"><strong>Main Link:</strong></p>
                            <p><a href="{{ $request->main_link }}">{{ $request->main_link }}</a></p>
                            
                            <div class="request-card-buttons">
                                <form action="{{ route('admin.request.approve', ['id' => $request->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    {{--@method('PATCH')--}}
                                    <button class="button approve-button" data-business-id="{{ $request->id }}">Approve</button>
                                </form>

                                <form action="{{ route('admin.request.reject', ['id' => $request->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button deny-button" data-business-id="{{ $request->id }}">Reject</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</body>

@endsection
