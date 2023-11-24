<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/tab-icon.png') }}" type="image/x-icon">
    <title>@yield('title', 'ReadHere')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('scripts')
    @yield('styles')
</head>
<body>
    <header>
        <nav>
            <div class="nav-bar">
                <a href="{{ route('home') }}"><h1>Read<span id="coloredLogo">Here</span>.</h1></a>
                <ul class="navLinks">
                    <li><a href="{{ route('home') }}" id="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('blog.index') }}" id="{{ request()->routeIs('blog.index') ? 'active' : '' }}">Blogs</a></li>
                    <li><a href="{{ route('about') }}" id="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('blog.create') }}" id="{{ request()->routeIs('blog.create') ? 'active' : '' }}">Post</a></li>
                </ul>
                <div class="navLinks-2">
                   <ul>
                    <li id="{{ request()->routeIs('login') ? 'active' : '' }}" onclick="window.location.href ='{{ route('login') }}'">Login</li>
                    <li>|</li>
                    <li>Register</li>
                   </ul>
                </div>
            </div>
        @if(session('success'))
            <div class="success">
                <img src="{{ asset('img/check.png') }}">
                <p>{{session('success')}}</p>
            </div>
        @endif
        </nav>
        <div class="headerText">
            @yield('headerText')
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-col-1">
                <a href="{{ route('home') }}"><h1>Read<span id="coloredLogo">Here</span>.</h1></a>
                <div class="footer-p">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="logos">
                    <div class="logo">
                        <img src="{{ asset('img/twitter-icon.png') }}" alt="">
                    </div>
                    <div class="logo">
                        <img src="{{ asset('img/facebook-icon.png') }}" alt="">
                    </div>
                    <div class="logo">
                        <img src="{{ asset('img/instagram-icon.png  ') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-col-1 news-col">
               <h3>latest News</h3>
               <div class="footer-news">
                <div class="news-card">
                    <div class="news-card-img">
                        <img src="{{ asset('img/dummy-image.jpg') }}" alt="">
                    </div>
                    <div class="news-card-text">
                        <p class="title">Even the all-powerful Pointing has no control about</p>
                        <p class="footer-news-date">Oct. 16, 2019</p>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-img">
                        <img src="{{ asset('img/dummy-image.jpg') }}" alt="">
                    </div>
                    <div class="news-card-text">
                        <p class="title">Even the all-powerful Pointing has no control about</p>
                        <p class="footer-news-date">Oct. 16, 2019</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-col-1 info-col">
                <h3>Information</h3>
                <ul>
                    <a href="{{ route('home') }}"><li>> <span class="info-links">Home</span></li></a>
                    <a href="{{ route('blog.index') }}"><li>> <span class="info-links">Blog</span></li></a>
                    <a href="{{ route('about') }}"><li>> <span class="info-links">About</span></li></a>
                    <a href="{{ route('blog.create') }}"><li>> <span class="info-links">Post</span></li></a>
                </ul>
            </div>
            <div class="footer-col-1 contact-col">
                <h3>Have a Questions?</h3>
                <ul class="contact-info">
                    <li>
                        <div class="contact-icon"><img src="{{ asset('img/location-icon.png') }}" alt=""></div>
                        <p>	Brgy. Tibak, Sta.Fe, Leyte, Philippines</p>
                    </li>
                    <li>
                        <div class="contact-icon"><img src="{{ asset('img/telephone-icon.png') }}" alt=""></div>
                        <p class="higlight-contact">+63 9154042215</p>
                    </li>
                    <li>
                        <div class="contact-icon"><img src="{{ asset('img/email-icon.png') }}" alt=""></div>
                        <p class="higlight-contact">diazfranzpeter@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-last">
            <p>Copyright ©2023 All rights reserved | This website is made by Franz Peter Diaz</p>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>