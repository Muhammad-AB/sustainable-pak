@extends('master_view')

@section('section')

<div class="businesses-container">
    <h2>$category->name</h2>

    @foreach($businesses as $business)
        <hr/>
        <div class="single-business-container">
            <div class="business-name-logo">
                <p class="name">{{ $business->name}}</p>
            </div>
            <div class="business-description">
                <p><b>Description: </b>{{ $business->description}}</p>
                <p><b>Category: </b>{{ $business->category ?? '' }}</p>

                @if(isset($business->products) && count($business->products) > 0)
                    <div class="business-products">
                        <p><b>Top Products</b></p>
                        <div>
                            @foreach($business->products as $product)
                                <p>{{ $product }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif

                <p>Visit us at: <a href="{{ $business->main_link }} &rarr;">{{ $business->main_link }}</a></p>
                
                <div class="business-socials">
                    <p><b>Socials: </b></p>

                    @if(isset($business->facebook_link))
                        <a href="{{ $business->facebook_link }}"><img src="{{ asset('images/icons/facebook-green.png') }}" alt="facebook"></a>
                    @endif

                    @if(isset($business->instagram_link))
                        <a href="{{ $business->instagram_link }}"><img src="{{ asset('images/icons/instagram-green.png') }}" alt="instagram"></a>
                    @endif

                    @if(isset($business->twitter_link))
                        <a href="{{ $business->twitter_link }}"><img src="{{ asset('images/icons/twitter-green.png') }}" alt="twitter"></a>
                    @endif

                    @if(isset($business->linkedin_link))
                        <a href="{{ $business->linkedin_link }}"><img src="{{ asset('images/icons/linkedin-green.png') }}" alt="linkedin"></a>
                    @endif
                </div>
                
                @if(auth()->user()->role == 'A')
                    <div class="admin-actions">
                        <form action="" method="post">
                            @csrf
                            <button type="submit">Delete Business</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    @endforeach

</div>

@endsection
