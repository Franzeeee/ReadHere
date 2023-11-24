@extends('layout')

@section('scripts')
<script src="{{asset('js/switch.js')}}"></script>
@endsection

@section('title', "Blog")

@section('headerText')
    <div class="mainText about">
        <h1 id="contentHeader">Blog  {{$post->id}}</h1>
        <div class="navigations">
            <ul>
                <li onclick="window.location.href='{{ route('home') }}'">Home > </li>
                <li onclick="window.location.href='{{ route('blog.index') }}'">Blogs > </li>
                <li>Blog {{$post->id}} ></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="container show-container">
        <div class="row">

           <div class="switch-container">
                <div class="switchGroup">
                    <div class="switch">
                        <div class="inner-cicle">
                            <p>Off</p>
                        </div>
                    </div>
                    <p id="switchLabel">Manage Blog</p>
                </div>
                <div class="manageButton">
                    <div class="edit" title="Edit" onclick="window.location.href = '{{ route('blog.edit', $post->id) }}'">
                        <img src="{{ asset('img/edit-icon.png') }}">
                    </div>
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="delete">
                        @csrf
                        @method('delete')
                       <button type="submit"><img src="{{ asset('img/delete-icon.png') }}"></button>
                    </form>
                </div>
           </div>

            <div class="col single-col bg-white">
                <h1>{{$post->title}}</h1>
                <p id="author">By: <b>Author</b></p>
                <div class="single-content">
                    <p>{{ $post->description }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
