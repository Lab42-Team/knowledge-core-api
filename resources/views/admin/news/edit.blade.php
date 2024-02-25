@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование новости</h1>
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
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <div class="form-group" >
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $news->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description">{{ $news->description }}</textarea>
                                @error('description')
                                <div class="text-danger">Текст ошибки</div>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" id="status" placeholder="Enter status" value="{{ $news->status }}">
                            </div>
                            <div class="form-group" >
                                <label for="date">date</label>
                                <input type="text" name="date" class="form-control" id="date" placeholder="Enter date" value="{{ $news->date }}">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Обновить">
                            <!--<button type="submit" class="btn btn-primary">Добавить</button>-->
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
