<!DOCTYPE html>

<html>

<head>

<title>@yield('title','Laravel')</title>

<link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

<style>
h1 {
    font-size:34px;
    text-align:center;
    text-decoration: underline;
    font-weight: bold;
    
}
h2 {
    font-weight: bold;
    text-align:center;
    text-decoration: underline;
}
.container {
    text-align:center;
}

html {
    background:#DCDCDC;
}




</style>

</head>

<nav class="navbar is-primary">
<div class="container">
<div class="navbar-brand">
      <a class="navbar-item" href="#" style="font-weight:bold;">
        
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
<div id="navMenu" class="navbar-menu">
<div class="navbar-end">
        <a href="/" class="navbar-item is-active">Home</a>
        <a href="/about" class="navbar-item">About us</a>
        <a href="/contact" class="navbar-item">Contact us</a>
        <a href="/posts" class="navbar-item">Posts</a>
       @guest
        <a href="/login" class="navbar-item">Login</a>
        <a href="/register" class="navbar-item">Register</a>
        @else
        <a href="" class="navbar-item">{{ Auth::user()->name }}</a>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
      </div>
      @endguest
</div>
</div>
</nav>
<body>



<div class="container">

@yield('content')

</div>

</body>


</html>