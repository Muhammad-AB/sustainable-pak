@extends('master_view')

@section('section')
<div>
    <h1>Welcome to Admin Dash'</h1>
</div>
<h1>Welcome to Admin Dash'</h1>
<!-- <h1>Welcome to Admin Dash'</h1>
<h1>Welcome to Admin Dash'</h1>
<h1>Welcome to Admin Dash'</h1> -->
@if(auth()->check())
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>
@else
<a href="{{ url('login') }}">Login</a> <!-- user not signed in -->
@endif

<!-- Button 1 -->
<form action="{{-- route('route.name.1') --}}" method="GET">
    <button type="submit">Button 1</button>
</form>

<!-- Button 2 -->
<form action="{{-- route('route.name.2') --}}" method="GET">
    <button type="submit">Button 2</button>
</form>

<!-- Button 3 -->
<form action="{{-- route('route.name.3') --}}" method="GET">
    <button type="submit">Button 3</button>
</form>

<!-- <a href="{{-- route('route.name.1') --}}" class="btn btn-primary">Button 1</a> -->



@endsection