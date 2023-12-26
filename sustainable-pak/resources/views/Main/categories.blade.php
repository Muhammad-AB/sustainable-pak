@extends('master_view')

@section('section')

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

<div style="margin-top: 20px; text-align: center;">
    {{ $categories->links() }}
</div>
<!-- <div style="margin-top: 20px; text-align: center;">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" style="margin: 0; padding: 0;">
            {{ $categories->links() }}
        </ul>
    </nav>
</div> -->
<!-- <style>
    .pagination .page-item .page-link {
        font-size: 14px;
        /* Adjust the font size as needed */
    }
</style> -->


@else
<p> No category Available</p>
@endif

@endsection