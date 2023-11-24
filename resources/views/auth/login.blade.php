@extends('layout')

@section('scripts')
    <script src="{{asset('js/switch.js')}}"></script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('title', "Login")

@section('headerText')
    <div class="mainText about">
        <h1 id="contentHeader">Login</h1>
        <div class="navigations">
            <ul>
                <li onclick="window.location.href='{{ route('home') }}'">Home > </li>
                <li onclick="window.location.href='{{ route('blog.index') }}'">Login</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="loginContainer">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h1>Login <span>Here</span>.</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" autocomplete="off" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" autocomplete="off" name="password" required>
            </div>
            <button type="submit">Sign In</button>
            <p>Forgot your password?</p>
        </form>
    </div>
@endsection
