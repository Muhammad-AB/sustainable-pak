@extends('master_view')

@section('section')
<div>
<h1>Welcome to Admin Dash'</h1></div>
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

@endsection