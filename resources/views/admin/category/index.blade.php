@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Категории</li>
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
                            <a href="{{ route('admin.category.create') }}" type="button"  class="btn btn-block btn-primary btn-flat">Создать</a>
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
                                    <th colspan="3" style="width: 1%">
                                        Действия
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->id }}
                                    </td>
                                    <td>
                                        <a>
                                            {{ $category->title }}
                                        </a>
                                        <br>
                                        <small>
                                            {{ $category->created_at }}
                                        </small>
                                    </td>
                                    <td><a href="{{ route('admin.category.show', $category->id) }}"><i class="far fa-eye"></i></a></td>
                                    <td><a href="{{ route('admin.category.edit', $category->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
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
                                {{ $categories->withQueryString()->links() }}
                            </div>
                    </div>
                </section>
            </div>
        </section>
    <!-- /.content -->
    </div>
@endsection
