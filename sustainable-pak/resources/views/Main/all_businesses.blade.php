@extends('master_view')

@section('section')

<div class="businesses-container">
    <h2>{{ $category->name }}</h2>

    @foreach($businesses as $business)

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

                <p>Visit us at: <a href="{{ $business->website_link }} &rarr;"></a></p>
                
                <div class="business-socials">
                    <p><b>Socials: </b></p>

                    @if(isset($business->facebook_link))
                        <a href="{{ $business->facebook_link }}"><img src="" alt="facebook"></a>
                    @endif

                    @if(isset($business->instagram_link))
                        <a href="{{ $business->instagram_link }}"><img src="" alt="instagram"></a>
                    @endif
                </div>
            </div>
        </div>
        <hr/>
    @endforeach
</div>

@endsection
