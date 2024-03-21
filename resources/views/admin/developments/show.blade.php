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
                                        @if (!empty($development->description))
                                            <td>{{ $development->description }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.YEAR') }}</b></td>
                                        @if (!empty($development->year))
                                            <td>{{ Carbon::parse($development->year )->format('Y') }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.AUTHORS') }}</b></td>
                                        @if (!empty($development->authors))
                                            <td>{{$development->authors}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.PUBLICATIONS') }}</b></td>
                                        @if (!empty($development->publications))
                                            <td>{{$development->publications}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.REQUIREMENTS') }}</b></td>
                                        @if (!empty($development->requirements))
                                            <td>{{$development->requirements}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.PRACTICAL_APPLICATION') }}</b></td>
                                        @if (!empty($development->practical_application))
                                            <td>{{$development->practical_application}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.VERSION_HISTORY') }}</b></td>
                                        @if (!empty($development->version_history))
                                            <td>{{$development->version_history}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.DEMO_VIDEOS') }}</b></td>
                                        @if (!empty($development->demo_videos))
                                            <td>{{$development->demo_videos}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.SOFTWARE_LINK') }}</b></td>
                                        @if (!empty($development->software_link))
                                            <td>{{$development->software_link}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.DOCUMENTATION_LINK') }}</b></td>
                                        @if (!empty($development->documentation_link))
                                            <td>{{$development->documentation_link}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('developments.DEVELOPMENTS_MODEL.GITHUB_LINK') }}</b></td>
                                        @if (!empty($development->github_link))
                                            <td>{{$development->github_link}}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
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
