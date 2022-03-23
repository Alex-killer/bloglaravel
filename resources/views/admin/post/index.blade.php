@extends('layouts.admin')

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Посты</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
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
                            Name
                        </th>

                        <th style="width: 8%" class="text-center">
                            Published
                        </th>
                        <th style="width: 20%">
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


                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.post.show', $post->id) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.post.edit', $post->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
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
@endsection
