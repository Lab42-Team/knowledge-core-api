@extends('admin.layouts.main')

@section('content')
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Основная информация</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Основная информация
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-inline-flex gap-1">
                                <a class="btn btn-primary" href="{{ route('admin.knowledge-core.create') }}" role="button">
                                    Добавить
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Описание</th>
                                    <th>Телефон</th>
                                    <th>Электронная почта</th>
                                    <th>Адрес</th>
                                    <th>Публикации</th>
                                    <th>Ссылка на сайт</th>
                                    <th>Ссылка на GitHub</th>
                                    <th colspan="3">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($knowledge_cores as $knowledge_core)
                                    <tr class="align-middle">
                                        <td>{{ $knowledge_core->id }}</td>
                                        <td>{{ $knowledge_core->description }}</td>
                                        <td>{{ $knowledge_core->phone }}</td>
                                        <td>{{ $knowledge_core->email }}</td>
                                        <td>{{ $knowledge_core->address }}</td>
                                        <td>{{ $knowledge_core->references }}</td>
                                        <td>{{ $knowledge_core->lab_link }}</td>
                                        <td>{{ $knowledge_core->github_link }}</td>
                                        <td><a title="Просмотр" href="{{ route('admin.knowledge-core.show', $knowledge_core->id) }}"><i class="bi bi-eye-fill"></i></a></td>
                                        <td><a title="Редактировать" href="{{ route('admin.knowledge-core.edit', $knowledge_core->id) }}"><i class="bi bi-pen-fill"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.knowledge-core.destroy', $knowledge_core->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent" title="Удалить">
                                                    <i class="bi bi-trash-fill text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!--<div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
