@extends('frontend.layout.master')
@section('content')
  <div class="container">
        <h2>Latest Posts</h2>
        @foreach($blog as $b)
        <div class="blog-post">
            <h3>{{ $b->title }}</h3>
            <img src="{{ asset('public/uploads/blog/'.$b->blog_image) }}" alt="" width="100%" height="200px">
            <p class="post-meta">{{ $b->blog_details }}</p>
            {{-- <a href="#" class="read-more">Read more</a> --}}
        </div>
        {{-- <div class="blog-post">
            <h3>Title of Another Blog Post</h3>
            <p class="post-meta">Posted by Tonmoy | January 2, 2024</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Integer id urna sit amet ligula convallis...</p>
            <a href="#" class="read-more">Read more</a>
        </div> --}}
        @endforeach
        <!-- Add more blog posts here -->
    </div>
@endsection