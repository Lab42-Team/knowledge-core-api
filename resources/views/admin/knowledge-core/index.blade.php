@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ядро знаний</h1>
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
                        <a href="{{ route('admin.knowledge-core.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>description</th>
                                        <th>phone</th>
                                        <th>email</th>
                                        <th>address</th>
                                        <th>references</th>
                                        <th>lab_link</th>
                                        <th>github_link</th>
                                        <th colspan="3">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($knowledge_cores as $knowledge_core)
                                        <tr>
                                            <td>{{ $knowledge_core->id }}</td>
                                            <td>{{ $knowledge_core->description }}</td>
                                            <td>{{ $knowledge_core->phone }}</td>
                                            <td>{{ $knowledge_core->email }}</td>
                                            <td>{{ $knowledge_core->address }}</td>
                                            <td>{{ $knowledge_core->references }}</td>
                                            <td>{{ $knowledge_core->lab_link }}</td>
                                            <td>{{ $knowledge_core->github_link }}</td>
                                            <td><a href="{{ route('admin.knowledge-core.show', $knowledge_core->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                                            <td><a href="{{ route('admin.knowledge-core.edit', $knowledge_core->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                                            <td>
                                                <form action="{{ route('admin.knowledge-core.delete', $knowledge_core->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fa-solid fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
