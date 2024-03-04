<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <ul class="navbar-links">
        <li><a href="/" class="NavBar {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="/about" class="NavBar {{ Request::is('about') ? 'active' : '' }}">About Me</a></li>
        <li><a href="/contact" class="NavBar {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>
