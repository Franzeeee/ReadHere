@extends('layout')

@section('scripts')
    <script src="{{asset('js/switch.js')}}"></script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('title', "Register")

@section('headerText')
    <div class="mainText about">
        <h1 id="contentHeader">Register</h1>
        <div class="navigations">
            <ul>
                <li onclick="window.location.href='{{ route('home') }}'">Home > </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="registerContainer">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <h1>Register <span>Here</span>.</h1>
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" autocomplete="off" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" autocomplete="off" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" autocomplete="off" name="password" required>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
@endsection
