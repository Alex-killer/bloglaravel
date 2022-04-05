@extends('admin.layouts.admin')

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Посты</li>
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

                    <!-- Default box -->
                    <div class="card">

                        <th>
                            <a href="{{ route('admin.post.create') }}" type="button"  class="btn btn-block btn-primary btn-flat">Создать</a>
                        </th>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        id
                                    </th>
                                    <th style="width: 20%">
                                        Название
                                    </th>
                                    <th style="width: 10%">
                                        Категория
                                    </th>
                                    <th style="width: 10%">
                                        Картинка
                                    </th>
                                    <th colspan="3" style="width: 1%">
                                        Действия
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        <a>
                                            {{ $post->title }}
                                        </a>
                                        <br>
                                        <small>
                                            {{ $post->created_at }}
                                        </small>
                                    </td>
                                    <td>
                                        <span>{{ $post->category->title }}</span>
                                    </td>
                                    <td>
                                        <div class="w-75">
                                            <img src="{{ url('storage/' . $post->preview_image) }}" alt="no_image" class="w-50">
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.post.show', $post->id) }}"><i class="far fa-eye"></i></a></td>
                                    <td><a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-opacity">
                                                <i class="fas fa-trash text-danger" role="button"></i>
                                            </button>
                                        </form>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <section class="content">
                    <div class="container-fluid">
                            <div class="mt-3">
                                {{ $posts->withQueryString()->links() }}
                            </div>
                    </div>
                </section>
            </div>
        </section>
    <!-- /.content -->
    </div>
@endsection
