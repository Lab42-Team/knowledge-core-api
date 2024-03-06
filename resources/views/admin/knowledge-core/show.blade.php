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
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.knowledge-core.index') }}">Основная информация</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Основная информация: {{ $knowledgeCore->id }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">Основная информация: {{ $knowledgeCore->id }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.knowledge-core.index') }}" role="button">
                                    <i class="bi bi-arrow-90deg-left"></i> Назад
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.knowledge-core.edit', $knowledgeCore->id) }}" role="button">
                                    <i class="bi bi-pen"></i> Редактировать
                                </a>
                                <form action="{{ route('admin.knowledge-core.destroy', $knowledgeCore->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Удалить</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $knowledgeCore->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{ $knowledgeCore->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Телефон</td>
                                        <td>{{ $knowledgeCore->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Электронная почта</td>
                                        <td>{{ $knowledgeCore->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Адрес</td>
                                        <td>{{ $knowledgeCore->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Публикации</td>
                                        <td>{{ $knowledgeCore->references }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ссылка на сайт лаборатории</td>
                                        <td>{{ $knowledgeCore->lab_link }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ссылка на группу GitHub</td>
                                        <td>{{ $knowledgeCore->github_link }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                    </div>

                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
