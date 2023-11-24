@extends('layout')

@section('title', "Home | ReadHere")

@section('headerText')
    <div class="mainText">
        <p>Hello! Welcome to</p>
        <h1>ReadHere blog</h1>
        <p>
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. 
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
        </p>
        <div class="arrow-down">
            <img src="{{ asset('img/arrow-down.png') }}" alt="arrow-down">
        </div>    
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row home-row">

            @forelse ($posts as $post)
            <div class="col home-col">
                <div class="img">
                    <img src="{{ asset('img/dummy-image.jpg') }}" alt="A dummy image for blog.">
                </div>
                <div class="content">
                    <div class="contentText">
                        <p>Category</p>
                        <h1>{{ $post->title }}</h1>
                    </div>
                    <div class="socialMedia">
                        <div class="icon">
                            <img src="{{ asset('img/twitter-icon.png') }}" alt="Twitter icon">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook icon">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('img/instagram-icon.png') }}" alt="Instagram icon">
                        </div>
                    </div>
                    <div class="dates">
                        <p>11/13/2023 | 12 min read</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="no-post">
                <div class="error-post-container">
                    <figure>
                        <img src="{{ asset('img/empy-box.png') }}">
                    </figure>
                    <div class="text">
                        <h2>No Posts</h2>
                        <p>There has been no post in this section yet.</p>
                    </div>
                </div>
            </div>
            @endforelse

        </div>
        <div class="pagination">
            {{ $posts->links('pagination::default') }}
        </div>
    </div>
@endsection

