@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создание поста</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Название" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Текст</label>
                    <textarea name="content" class="form-control" id="content" placeholder="Текст">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <input type="category_id" name="category_id" class="form-control" id="category_id" placeholder="Категория" value="{{ $post->category_id }}">
                </div>
                <div class="form-group">
                    <label for="user_id">Юзер</label>
                    <input type="user_id" name="user_id" class="form-control" id="user_id" placeholder=">Юзер" value="{{ $post->user_id }}">
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputFile">File input</label>--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                        </div>--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text">Upload</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Обновить</button>
            </div>
        </form>
    </div>
@endsection
