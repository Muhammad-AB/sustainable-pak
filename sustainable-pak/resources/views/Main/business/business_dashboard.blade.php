@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="">Dashboard</h2>
            </div>
            <div class="dashboard-body">

                @if($business->user->name)
                    <p class="card-text"><strong>Business Name: </strong></p>
                    <p>{{ $business->user->name }}</p>
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
                    <p>{{ $business->category->name }}</p>
                @else
                    <p class="card-text"><strong>Category:</strong></p>
                    <p>None</p>
                @endif

                @if($business->main_link)
                    <p class="card-text"><strong>Main Link:</strong></p>
                    <p><a href="{{ $business->main_link  }}">{{ $business->main_link }}</a></p>
                @else
                    <p class="card-text"><strong>Main Link:</strong></p>
                    <p>None</p>
                @endif

                @if($business->web_link)
                    <p class="card-text"><strong>Website:</strong></p>
                    <p><a href="{{ $business->web_link }}">{{ $business->web_link }}</a></p>
                @else
                    <p class="card-text"><strong>Website:</strong></p>
                    <p>None</p>
                @endif

                @if($business->fb_link)
                    <p class="card-text"><strong>Facebook:</strong></p>
                    <p><a href="{{ $business->fb_link }}">{{ $business->fb_link }}</a></p>
                @else
                    <p class="card-text"><strong>Facebook:</strong></p>
                    <p>None</p>
                @endif

                @if($business->insta_link)
                    <p class="card-text"><strong>Instagram:</strong></p>
                    <p><a href="{{ $business->insta_link }}">{{ $business->insta_link }}</a></p>
                @else
                    <p class="card-text"><strong>Instagram:</strong></p>
                    <p>None</p>
                @endif

                @if($business->lin_link)
                    <p class="card-text"><strong>LinkedIn:</strong></p>
                    <p><a href="{{ $business->lin_link }}">{{ $business->lin_link }}</a></p>
                @else
                    <p class="card-text"><strong>LinkedIn:</strong></p>
                    <p>None</p>
                @endif

                @if($business->twitter_link)
                    <p class="card-text"><strong>Twitter:</strong></p>
                    <p><a href="{{ $business->twitter_link }}">{{ $business->twitter_link }}</a></p>
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


                @if($business->product2)
                    <p class="card-text"><strong>Product 2:</strong></p>
                    <p>{{ $business->product2 }}</p>
                @else
                    <p class="card-text"><strong>Product 2:</strong></p>
                    <p>None</p>
                @endif


                @if($business->product3)
                    <p class="card-text"><strong>Product 3:</strong></p>
                    <p>{{ $business->product3 }}</p>
                @else
                    <p class="card-text"><strong>Product 3:</strong></p>
                    <p>None</p>
                @endif

                @if($business->product3)
                    <!-- <p class="card-text"><strong>Product 3 Link:</strong></p>
                    <p><a href="{{ $business->product3 }}">{{ $business->product3 }}</a></p> -->
                @else
                    <!-- <p class="card-text"><strong>Product 3 Link:</strong></p>
                    <p>None</p> -->
                @endif

                <button class="button"><a href="{{ route('business.editDetails') }}" class="">Edit Details</a></button>
            </div>
        </div>
    </div>

</body>

@endsection
