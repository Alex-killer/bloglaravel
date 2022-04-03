@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Название" value="{{ $post->title }}">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content">Текст</label>
                                    <textarea name="content" class="form-control" id="content" placeholder="Текст">{{ $post->content }}</textarea>
                                    @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                {{ $category->id == $post->category->id ? ' selected' : ''}}
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tag_id">Тэги</label>
                                    <select multiple="multiple" class="select2" id="tag_ids" name="tag_ids[]" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array( $tag->id, $post->tags->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('tag_ids')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Юзер</label>
                                    <input type="user_id" name="user_id" class="form-control" id="user_id" placeholder=">Юзер" value="{{ $post->user_id }}">
                                </div>
                                <div class="form-group w-50">
                                    <label for="exampleInputFile">Добавить превью</label>
                                    <div class="w-25  mb-2">
                                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image">
                                            <label class="custom-file-label" >Выбрать файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                    @error('preview_image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label for="exampleInputFile">Добавить изображение</label>
                                    <div class="w-50  mb-2">
                                        <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image">
                                            <label class="custom-file-label" >Выбрать файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                    @error('main_image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
