@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="">Dashboard</h2>
            </div>
            <div class="dashboard-body">

                @if($business->name)
                    <p class="card-text"><strong>Business Name:</strong></p>
                    <p>{{ $business->name }}</p>
                @else
                    <p class="card-text"><strong>Business Name:</strong></p>
                    <p>None</p>
                @endif

                @if($business->description)
                    <p class="card-text"><strong>Description:</strong></p>
                    <p>{{ $business->description }}</p>
                @else
                    <p class="card-text"><strong>Description:</strong></p>
                    <p>None</p>
                @endif

                @if($business->category)
                    <p class="card-text"><strong>Category:</strong></p>
                    <p>{{ $business->category }}</p>
                @else
                    <p class="card-text"><strong>Category:</strong></p>
                    <p>None</p>
                @endif

                @if($business->main_link)
                    <p class="card-text"><strong>Main Link:</strong></p>
                    <p><a href="{{ $main_link }}">{{ $business->main_link }}</a></p>
                @else
                    <p class="card-text"><strong>Main Link:</strong></p>
                    <p>None</p>
                @endif

                @if($business->website)
                    <p class="card-text"><strong>Website:</strong></p>
                    <p><a href="{{ $website }}">{{ $business->website }}</a></p>
                @else
                    <p class="card-text"><strong>Website:</strong></p>
                    <p>None</p>
                @endif

                @if($business->facebook)
                    <p class="card-text"><strong>Facebook:</strong></p>
                    <p><a href="{{ $facebook }}">{{ $business->facebook }}</a></p>
                @else
                    <p class="card-text"><strong>Facebook:</strong></p>
                    <p>None</p>
                @endif

                @if($business->instagram)
                    <p class="card-text"><strong>Instagram:</strong></p>
                    <p><a href="{{ $instagram }}">{{ $business->instagram }}</a></p>
                @else
                    <p class="card-text"><strong>Instagram:</strong></p>
                    <p>None</p>
                @endif

                @if($business->linkedin)
                    <p class="card-text"><strong>LinkedIn:</strong></p>
                    <p><a href="{{ $linkedin }}">{{ $business->linkedin }}</a></p>
                @else
                    <p class="card-text"><strong>LinkedIn:</strong></p>
                    <p>None</p>
                @endif

                @if($business->twitter)
                    <p class="card-text"><strong>Twitter:</strong></p>
                    <p><a href="{{ $twitter }}">{{ $business->twitter }}</a></p>
                @else
                    <p class="card-text"><strong>Twitter:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product1)
                    <p class="card-text"><strong>Product 1:</strong></p>
                    <p>{{ $business->product1 }}</p>
                @else
                    <p class="card-text"><strong>Product 1:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product1_link)
                    <p class="card-text"><strong>Product 1 Link:</strong></p>
                    <p><a href="{{ $business->product3_link }}">{{ $business->product1_link }}</a></p>
                @else
                    <p class="card-text"><strong>Product 1 Link:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product2)
                    <p class="card-text"><strong>Product 2:</strong></p>
                    <p>{{ $business->product2 }}</p>
                @else
                    <p class="card-text"><strong>Product 2:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product2_link)
                    <p class="card-text"><strong>Product 2 Link:</strong></p>
                    <p><a href="{{ $business->product2_link }}">{{ $business->product2_link }}</a></p>
                @else
                    <p class="card-text"><strong>Product 2 Link:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product3)
                    <p class="card-text"><strong>Product 3:</strong></p>
                    <p>{{ $business->product3 }}</p>
                @else
                    <p class="card-text"><strong>Product 3:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product3_link)
                    <p class="card-text"><strong>Product 3 Link:</strong></p>
                    <p><a href="{{ $business->product3_link }}">{{ $business->product3_link }}</a></p>
                @else
                    <p class="card-text"><strong>Product 3 Link:</strong></p>
                    <p>None</p>
                @endif

                <button class="button"><a href="" class="">Edit Details</a></button>
            </div>
        </div>
    </div>

</body>

@endsection
