@extends('master_view')

@section('section')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

@if(isset($categories))
<div class="sustainable-business-container">
    <div class="element-container">
        @foreach($categories as $category)
        <div class="individual-element-container">
            <a href="{{ route('business.list', ['id' => $category->id]) }}">
                <img src="{{ asset($category->img_link) }}" alt="{{ $category->name }}">
            </a>
            <a href="{{ route('business.list', ['id' => $category->id]) }}">
                {{ $category->name }}
            </a>
        </div>
        @endforeach
    </div>
</div>

<div style="margin-right: 20px; margin-left: 20px; text-align: center;">
    {{ $categories->links('pagination::bootstrap-5') }}
</div>



@else
<p> No category Available</p>
@endif

@endsection