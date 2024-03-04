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
                        <h3 class="mb-0">Редактирование основной информации</h3>
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

                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">

                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{ route('admin.knowledge-core.update', $knowledgeCore->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Описание</label>
                                    <textarea id="description" name="description" class="form-control">{{ $knowledgeCore->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Телефон</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $knowledgeCore->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Электронная почта</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ $knowledgeCore->email }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Адрес</label>
                                    <input type="text" id="address" name="address" class="form-control" value="{{ $knowledgeCore->address }}">
                                </div>
                                <div class="mb-3">
                                    <label for="references" class="form-label">Публикации</label>
                                    <textarea id="references" name="references" class="form-control">{{ $knowledgeCore->references }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="lab_link" class="form-label">Ссылка на сайт лаборатории</label>
                                    <textarea id="lab_link" name="lab_link" class="form-control">{{ $knowledgeCore->lab_link }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="github_link" class="form-label">Ссылка на группу GitHub</label>
                                    <textarea id="github_link" name="github_link" class="form-control">{{ $knowledgeCore->github_link }}</textarea>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>

                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection