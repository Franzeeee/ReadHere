@extends('layout')

@section('title', "About")

@section('headerText')
    <div class="mainText about">
        <h1 id="contentHeader">About</h1>
        <div class="navigations">
            <ul>
                <li onclick="window.location.href='{{ route('home') }}'">Home > </li>
                <li>About > </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
@endsection

