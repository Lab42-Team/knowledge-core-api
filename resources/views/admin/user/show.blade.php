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
                                {{ __('user.USER_PAGE.VIEW', ['id' => $user->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('user.USER_PAGE.VIEW', ['id' => $user->id]) }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.user.index') }}" role="button">
                                    <i class="bi bi-arrow-90deg-left"></i> {{ __('main.BUTTON_BACK') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.user.edit', $user->id) }}" role="button">
                                    <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                </a>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.user.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.ID') }}</b></td>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.NAME') }}</b></td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.PASSWORD') }}</b></td>
                                        <td>{{ $user->password }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.EMAIL') }}</b></td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.ROLE') }}</b></td>
                                        <td>{{ User::getRoleName($user->role) }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.STATUS') }}</b></td>
                                        <td>{{ User::getStatusName($user->status) }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.FULL_NAME') }}</b></td>
                                        @if (!empty($user->full_name))
                                            <td>{{ $user->full_name }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.LAST_LOGIN_DATE') }}</b></td>
                                        <td>{{ $user->last_login_date }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('user.USER_MODEL.LOGIN_IP') }}</b></td>
                                        <td>{{ $user->login_ip }}</td>
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
