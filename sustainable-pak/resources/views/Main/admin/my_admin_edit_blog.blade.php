@extends('master_view') <!-- Assuming you have a layout file, adjust as needed -->

@section('section')
    <div class="container">
        <h1>{{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}</h1>

        <form action="{{-- isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') --}}" method="POST">
            @csrf

            {{--@if(isset($blog))
                @method('PATCH')
            @endif--}}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($blog) ? $blog->name : old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ isset($blog) ? $blog->content : old('content') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($blog) ? 'Update' : 'Add' }} Blog</button>
        </form>
    </div>
@endsection
