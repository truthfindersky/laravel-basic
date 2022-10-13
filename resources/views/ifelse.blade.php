{{-- 16. ifelse --}}

@if ($LoginStatusKey == true)

<p>You are logged In</p>

@elseif ($LoginStatusKey == false)

<p>You are not logged In</p>

@else

<p>Login Status Not found</p>

@endif