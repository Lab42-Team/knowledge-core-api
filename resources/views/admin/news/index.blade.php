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
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('news.NEWS_PAGE.LIST') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('news.NEWS_PAGE.LIST') }}</h3>
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
                                <a class="btn btn-primary" href="{{ route('admin.news.create') }}" role="button">
                                    <i class="bi bi-plus-lg"></i> {{ __('main.BUTTON_ADD') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.news.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                <tr>
                                    <th>{{ __('news.NEWS_MODEL.ID') }}</th>
                                    <th>{{ __('news.NEWS_MODEL.NAME') }}</th>
                                    <th>{{ __('news.NEWS_MODEL.STATUS') }}</th>
                                    <th>{{ __('news.NEWS_MODEL.DATE') }}</th>
                                    <th colspan="3">{{ __('main.ACTIONS') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $one_news)
                                    <tr class="align-middle">
                                        <td>{{ $one_news->id }}</td>
                                        <td>{{ $one_news->name }}</td>
                                        <td>{{ News::getStatusName($one_news->status) }}</td>
                                        <td>{{ Carbon::parse($one_news->date)->format('d.m.Y H:i') }}</td>
                                        <td><a title="{{ __('main.BUTTON_VIEW') }}" href="{{ route('admin.news.show', $one_news->id) }}"><i class="bi bi-eye-fill"></i></a></td>
                                        <td><a title="{{ __('main.BUTTON_EDIT') }}" href="{{ route('admin.news.edit', $one_news->id) }}"><i class="bi bi-pen-fill"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.news.destroy', $one_news->id) }}" method="POST">
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

                        <div class="card-footer clearfix">
                            <div>
                                {{ $news->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
