<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Pendaftaran MGM</title>
    <link rel="icon" href="/HalamanAgen" sizes="32x32">
    <!-- <link href="https://penerimaan.uai.ac.id/file/template/limitless/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <!--Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/app.css">
    <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/core.css">

    <!-- CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">

    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/app.js"></script>
    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/core.js"></script>
    <script src="https://penerimaan.uai.ac.id/file/template/limitless/js/plugins/loaders/blockui.min.js"></script>

    <script src="https://kit.fontawesome.com/929e18ab79.js" crossorigin="anonymous"></script>


    <!-- CDN -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}

</head>

<body>
    <!-- <div class="pageloader"></div>
        <div class="infraloader is-active"></div>-->

    <!-- Wrapper -->
    <div class="login-wrapper columns is-gapless">
        <!-- Form section -->
        <div class="column is-7">
            <div class="hero is-fullheight">
                <div class="hero-heading">
                    <div class="auth-logo mt-30 has-text-centered">
                        <a href="/"><img class="dark-logo switcher-logo" src="https://penerimaan.uai.ac.id/file/images/logouai.png" alt="" width="180"></a>
                    </div>
                </div>
                <div class="hero-body mb-80 ">
                    <div class="container">
                        <div class="columns">
                            <div class="column"></div>
                            <div class="column is-5 has-text-centered">
                                <div class="auth-content">
                                    <h2 class="mb-3">Registrasi Agen</h2>
                                    <p>Daftar akun agen Anda sekarang!</p>
                                </div>
                                <!-- Login Form -->
                                <form action="/RegistrasiAgen" method="POST">
                                    @csrf
                                    <div id="signin-form" class="login-form animated preFadeInLeft fadeInLeft">
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control has-icons-right">
                                                <input class="input is-medium has-shadow" type="text" name="Name" placeholder="Nama" />
                                                <span class="icon is-medium is-right">
                                                    <i data-feather="user"></i></span>
                                            </div>
                                        </div>
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control has-icons-right">
                                                <input class="input is-medium has-shadow" type="text" name="Email" placeholder="Email" />
                                                <span class="icon is-medium is-right">
                                                    <i data-feather="mail"></i></span>
                                            </div>
                                        </div>
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control has-icons-right">
                                                <input class="input is-medium has-shadow" type="password" name="Password" placeholder="Password" />
                                                <span class="icon is-medium is-right">
                                                    <i data-feather="lock">lock</i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control has-icons-right">
                                                <input class="input is-medium has-shadow" type="password" name="Password" placeholder="Confirm Password" />
                                                <span class="icon is-medium is-right">
                                                    <i data-feather="lock">lock</i>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <p class="control login">
                                            <button class="button button-cta primary-btn btn-align-lg is-bold is-fullwidth rounded raised no-lh">
                                                Daftar
                                            </button>
                                        </p>
                                    </div>
                                </form>
                                <!-- <p class="has-text-centered">Lupa Password ? <a href="https://penerimaan.uai.ac.id/login/lupa_password">Klik disini.</a></p>    -->
                            </div>
                            <div class="column"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image section (hidden on mobile) -->
        <div class="column login-column is-12  hero-banner">
            <div class="hero is-fullheight is-theme-primary is-relative">
                <div class="colums">
                    <div class="column is-6">
                        <!--section 1 !-->
                        <div class="section-title has-text-centered" style="margin-top: 110px;">
                            <div
                                class="
                                signup-context
                                primary-card
                                light-raised
                                padding-50
                                "
                            >
                                <h2 class="subtitle is-light is-4 has-text-left">
                                    <i data-feather="info"></i> Petunjuk
                                </h2>
                                <!-- Icon block -->
                                <div class="argument">
                                    <div class="icon">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="argument-text light-text">
                                        Sudah punya akun agen silahkan, <a href="/agen/login" style="color: black;">Klik disini</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

</html>