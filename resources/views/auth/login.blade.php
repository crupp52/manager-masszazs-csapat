@extends('dashboard.authBase')

@section('content')

    <div class="container">
        {{--        @include('components.messages')--}}
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Bejelentkezés</h1>
                            {{--                            <p class="text-muted">Sign In to your account</p>--}}
                            @include('components.messages')
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-user"></i>
                      </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Email cím" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-key"></i>
                      </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="Jelszó" name="password" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Bejelentkezés</button>
                                    </div>
                            </form>
                            {{--                            <div class="col-6 text-right">--}}
                            {{--                                <a href="{{ route('password.request') }}" class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('javascript')

@endsection
