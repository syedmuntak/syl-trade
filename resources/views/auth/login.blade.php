<!DOCTYPE html>
<html>
<head>
    <title>Login || Hiring Service</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="{{ asset('/') }}fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/main5739.css?version=4.5.0" rel="stylesheet">
    <style>
        body:before {
    background: linear-gradient(to right, #36dbff, #d8d0dd, #b9999b);
}
    </style>
</head>

<body class="auth-wrapper" style="background: linear-gradient(to right, #36dbff, #d8d0dd, #b9999b);">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w"><a href="#"><img alt="" src="{{ asset('/') }}img/logo-big.png"></a></div>
            <h4 class="auth-header">Login</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your username or email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter your password" name="password" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w">
                    <button type="submit" class="btn btn-primary">Log me in</button>
                    <a href="{{ url('/') }}" class="btn btn-danger" title="back">Back to Home</a>
                    <div class="form-check-inline mt-5">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            Remember Me
                        </label>
                    </div>
                    <small>New Here? <a href="{{ route('register') }}">Register Here</a></small><br>
                    <small>New Here? <a href="{{ route('password.request') }}">Forget Password?</a></small><br>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
