@extends('master_view')

@section('section')

<body class="background-color">
@php
$about = (object) [
    'name' => 'About Us',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero in nisl fringilla, ut cursus metus aliquam. Sed nec nulla vel sapien dignissim aliquet. Integer euismod justo non augue aliquet, a bibendum justo volutpat. Nulla vel quam vel ex hendrerit facilisis. Vivamus vulputate velit ac efficitur volutpat.'
];
@endphp
    <div class="dashboard-container">
        <div class="dashboard-card edit-about-card">
            <div class="dashboard-header">
                <h2>Edit About</h2>
            </div>
            <div class="dashboard-body">
                <form action="" method="post">
                    @csrf

                    <label for="about-title">Title:</label>
                    <input class="about-title" type="text" id="name" name="name" value="{{ $about->name ?? '' }}" required>

                    <label for="about-content">Content:</label>
                    <textarea class="about-content" id="content" name="content" rows="20" required>{{ $about->content ?? '' }}</textarea>

                    <button class="button" type="submit">Update About</button>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection
