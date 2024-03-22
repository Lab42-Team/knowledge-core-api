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
                                {{ __('news.NEWS_PAGE.EDIT', ['id' => $news->id]) }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('news.NEWS_PAGE.EDIT', ['id' => $news->id]) }}</h3>
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
                        <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('news.NEWS_MODEL.NAME') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $news->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('news.NEWS_MODEL.DESCRIPTION') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ $news->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('news.NEWS_MODEL.STATUS') }}</label>
                                    <select class="form-select" name="status" id="status">
                                        @foreach($statuses as $key => $status)
                                            @if($status == News::getStatusName($news->status))
                                                <option selected value="{{ $key }}">{{ $status }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $status }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">{{ __('news.NEWS_MODEL.DATE') }}</label>
                                    <input type="text" id="date" name="date" class="form-control" value="{{ Carbon::parse($news->date)->format('d.m.Y H:i') }}">
                                    @error('date')
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
        var locale = '{{ config('app.locale') }}';
        if (locale == 'EN') {
            new AirDatepicker('#date', {
                timepicker: true,
                locale: {
                    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    today: 'Today',
                    clear: 'Clear',
                    dateFormat: 'dd.MM.yyyy',
                    timeFormat: 'HH:mm',
                    firstDay: 0
                },
            });
        } else {
            new AirDatepicker('#date', {
                timepicker: true,
            });
        }
    </script>
@endpush
