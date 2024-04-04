@extends('frontend.layout.master')
@section('content')
  <div class="container">
        <h2>Latest Blog</h2>
        @foreach($blog as $b)
        <div class="blog-post">
            <div class="d-flex mb-3">
                <img src="{{ asset('public/uploads/user/'.$b->volunteer->image) }}" class="rounded-circle" width="50px" alt="adfsd">
                <p class="mx-3 fw-bold">{{ $b->volunteer->name }}</p>
            </div>
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