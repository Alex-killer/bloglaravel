@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание пользователя</h1>
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
                    <div class="card card-primary w-50">
                        <!-- form start -->
                        <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Имя пользователя</label>
                                    <input type="text" name="name" class="form-control" placeholder="Имя пользователя">

                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">

                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="text" name="password" class="form-control" placeholder="Пароль">

                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role">Выберите роль</label>
                                    <select class="form-control" id="role" name="role">
                                        @foreach($roles as $id => $role)
                                            <option
                                                {{ old('role_id') == $id ? ' selected' : '' }}
                                                value="{{ $id }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
