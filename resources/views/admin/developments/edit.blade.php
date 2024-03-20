<?php

use Carbon\Carbon;

?>

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.developments.index') }}">{{ __('developments.DEVELOPMENTS_PAGE.LIST') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('developments.DEVELOPMENTS_PAGE.EDIT', ['id' => $development->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('developments.DEVELOPMENTS_PAGE.EDIT', ['id' => $development->id]) }}</h3>
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
                        <form action="{{ route('admin.developments.update', $development->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.NAME') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $development->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.DESCRIPTION') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ $development->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="year" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.YEAR') }}</label>
                                    <input type="text" id="year" name="year" class="form-control" value="{{ Carbon::parse($development->year )->format('Y') }}">
                                    @error('year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="authors" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.AUTHORS') }}</label>
                                    <textarea id="authors" name="authors" class="form-control">{{ $development->authors }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="publications" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.PUBLICATIONS') }}</label>
                                    <textarea id="publications" name="publications" class="form-control">{{ $development->publications }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="requirements" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.REQUIREMENTS') }}</label>
                                    <textarea id="requirements" name="requirements" class="form-control">{{ $development->requirements }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="practical_application" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.PRACTICAL_APPLICATION') }}</label>
                                    <textarea id="practical_application" name="practical_application" class="form-control">{{ $development->practical_application }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="version_history" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.VERSION_HISTORY') }}</label>
                                    <textarea id="version_history" name="version_history" class="form-control">{{ $development->version_history }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="demo_videos" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.DEMO_VIDEOS') }}</label>
                                    <textarea id="demo_videos" name="demo_videos" class="form-control">{{ $development->demo_videos }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="software_link" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.SOFTWARE_LINK') }}</label>
                                    <textarea id="software_link" name="software_link" class="form-control">{{ $development->software_link }}</textarea>
                                    @error('software_link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="documentation_link" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.DOCUMENTATION_LINK') }}</label>
                                    <textarea id="documentation_link" name="documentation_link" class="form-control">{{ $development->documentation_link }}</textarea>
                                    @error('documentation_link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="github_link" class="form-label">{{ __('developments.DEVELOPMENTS_MODEL.GITHUB_LINK') }}</label>
                                    <textarea id="github_link" name="github_link" class="form-control">{{ $development->github_link }}</textarea>
                                    @error('github_link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> {{ __('main.BUTTON_UPDATE') }}</button>
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

@push('scripts')
    <script>
        new AirDatepicker('#year', {
            view: 'years',
            minView: 'years',
            dateFormat: 'yyyy',
        });
    </script>
@endpush
