@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                            <h6 class="blog-post-title">{{ $post->content }}</h6>
                        </a>
                    </div>
                    @endforeach
                        <div class="mt-3">
                            {{ $posts->withQueryString()->links() }}
                        </div>
                </div>

        </div>
    </main>
@endsection
