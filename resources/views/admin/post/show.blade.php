@extends('layouts.admin')

@section('content')
    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div>
    </div>
@endsection
