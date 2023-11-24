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

            <div class="col col-1">
                <div class="postForm bg-white">
                    <form method="POST" action="{{ route('blog.update', $post) }}" class="editForm">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="{{ $post->title }}" autocomplete="off" name="title" class="@error('title') error-border @enderror" required>
                            @error('title')
                                <div class="error-icon">
                                    <p>!</p>
                                </div>
                                <div class="error-message">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description">{{ $post->description }}</textarea>
                            @error('description')
                                <div class="error-icon">
                                    <p>!</p>
                                </div>
                                <div class="error-message">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" id="submit"><p>Update</p></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
