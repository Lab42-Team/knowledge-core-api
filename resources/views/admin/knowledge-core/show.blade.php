@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ядро знаний: {{ $knowledge_core->id }}</h1>
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
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.knowledge-core.index') }}" class="btn btn-block btn-primary">Назад</a>
                    </div>
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.knowledge-core.edit', $knowledge_core->id) }}" class="btn btn-block btn-success">Редактировать</a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('admin.knowledge-core.delete', $knowledge_core->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger col-12">
                        </form>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $knowledge_core->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>description</td>
                                            <td>{{ $knowledge_core->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>phone</td>
                                            <td>{{ $knowledge_core->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td>{{ $knowledge_core->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>address</td>
                                            <td>{{ $knowledge_core->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>references</td>
                                            <td>{{ $knowledge_core->references }}</td>
                                        </tr>
                                        <tr>
                                            <td>lab_link</td>
                                            <td>{{ $knowledge_core->lab_link }}</td>
                                        </tr>
                                        <tr>
                                            <td>github_link</td>
                                            <td>{{ $knowledge_core->github_link }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>











            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
