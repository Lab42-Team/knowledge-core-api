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
                                {{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.ADD') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.ADD') }}</h3>
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
                        <form action="{{ route('admin.knowledge-core.store') }}" method="POST">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.DESCRIPTION') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.PHONE') }}</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.EMAIL') }}</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ADDRESS') }}</label>
                                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="references" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.REFERENCES') }}</label>
                                    <textarea id="references" name="references" class="form-control">{{ old('references') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="lab_link" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.LAB_LINK') }}</label>
                                    <textarea id="lab_link" name="lab_link" class="form-control">{{ old('lab_link') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="github_link" class="form-label">{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.GITHUB_LINK') }}</label>
                                    <textarea id="github_link" name="github_link" class="form-control">{{ old('github_link') }}</textarea>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> {{ __('main.BUTTON_ADD') }}</button>
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
