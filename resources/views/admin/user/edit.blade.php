@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Реактирование пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
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

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Имя пользователя</label>
                                    <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="name" placeholder="Имя пользователя">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $user->email }}" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role">Выберите роль</label>
                                    <select class="form-control" id="role" name="role">
                                        @foreach($roles as $id => $role)
                                            <option
                                                {{ $user->role == $id ? ' selected' : '' }}
                                                value="{{ $id }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
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
