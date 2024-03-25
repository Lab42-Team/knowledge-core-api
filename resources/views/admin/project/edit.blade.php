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
                                {{ __('project.PROJECT_PAGE.EDIT', ['id' => $project->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('project.PROJECT_PAGE.EDIT', ['id' => $project->id]) }}</h3>
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
                        <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('project.PROJECT_MODEL.NAME') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $project->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('project.PROJECT_MODEL.DESCRIPTION') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ $project->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">{{ __('project.PROJECT_MODEL.TYPE') }}</label>
                                    <select class="form-select" name="type" id="type">
                                        @foreach($types as $key => $type)
                                            @if($type == Project::getTypeName($project->type))
                                                <option selected value="{{ $key }}">{{ $type }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $type }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('project.PROJECT_MODEL.STATUS') }}</label>
                                    <select class="form-select" name="status" id="status">
                                        @foreach($statuses as $key => $status)
                                            @if($status == Project::getStatusName($project->status))
                                                <option selected value="{{ $key }}">{{ $status }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $status }}</option>
                                            @endif
                                        @endforeach
                                    </select>
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
