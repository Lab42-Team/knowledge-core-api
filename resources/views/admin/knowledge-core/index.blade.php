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
                                {{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.LIST') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.LIST') }}</h3>
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
                                @if($knowledge_core == false)
                                    <a class="btn btn-primary" href="{{ route('admin.knowledge-core.create') }}" role="button">
                                        <i class="bi bi-plus-lg"></i> {{ __('main.BUTTON_ADD') }}
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{ route('admin.knowledge-core.edit', $knowledge_core->id) }}" role="button">
                                        <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                    </a>
                                    <form action="{{ route('admin.knowledge-core.destroy', $knowledge_core->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        @if($knowledge_core == false)
                            <p class="fs-3 text-center text-danger">{{ __('knowledge_core.KNOWLEDGE_CORE_TEXT') }}</p>
                        @else
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ID') }}</b></td>
                                        <td>{{ $knowledge_core->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.DESCRIPTION') }}</b></td>
                                        @if (!empty($knowledge_core->description))
                                            <td>{{ $knowledge_core->description }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.PHONE') }}</b></td>
                                        @if (!empty($knowledge_core->phone))
                                            <td>{{ $knowledge_core->phone }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.EMAIL') }}</b></td>
                                        @if (!empty($knowledge_core->email))
                                            <td>{{ $knowledge_core->email }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ADDRESS') }}</b></td>
                                        @if (!empty($knowledge_core->address))
                                            <td>{{ $knowledge_core->address }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.REFERENCES') }}</b></td>
                                        @if (!empty($knowledge_core->references))
                                            <td>{{ $knowledge_core->references }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.LAB_LINK') }}</b></td>
                                        @if (!empty($knowledge_core->lab_link))
                                            <td>{{ $knowledge_core->lab_link }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.GITHUB_LINK') }}</b></td>
                                        @if (!empty($knowledge_core->github_link))
                                            <td>{{ $knowledge_core->github_link }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.card-body -->
                        @endif

                    </div>
                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
