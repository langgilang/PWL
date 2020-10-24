@include('layout.script')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1">Login</a>
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope">
                                    @error('email')
                                    <strong>{{ $message }}</strong> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock" role="alert">
                                    @error('password')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>                         
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                
                </p>
                    @if (Route::has('register'))
                    <button class="btn btn-block btn-danger">
                        <a class="text-center" href="{{ route('register') }}">
                            <font style="color: white">Register</font>
                        </a>
                    </button>
                    @endif
                </p>
                {{-- <p class="mb-1">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                <p> --}}
                    

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</body>

</html>
