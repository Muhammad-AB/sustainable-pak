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
<?php
echo 'Welcome to Admin Dash';
