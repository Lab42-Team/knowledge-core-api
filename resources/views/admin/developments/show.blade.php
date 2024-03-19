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
                                {{ __('developments.DEVELOPMENTS_PAGE.VIEW', ['id' => $development->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('developments.DEVELOPMENTS_PAGE.VIEW', ['id' => $development->id]) }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.developments.index') }}" role="button">
                                    <i class="bi bi-arrow-90deg-left"></i> {{ __('main.BUTTON_BACK') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.developments.edit', $development->id) }}" role="button">
                                    <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                </a>
                                <form action="{{ route('admin.developments.destroy', $development->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.developments.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.ID') }}</b></td>
                                        <td>{{ $development->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.NAME') }}</b></td>
                                        <td>{{ $development->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.DESCRIPTION') }}</b></td>
                                        <td>{{ $development->description }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.YEAR') }}</b></td>
                                        <td>{{ Carbon::parse($development->year )->format('Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.AUTHORS') }}</b></td>
                                        <td>{{ $development->authors }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.PUBLICATIONS') }}</b></td>
                                        <td>{{ $development->publications }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.REQUIREMENTS') }}</b></td>
                                        <td>{{ $development->requirements }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.PRACTICAL_APPLICATION') }}</b></td>
                                        <td>{{ $development->practical_application }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.VERSION_HISTORY') }}</b></td>
                                        <td>{{ $development->version_history }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.DEMO_VIDEOS') }}</b></td>
                                        <td>{{ $development->demo_videos }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.SOFTWARE_LINK') }}</b></td>
                                        <td>{{ $development->software_link }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.DOCUMENTATION_LINK') }}</b></td>
                                        <td>{{ $development->documentation_link }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.GITHUB_LINK') }}</b></td>
                                        <td>{{ $development->github_link }}</td>
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
