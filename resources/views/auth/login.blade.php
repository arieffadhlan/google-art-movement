<x-app-layout title="Login">
    @section('content')
        <div class="container">
            @if (session()->has('success'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" style="height: 56px;"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-3" role="img" width="24px" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow">
                        <div class="card-header fs-5 fw-bold">Form Login</div>
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('login') }}" class="d-flex flex-column">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label for="username" class="form-label fw-bold">
                                            Username<sup style="color: red">*</sup>
                                        </label>
                                        <input id="username" name="username" type="text" value="{{ old('username') }}"
                                            class="input form-control" placeholder="Username" aria-label="Username"
                                            aria-describedby="basic-addon1" required autofocus />
                                        @error('username')
                                            <div class="fw-bold text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <label for="password" class="form-label fw-bold mt-2">
                                    Password<sup style="color: red">*</sup>
                                </label>
                                <div class="input-group">
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password" aria-label="password" aria-describedby="basic-addon1"
                                        required />
                                    <span class="input-group-text" onclick="password_show_hide();">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="fw-bold text-danger mt-1">{{ $message }}</div>
                                @enderror

                                <div class="form-group row mt-2 mb-4">
                                    <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-link p-0 text-decoration-none"
                                            href="{{ route('resetPassword') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-3 text-center">
                                    Belum punya akun? Silakan <a class="btn btn-link text-decoration-none p-0 border-0"
                                        href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
