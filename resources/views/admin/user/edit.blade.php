<?php

use App\Models\User;

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">{{ __('user.USER_PAGE.LIST') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('user.USER_PAGE.EDIT', ['id' => $user->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('user.USER_PAGE.EDIT', ['id' => $user->id]) }}</h3>
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
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('user.USER_MODEL.NAME') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('user.USER_MODEL.PASSWORD') }}</label>
                                    <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('user.USER_MODEL.EMAIL') }}</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">{{ __('user.USER_MODEL.ROLE') }}</label>
                                    <select class="form-select" name="role" id="role">
                                        @foreach($roles as $key => $role)
                                            @if($role == User::getRoleName($user->role))
                                                <option selected value="{{ $key }}">{{ $role }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $role }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('user.USER_MODEL.STATUS') }}</label>
                                    <select class="form-select" name="status" id="status">
                                        @foreach($statuses as $key => $status)
                                            @if($status == User::getStatusName($user->status))
                                                <option selected value="{{ $key }}">{{ $status }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $status }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">{{ __('user.USER_MODEL.FULL_NAME') }}</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $user->full_name }}">
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
