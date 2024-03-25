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
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('project.PROJECT_PAGE.LIST') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('project.PROJECT_PAGE.LIST') }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.project.create') }}" role="button">
                                    <i class="bi bi-plus-lg"></i> {{ __('main.BUTTON_ADD') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.project.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                <tr>
                                    <th>{{ __('project.PROJECT_MODEL.ID') }}</th>
                                    <th>{{ __('project.PROJECT_MODEL.NAME') }}</th>
                                    <th>{{ __('project.PROJECT_MODEL.DESCRIPTION') }}</th>
                                    <th>{{ __('project.PROJECT_MODEL.TYPE') }}</th>
                                    <th>{{ __('project.PROJECT_MODEL.STATUS') }}</th>
                                    <th colspan="3">{{ __('main.ACTIONS') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr class="align-middle">
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->name }}</td>

                                        @if (!empty($project->description))
                                            <td>{{ $project->description }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        <td>{{ Project::getTypeName( $project->type ) }}</td>
                                        <td>{{ Project::getStatusName( $project->status ) }}</td>
                                        <td><a title="{{ __('main.BUTTON_VIEW') }}" href="{{ route('admin.project.show', $project->id) }}"><i class="bi bi-eye-fill"></i></a></td>
                                        <td><a title="{{ __('main.BUTTON_EDIT') }}" href="{{ route('admin.project.edit', $project->id) }}"><i class="bi bi-pen-fill"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent" title="{{ __('main.BUTTON_DELETE') }}">
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
