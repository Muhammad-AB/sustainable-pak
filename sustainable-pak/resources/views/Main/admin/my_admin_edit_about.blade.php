@extends('master_view') <!-- Assuming you have a layout file, adjust as needed -->

@section('section')
    <div class="container">
        <h1>{{ isset($about) ? 'Edit About Page' : 'Add About Page' }}</h1>

        <form action="{{ isset($about) ? route('admin.updateAbout', $about->id) : route('admin.updateAbout') }}" method="POST">
            @csrf

            {{--@if(isset($about))
                @method('PATCH')
            @endif--}}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($about) ? $about->name : old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>{{ isset($about) ? $about->content : old('content') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($about) ? 'Update' : 'Add' }} About Page</button>
        </form>
    </div>
@endsection
