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
                                {{ __('user.USER_PAGE.ADD') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('user.USER_PAGE.ADD') }}</h3>
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
                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('user.USER_MODEL.NAME') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('user.USER_MODEL.PASSWORD') }}</label>
                                    <div class="input-group">
                                        <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" aria-describedby="basic-addon">
                                        <span class="input-group-text" id="basic-addon"><i class="bi bi-eye-slash" id="togglePassword" title="{{ __('user.BUTTON_PASSWORD.HIDE') }}"></i></span>
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('user.USER_MODEL.EMAIL') }}</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">{{ __('user.USER_MODEL.ROLE') }}</label>
                                    <select class="form-select" name="role" id="role">
                                        @foreach($roles as $key => $role)
                                            <option value="{{ $key }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('user.USER_MODEL.STATUS') }}</label>
                                    <select class="form-select" name="status" id="status">
                                        @foreach($statuses as $key => $status)
                                            <option value="{{ $key }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">{{ __('user.USER_MODEL.FULL_NAME') }}</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control" value="{{ old('full_name') }}">
                                    @error('full_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> {{ __('main.BUTTON_ADD') }}</button>
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
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // переключаем тип
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // переключаем значок
            this.classList.toggle("bi-eye");

            // переключаем название кнопки
            const title = togglePassword.getAttribute("title") === "{{ __('user.BUTTON_PASSWORD.HIDE') }}" ? "{{ __('user.BUTTON_PASSWORD.SHOW') }}" : "{{ __('user.BUTTON_PASSWORD.HIDE') }}";
            this.setAttribute("title", title);
        });
    </script>
@endpush
