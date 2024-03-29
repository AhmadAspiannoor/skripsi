<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }} - Login Siswa</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo/icon_1.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('template_asset/css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/admin_login_form.css') }}">


</head>

<body class="h-100">
    @include('sweetalert::alert')
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="container h-100">
        <div class="row h-100 flex-row align-items-center mt-3">
            <div class="col">

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $message)
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-danger alert-dismissible fade show " role="alert">

                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif


                <div class="row">
                    <div class="col">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="d-none d-md-block col-md-6">
                                        <div class="card kartu-1">
                                            <div class="card-body">
                                                <div class="isi-1">
                                                    <div class="judul">
                                                        <h6>Sistem Persamaan Linear Tiga Variabel</h6>
                                                    </div>
                                                    <div class="isi">
                                                        <h3>Login sebagai Siswa</h3>

                                                    </div>
                                                </div>

                                                <div class="isi-2-bawah">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col-3">

                                                                    <img src="{{ asset('image/logo/Siswa.png') }}"
                                                                        class="img-responsive" alt="">
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card-body">
                                                                        <p>Ayo Belajar ! anda sebagai siswa harus
                                                                            semangat !</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm col-md-6">
                                        <div class="row h-100 align-items-center">
                                            <div class="col">
                                                <h5>Halo, silahkan masukan informasi di bawah</h5>
                                                <form class="form" method="POST"
                                                    action="{{ route('siswa_login_post') }}">
                                                    @csrf
                                                    <div class="d-block d-md-none">
                                                        <h4>Login Sebagai Siswa</h4>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email-siswa">NIS</label>
                                                        <input type="number" class="form-control" id="email-siswa"
                                                            aria-describedby="email-desk" name="nip_nis"
                                                            value="{{ old('nip_nis') }}">
                                                        <small id="email-desk" class="form-text text-muted">Masukan
                                                            NIS
                                                            kalian</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password-siswa">Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control"
                                                                id="password-siswa" name="password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    onclick="password_show_hide();">
                                                                    <i class="fa fa-eye" id="show_eye"></i>
                                                                    <i class="fa fa-eye-slash d-none"
                                                                        id="hide_eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>




                                                    </div>

                                                    <button type="submit" class="btn">Login</button>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>


<!--**********************************
        Scripts
    ***********************************-->
<script src="{{ asset('template_asset/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('template_asset/js/custom.min.js') }}"></script>
<script src="{{ asset('template_asset/js/settings.js') }}"></script>
<script src="{{ asset('template_asset/js/gleek.js') }}"></script>
<script src="{{ asset('template_asset/js/styleSwitcher.js') }}"></script>

<script>
    function password_show_hide() {
        var x = document.getElementById("password-siswa");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
</script>

</html>
