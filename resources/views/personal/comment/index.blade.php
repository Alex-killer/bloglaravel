@extends('personal.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Комментарии</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
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
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>
                                    {{ $comment->id }}
                                </td>
                                <td>
                                    <a>
                                        {{ $comment->message }}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $comment->created_at }}
                                    </small>
                                </td>
                                <td><a href="{{ route('admin.post.edit', $comment->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                <td>
                                    <form action="{{ route('personal.liked.delete', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-opacity">
                                            <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
