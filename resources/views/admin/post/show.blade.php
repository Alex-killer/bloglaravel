@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пост</h1>
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
                    <div>
                        <div>{{ $post->id }}. {{ $post->title }}</div>
                    </div>
                    <div class="w-25 mb-2">
                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                    </div>
                    <div class="w-50 mb-2">
                        <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
