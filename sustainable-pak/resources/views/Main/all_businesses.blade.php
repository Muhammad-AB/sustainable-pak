@extends('master_view')

@section('section')

<body class="background-color">

    <div class="businesses-container">
        <h2>{{ isset($category) ? $category->name : "All Businesses" }}</h2>

        @foreach($businesses as $business)
        <hr />
        <div class="single-business-container business-card">
            <div class="business-name-logo">
                <p class="name">{{ $business->user->name}}</p>
            </div>
            <div class="business-description">
                <p><b>Description: </b>{{ $business->description}}</p>
                <p><b>Category: </b>{{ $business->category->name ?? '' }}</p>

                @if(isset($business->product1) || isset($business->product2) || isset($business->product3))
                <div class="business-products">
                    <p><b>Top Products</b></p>
                    <div>
                        @if(isset($business->product1))
                        <p>{{ $business->product1 }}</p>
                        @endif
                        @if(isset($business->product2))
                        <p>{{ $business->product2 }}</p>
                        @endif
                        @if(isset($business->product3))
                        <p>{{ $business->product3 }}</p>
                        @endif
                    </div>
                </div>
                @endif

                <p>Visit us at: <a href="{{ $business->main_link }} &rarr;">{{ $business->main_link }}</a></p>

                <div class="business-socials">
                    <p><b>Socials: </b></p>

                    @if(isset($business->fb_link))
                    <a href="{{ $business->fb_link }}"><img src="{{ asset('images/icons/facebook-green.png') }}" alt="facebook"></a>
                    @endif

                    @if(isset($business->insta_link))
                    <a href="{{ $business->insta_link }}"><img src="{{ asset('images/icons/instagram-green.png') }}" alt="instagram"></a>
                    @endif

                    @if(isset($business->twitter_link))
                    <a href="{{ $business->twitter_link }}"><img src="{{ asset('images/icons/twitter-green.png') }}" alt="twitter"></a>
                    @endif

                    @if(isset($business->lin_link))
                    <a href="{{ $business->lin_link }}"><img src="{{ asset('images/icons/linkedin-green.png') }}" alt="linkedin"></a>
                    @endif
                </div>


                @if(auth()->user()->role == 'A')
                <div class="admin-actions">
                    <form action="{{ route('admin.delete.business', ['id' => $business->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete Business</button>
                    </form>
                </div>
                @endif

            </div>
        </div>
        @endforeach
    </div>


</body>

@endsection