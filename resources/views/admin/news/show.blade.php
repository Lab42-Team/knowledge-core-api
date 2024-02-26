<?php

use App\Models\News;

?>

@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Новость: {{ $news->id }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.news.index') }}" class="btn btn-block btn-primary">Назад</a>
                    </div>
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-block btn-success">Редактировать</a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger col-12">
                        </form>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $news->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>name</td>
                                            <td>{{ $news->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>description</td>
                                            <td>{{ $news->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>status</td>
                                            <td>{{ News::getStatusName($news->status) }}</td>
                                        </tr>
                                        <tr>
                                            <td>date</td>
                                            <td>{{ $news->date }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>











            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
