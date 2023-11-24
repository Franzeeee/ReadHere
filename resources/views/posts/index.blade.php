@extends('layout')

@section('title', "Blogs")

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
        <div class="row-reverse">

            @forelse ($posts as $post)
            <div class="col blog-col"  onclick="window.location.href='{{ route('blog.show', $post->id) }}'">
                <div class="blog-img">
                    <img src="{{ asset('img/dummy-image.jpg') }}">
                    <div class="chatBox">
                        <div class="day">
                            <p>{{ $post->created_at->format('d') }}</p>
                        </div>
                        <div class="ym">
                            <div class="year">
                                <p>{{ $post->created_at->format('Y') }}</p>
                            </div>
                            <div class="month">
                                <p>{{ $post->created_at->format('F') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-text">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->description }}</p>
                    <h5><span class="right-arrow">></span> Read More</h5>
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

