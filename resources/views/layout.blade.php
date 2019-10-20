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

</style>

</head>

<body>


<ul>

<li><a href = "/">Home</a></li>
<li><a href = "/about">About us</a></li>
<li><a href = "/contact">Contact us</a></li>
<li><a href = "/posts">Posts</a></li>
<li><a href = "/login">Login</a></li>
<li><a href = "/register">Register</a></li>

</ul>


<div class="container">

@yield('content')

</div>

</body>

</html>