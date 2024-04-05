<?php

use App\Models\Project;

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">{{ __('project.PROJECT_PAGE.LIST') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('project.PROJECT_PAGE.VIEW', ['id' => $project->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('project.PROJECT_PAGE.VIEW', ['id' => $project->id]) }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.project.index') }}" role="button">
                                    <i class="bi bi-arrow-90deg-left"></i> {{ __('main.BUTTON_BACK') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.project.edit', $project->id) }}" role="button">
                                    <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                </a>
                                <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.project.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.ID') }}</b></td>
                                        <td>{{ $project->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.NAME') }}</b></td>
                                        <td>{{ $project->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.DESCRIPTION') }}</b></td>
                                        @if (!empty($project->description))
                                            <td>{{ $project->description }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.TYPE') }}</b></td>
                                        <td>{{ Project::getTypeName($project->type) }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.STATUS') }}</b></td>
                                        <td>{{ Project::getStatusName($project->status) }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('project.PROJECT_MODEL.USERS') }}</b></td>
                                        @if (count($project->users) > 0)
                                            <td>
                                                @foreach($project->users as $user)
                                                    {{ $user->name }} <br/>
                                                @endforeach
                                            </td>
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
