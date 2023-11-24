@extends('layout')

@section('title', "Post")

@section('headerText')
    <div class="mainText about">
        <h1 id="contentHeader">Post Blog</h1>
        <div class="navigations">
            <p><a href="{{ route('home') }}">Home ></a> Post ></p>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="contentHeader">
                <p>Welcome to ReadHere!</p>
                <p class="contentHeader">Write and Upload your blog.</p>
            </div>
            <div class="col col-1">
                <div class="postForm">
                    <div class="img">
                        <p>Uploading image is still unavailable.</p>
                    </div>
                    <form method="POST" action="{{ route('blog.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="{{ old('title') }}" autocomplete="off" name="title" class="@error('title') error-border @enderror" required>
                            @error('title')
                                <div class="error-icon">
                                    <p>!</p>
                                </div>
                                <div class="error-message">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" value="{{ old('category') }}" autocomplete="off" name="category" required>
                            @error('category')
                                <div class="error-icon">
                                    <p>!</p>
                                </div>
                                <div class="error-message">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="error-icon">
                                    <p>!</p>
                                </div>
                                <div class="error-message">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" id="submit"><p>Post</p></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

