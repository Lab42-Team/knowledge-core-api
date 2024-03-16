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
                            <li class="breadcrumb-item"><a href="{{ route('admin.knowledge-core.index') }}">{{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.LIST') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.VIEW', ['id' => $knowledgeCore->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.VIEW', ['id' => $knowledgeCore->id]) }}</h3>
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
                                    <i class="bi bi-arrow-90deg-left"></i> {{ __('main.BUTTON_BACK') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.knowledge-core.edit', $knowledgeCore->id) }}" role="button">
                                    <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                </a>
                                <form action="{{ route('admin.knowledge-core.destroy', $knowledgeCore->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ID') }}</b></td>
                                        <td>{{ $knowledgeCore->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.DESCRIPTION') }}</b></td>
                                        <td>{{ $knowledgeCore->description }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.PHONE') }}</b></td>
                                        <td>{{ $knowledgeCore->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.EMAIL') }}</b></td>
                                        <td>{{ $knowledgeCore->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ADDRESS') }}</b></td>
                                        <td>{{ $knowledgeCore->address }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.REFERENCES') }}</b></td>
                                        <td>{{ $knowledgeCore->references }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.LAB_LINK') }}</b></td>
                                        <td>{{ $knowledgeCore->lab_link }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.GITHUB_LINK') }}</b></td>
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
