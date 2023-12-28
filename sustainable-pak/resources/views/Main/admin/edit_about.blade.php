@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card edit-about-card">
            <div class="dashboard-header">
                <h2>Edit About</h2>
            </div>
            <div class="dashboard-body">
                <form action="{{ isset($about) ? route('admin.updateAbout', $about->id) : route('admin.updateAbout') }}" method="post">
                    @csrf

                    <label for="about-title">Title:</label>
                    <input class="about-title" type="text" id="name" name="name" value="{{ $about->name ?? '' }}" required>

                    <label for="edit-about-content">Content:</label>
                    <textarea class="edit-about-content" id="content" name="content" rows="20" required>{{ $about->content ?? '' }}</textarea>

                    <button class="button" type="submit">Update About</button>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection
