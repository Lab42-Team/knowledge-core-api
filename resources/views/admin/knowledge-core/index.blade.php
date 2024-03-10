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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('main.HOME') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('main.KNOWLEDGE_CORE') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('main.KNOWLEDGE_CORE') }}</h3>
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
                                    <i class="bi bi-plus-lg"></i> {{ __('main.BUTTON_ADD') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                <tr>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_ID') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_DESCRIPTION') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_PHONE') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_EMAIL') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_ADDRESS') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_REFERENCES') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_LAB_LINK_SHORT') }}</th>
                                    <th>{{ __('main.KNOWLEDGE_CORE_MODEL_GITHUB_LINK_SHORT') }}</th>
                                    <th colspan="3">{{ __('main.ACTIONS') }}</th>
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
