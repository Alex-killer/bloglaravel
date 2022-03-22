@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @foreach($posts as $post)
                <div>
                    {{ $post->title }}
                </div>
        @endforeach
                <div class="mt-3">
                    {{ $posts->withQueryString()->links() }}
                </div>
        </div>
    </section>
@endsection