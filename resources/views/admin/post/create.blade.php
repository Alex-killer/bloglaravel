@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">Создание поста</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.post.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Название">

                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content">Текст</label>
                                    <textarea name="content" class="form-control" id="content" placeholder="Текст">{{ old('content') }}</textarea>
                                    @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                        <option
                                            {{ old('category_id') == $category->id ? ' selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tag_id">Тэги</label>
                                    <select multiple="" class="form-control" id="tag_id" name="tag_id[]">
                                        @foreach($tags as $tag)
                                        <option
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Юзер</label>
                                    <input type="user_id" name="user_id" class="form-control" id="user_id" placeholder="Юзер">
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputFile">File input</label>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="input-group-append">--}}
{{--                                            <span class="input-group-text">Upload</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
