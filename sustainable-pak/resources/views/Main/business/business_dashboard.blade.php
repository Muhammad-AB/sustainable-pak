@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-body">

                @if($business->user->name)
                    <h2>{{ $business->user->name }}</h2>
                @else
                    <p class="card-text"><strong>Business Name:</strong></p>
                    <p>None</p>
                @endif

                @if($business->description)
                    <p>{{ $business->description }}</p>
                @else
                    <p>None</p>
                @endif

                @if($business->category)
                    <p class="card-text"><strong>Category:</strong> {{ $business->category->name }}</p>
                @else
                    <p class="card-text"><strong>Category:</strong> None</p>
                @endif

                
                <div class="business-links">
                    <div class="business-link">
                        @if($business->main_link)
                            <p class="card-text"><strong>Main Link:</strong></p>
                            <p><a href="{{ $business->main_link  }}">{{ $business->main_link }}</a></p>
                        @else
                            <p class="card-text"><strong>Main Link:</strong></p>
                            <p>None</p>
                        @endif
                    </div>

                    <div class="business-link">
                        @if($business->web_link)
                            <p class="card-text"><strong>Website:</strong></p>
                            <p><a href="{{ $business->web_link }}">{{ $business->web_link }}</a></p>
                        @else
                            <p class="card-text"><strong>Website:</strong></p>
                            <p>None</p>
                        @endif
                    </div>

                    <div class="business-link">
                        @if($business->fb_link)
                            <p class="card-text"><strong>Facebook:</strong></p>
                            <p><a href="{{ $business->fb_link }}">{{ $business->fb_link }}</a></p>
                        @else
                            <p class="card-text"><strong>Facebook:</strong></p>
                            <p>None</p>
                        @endif
                    </div>

                    <div class="business-link">
                        @if($business->insta_link)
                            <p class="card-text"><strong>Instagram:</strong></p>
                            <p><a href="{{ $business->insta_link }}">{{ $business->insta_link }}</a></p>
                        @else
                            <p class="card-text"><strong>Instagram:</strong></p>
                            <p>None</p>
                        @endif
                    </div>

                    <div class="business-link">
                        @if($business->lin_link)
                            <p class="card-text"><strong>LinkedIn:</strong></p>
                            <p><a href="{{ $business->lin_link }}">{{ $business->lin_link }}</a></p>
                        @else
                            <p class="card-text"><strong>LinkedIn:</strong></p>
                            <p>None</p>
                        @endif
                    </div>

                    <div class="business-link">
                        @if($business->twitter_link)
                            <p class="card-text"><strong>Twitter:</strong></p>
                            <p><a href="{{ $business->twitter_link }}">{{ $business->twitter_link }}</a></p>
                        @else
                            <p class="card-text"><strong>Twitter:</strong></p>
                            <p>None</p>
                        @endif
                    </div>
                </div>

                
               <div class="business-products">
                        @if($business->product1)
                            <p class="card-text"><strong>Product 1:</strong> {{ $business->product1 }}</p>
                        @else
                            <p class="card-text"><strong>Product 1:</strong> None</p>
                        @endif


                    @if($business->product2)
                        <p class="card-text"><strong>Product 2:</strong> {{ $business->product2 }}</p>
                    @else
                        <p class="card-text"><strong>Product 2:</strong> None</p>
                    @endif


                    @if($business->product3)
                        <p class="card-text"><strong>Product 3:</strong> {{ $business->product3 }}</p>
                    @else
                        <p class="card-text"><strong>Product 3:</strong> None</p>
                    @endif

                </div>

                <button class="button"><a href="{{ route('business.editDetails') }}" class="">Edit Details</a></button>
            </div>
        </div>
    </div>

</body>

@endsection
