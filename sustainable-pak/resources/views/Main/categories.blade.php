
@extends('master_view')

@section('section')

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

        
@endsection