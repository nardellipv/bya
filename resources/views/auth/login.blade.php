<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/admin/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('assets/admin/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/admin/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">
                <div
                    class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
                    <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                        <div class="card-body">
                            <img src="{{ asset('assets/admin/images/auth/login1.png') }}"
                                class="img-fluid auth-img-cover-login" width="650" alt="">
                        </div>
                    </div>

                </div>

                <div
                    class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-1">
                    <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                        <div class="card-body p-sm-5">
                            <img src="{{ asset('assets/web/img/logoSinFondo.png') }}" class="mb-4" width="145" alt="">
                            <h4 class="fw-bold">Iniciar Sesión</h4>
                            <p class="mb-0">Por Favor ingrese las credenciales correctas</p>

                            <div class="form-body mt-4">
                                <form class="row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="jhon@example.com" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">

                                                <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="inputChoosePassword" placeholder="Enter Password"
                                                name="password" required autocomplete="current-password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class="bi bi-eye-slash-fill"></i></a>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">

                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Recordarme</label>

                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end"> <a href="{{ route('forgot-password') }}">¿Olvide mi password?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-grd-primary">Ingresar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>
</body>

</html>
