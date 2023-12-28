@extends('master_view')

@section('section')

<body class="background-color">

    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="dashboard-header">
                <h2 class="">Dashboard</h2>
            </div>
            <div class="admin-dashboard-buttons">
                <a href="{{route('admin.requests' )}}" class="">Pending Businesses</a>
                <a href="{{route('admin.businesses' )}}" class="">All Businesses</a>
                <a href="{{route('admin.addBlog' )}}" class="">Add Blog</a>
                <a href="{{route('admin.about' )}}" class="">Edit About Page</a>
            </div>
        </div>
    </div>

</body>

@endsection
