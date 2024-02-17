@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление ядра знаний</h1>
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
                    <div class="col-12">
                        <form action="{{ route('admin.knowledge-core.store') }}" method="POST" class="col-4">
                            @csrf
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description"></textarea>
                                @error('description')
                                    <div class="text-danger">Текст ошибки</div>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                            </div>
                            <div class="form-group" >
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group" >
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label for="references">References</label>
                                <textarea name="references" class="form-control" id="references"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lab_link">Lab link</label>
                                <textarea name="lab_link" class="form-control" id="lab_link"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="github_link">Github link</label>
                                <textarea name="github_link" class="form-control" id="github_link"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Добавить">
                            <!--<button type="submit" class="btn btn-primary">Добавить</button>-->
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
