<?php

use App\Models\News;
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">{{ __('news.NEWS_PAGE.LIST') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('news.NEWS_PAGE.VIEW', ['id' => $news->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('news.NEWS_PAGE.VIEW', ['id' => $news->id]) }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.news.index') }}" role="button">
                                    <i class="bi bi-arrow-90deg-left"></i> {{ __('main.BUTTON_BACK') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.news.edit', $news->id) }}" role="button">
                                    <i class="bi bi-pen"></i> {{ __('main.BUTTON_EDIT') }}
                                </a>
                                <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> {{ __('main.BUTTON_DELETE') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.news.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>{{ __('news.NEWS_MODEL.ID') }}</b></td>
                                        <td>{{ $news->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('news.NEWS_MODEL.NAME') }}</b></td>
                                        <td>{{ $news->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('news.NEWS_MODEL.STATUS') }}</b></td>
                                        <td>{{ News::getStatusName($news->status) }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('news.NEWS_MODEL.DATE') }}</b></td>
                                        <td>{{ Carbon::parse($news->date)->format('d.m.Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('news.NEWS_MODEL.DESCRIPTION') }}</b></td>
                                        <td>{{ $news->description }}</td>
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
