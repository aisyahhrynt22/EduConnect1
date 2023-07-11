
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Penerimaan Mahasiswa Baru UAI</title>
        <link rel="icon" href="https://uai.ac.id/wp-content/uploads/2019/07/Logouai-icon.png" sizes="32x32">
	    <!-- <link href="https://penerimaan.uai.ac.id/file/template/limitless/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->


        <!--Core CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/app.css">
        <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/core.css">

        <!-- CDN -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">

        <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/app.js"></script>
        <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/core.js"></script>
	    <script src="https://penerimaan.uai.ac.id/file/template/limitless/js/plugins/loaders/blockui.min.js"></script>


        <!-- CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
     
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
            <div class="hero-body">
            <div class="container">
            <!-- 2 columns -->
          
                <div class="columns is-vcentered">
                    <div class="column is-9 is-offset-1">
                        <!-- <div class="flex-card light-bordered light-raised">
                            <div class="card-body"> -->
                                <div class="auth-content has-text-centered">
                                    <h3 class="title is-3 is-styled">Form Pendaftaran </br> Mahasiswa </h3>
                                        <p class="title">Silakan melengkapi form untuk mendaftar ke UAI.</p>
                                    <!-- <hr> -->
                                </div>
                                <form id="signupform">
                                    <input  type="hidden" id="jenjang" name="jenjang" value="Kelas Karyawan"/>
                                    <div class="columns pt-8">
                                        <div class="column" style="display: flex;">
                                            <div class="field">
                                                <div class="control">
                                                    <label>Nama Lengkap <span style='font-size:12px;'>(Sesuai KTP)</span> </label>
                                                    <input class="input is-medium mt-3" type="text" id="nama_lengkap" name="nama_lengkap" tabindex="1"/>
                                                </div>
                                            </div>
                                            <div class="field" style="margin-left: 10px;">
                                                <div class="control">
                                                    <label>Email <span style='font-size:12px;'>(Gunakan Email Aktif)</span> </label>
                                                    <input class="input is-medium mt-3" type="email" id="email" name="email" tabindex="2"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns pt-8">
                                        <div class="column" style="display: flex;">
                                            <div class="field">
                                                <div class="control">
                                                    <label>Password</label>
                                                    <input class="input is-medium mt-3" type="password" id="password" name="password"  tabindex="3"/>
                                                </div>
                                            </div>
                                            <div class="field" style="margin-left: 10px;">
                                                <div class="control">
                                                    <label>Ulangi Password</label>
                                                    <input class="input is-medium mt-3" type="password" id="repassword" name="repassword"  tabindex="4"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns pt-8">
                                        <div class="column" style="display: flex;">
                                            <div class="field">
                                                <div class="control">
                                                    <label>No. Telp Calon Mahasiswa</label>
                                                    <input class="input is-medium mt-3" type="password" id="password" name="password"  tabindex="5"/>
                                                </div>
                                            </div>
                                            <div class="field" style="margin-left: 10px;">
                                                <div class="control">
                                                    <label>No. Telp Orang Tua</label>
                                                    <input class="input is-medium mt-3" type="password" id="repassword" name="repassword"  tabindex="6"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns pt-8">
                                        <div class="column" style="display: flex;">
                                            <div class="field">
                                                <div class="control">
                                                    <label>Kode Reveral</label>
                                                    <input class="input is-medium mt-3" type="text" id="Kode_Reveral" name="Kode_Reveral"  tabindex="5"/>
                                                </div>
                                            </div>
                                             
                                            <div class="field" style="margin-left: 10px;">
                                                <div class="control">
                                                    <label>Nama Agen</label>
                                                    <input class="input is-medium mt-3" type="tel" id="no_telp_ortu" name="no_telp_ortu"  tabindex="6"/>
                                                </div>
                                            </div>
                                                                                    </div>
                                    </div>
                                    <div class="has-text-right">
                                        <!-- <button class="button is-light button-cta is-bold no-lh">
                                            Cancel
                                        </button> -->
                                        <button tabindex="7" type="submit" id="daftarBtn"
                                            class="
                                            button
                                            btn-align
                                            button-cta
                                            is-bold
                                            no-lh
                                            raised
                                            primary-btn
                                            "
                                        >
                                            Register
                                        </button>
                                    </div>
                                </form>
                                <!-- <p>Ada Pertanyaan ? <a href="#">Klik disini.</a></p>
                                <p>Lupa Password ? <a href="https://penerimaan.uai.ac.id/login/lupa_password">Klik disini.</a></p> -->
                            <!-- </div>
                        </div> -->
                    </div>
                </div>
                <!-- 2 columns -->
        
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
                            padding-70
                            "
                        >
                            <h2 class="subtitle is-light is-4 has-text-left">
                                <i data-feather="info"></i> Petunjuk
                            </h2>
                            <!-- Icon block -->
                            <div class="argument">
                                <div class="icon">
                                    <i data-feather="lock"></i>
                                </div>
                                <div class="argument-text light-text">
                                    Lupa password silahkan, <a href="https://penerimaan.uai.ac.id/login/lupa_password" style="color: black;">Klik disini</a>
                                </div>
                            </div>
                            <!-- Icon block -->
                            <div class="argument">
                                <div class="icon">
                                    <i data-feather="lock"></i>
                                </div>
                                <div class="argument-text light-text">
                                                                            Login akun silahkan, <a href="https://penerimaan.uai.ac.id/login" style="color: black;">Klik disini</a>
                                                                    </div>
                            </div>
                            <!-- Icon block -->
                            <div class="argument">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="argument-text light-text">
                                    Informasi program studi, <a href="https://penerimaan.uai.ac.id/home/Brosur" style="color: black;">Klik disini</a>
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


<script>
    $(function(){
        $('#daftarBtn').click(function(){

                
            $('#nama_lengkap').focus();
            $('#signupform').on('submit', function(e) {
            e.preventDefault();
                var nama_lengkap = $('#nama_lengkap').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var repassword = $('#repassword').val();
                var no_telp = $('#no_telp').val();
                var no_telp_ortu = $('#no_telp_ortu').val();

                var jenjang = $('#jenjang').val();

                // var checkCaptch = true;
            if (nama_lengkap == '') {
                $('#nama_lengkap').focus();
                swal('Warning', 'Nama Lengkap tidak boleh kosong.', 'warning');
                return false;
            }
            if (email == '') {
                $('#email').focus();
                swal('Warning', 'Email tidak boleh kosong.', 'warning');
                return false;
            }
            if (password == '') {
                $('#password').focus();
                swal('Warning', 'Password tidak boleh kosong.', 'warning');
                return false;
            }
            if (repassword == '') {
                $('#repassword').focus();
                swal('Warning', 'Ulangi Password tidak boleh kosong.', 'warning');
                return false;
            }
            if (no_telp == '') {
                $('#no_telp').focus();
                swal('Warning', 'No.Telp Camaru tidak boleh kosong.', 'warning');
                return false;
            }

             
                if (no_telp_ortu == ''){
                    $('#no_telp_ortu').focus();
                    swal('Warning', 'No.Telp Ortu tidak boleh kosong.', 'warning');
                    return false;
                }
            
            $.ajax({
                url: "https://penerimaan.uai.ac.id/home/camaru_registration",
                method: "POST",
                data: {
                    nama_lengkap: nama_lengkap,
                    email: email,
                    password: password,
                    repassword: repassword,
                    no_telp: no_telp,
                    no_telp_ortu: no_telp_ortu,
                    jenjang: jenjang
                },
                dataType: "json",
                beforeSend:function(){
                    $.blockUI({ message: 'Tunggu sebentar, sedang menyimpan data...', css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }, timeout: 6000 });
                },
                success: function(result) {
                    $.unblockUI();
                    if (result.code == 0) {
                        // swal({
                        //     title: result.title,
                        //     text: result.message,
                        //     type: "success",
                        //     // timer: 5000,
                        // },function(){
                        //     window.location.replace(result.page);
                        // });
                        window.location.replace(result.page);
                    }else {
                        swal({
                            title: result.title,
                            text: result.message,
                            type: "error"
                        }, function(){
                            $('#email').focus();
                        });
                    }
                }
            });
        });
    });
})
</script>
        
        <!-- Side navigation -->
        <div class="side-navigation-menu">
            <!-- Categories menu -->
            <div class="category-menu-wrapper">
                <!-- Menu -->
                <ul class="categories">
                    <li class="square-logo"><img src="https://penerimaan.uai.ac.id/file/template/bulkit/img/logos/square-white.svg" alt=""></li>
                    <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                    <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
                    <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
                </ul>
                <!-- Menu -->
        
                <ul class="author">
                    <li>
                        <!-- Theme author -->
                        <a href="https://cssninja.io" target="_blank">
                            <img class="main-menu-author" src="https://penerimaan.uai.ac.id/file/template/bulkit/img/logos/cssninja.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Categories menu -->
        
            <!-- Navigation menu -->
            <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Demo pages</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation Body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency</a>
                        <ul>
                            <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                            <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                            <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                            <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                            <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                            <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup</a>
                        <ul>
                            <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                            <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                            <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                            <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                            <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                            <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Software</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit15-landing-5.html">Conference v1</a></li>
                            <li><a class="is-submenu" href="/kit15-landing-6.html">Conference v2</a></li>
                            <li><a class="is-submenu" href="/kit1-landing.html">Projects v1</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-2.html">Healthcare v1</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-3.html">Healthcare v2</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-4.html">Business v1</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-5.html">Business v2</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-6.html">Business v3</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-7.html">Business v4</a></li>
                            <li><a class="is-submenu" href="/kit1-landing-8.html">Business v5</a></li>
                            <li><a class="is-submenu" href="/kit1-features.html">Features v1</a></li>
                            <li><a class="is-submenu" href="/kit1-features-2.html">Features v2</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timer</span>Freelancer</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit2-landing-9.html">Freelancer v1</a></li>
                            <li><a class="is-submenu" href="/kit2-landing.html">Freelancer v2</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-2.html">Freelancer v3</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-3.html">Freelancer v4</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-10.html">Freelancer v5</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-11.html">Freelancer v6</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-4.html">Freelancer v7</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-5.html">Freelancer v8</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-6.html">Freelancer v9</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-7.html">Freelancer v10</a></li>
                            <li><a class="is-submenu" href="/kit2-landing-8.html">Freelancer v11</a></li>
                            <li><a class="is-submenu" href="/kit2-features.html">Features v1</a></li>
                            <li><a class="is-submenu" href="/kit2-features-2.html">Features v2</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">voice_chat</span>Videoconference</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit16-landing.html">Videoconference v1</a></li>
                            <li><a class="is-submenu" href="/kit16-landing-2.html">Videoconference v2</a></li>
                            <li><a class="is-submenu" href="/kit3-landing.html">Chat v1</a></li>
                            <li><a class="is-submenu" href="/kit3-landing-2.html">Chat v2</a></li>
                            <li><a class="is-submenu" href="/kit3-features.html">Features v1</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">domain</span>Business</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit17-landing.html">Crypto v1</a></li>
                            <li><a class="is-submenu" href="/kit17-landing-2.html">Crypto v2</a></li>
                            <li><a class="is-submenu" href="/kit17-landing-3.html">Crypto v3</a></li>
                            <li><a class="is-submenu" href="/kit17-landing-4.html">Crypto v4</a></li>
                            <li><a class="is-submenu" href="/kit15-landing.html">Business v1</a></li>
                            <li><a class="is-submenu" href="/kit15-landing-2.html">Business v2</a></li>
                            <li><a class="is-submenu" href="/kit15-landing-3.html">Business v3</a></li>
                            <li><a class="is-submenu" href="/kit15-landing-4.html">Business v4</a></li>
                            <li><a class="is-submenu" href="/kit10-landing.html">Banking v1</a></li>
                            <li><a class="is-submenu" href="/kit10-landing-2.html">Banking v2</a></li>
                            <li><a class="is-submenu" href="/kit10-landing-3.html">Banking v3</a></li>
                            <li><a class="is-submenu" href="/kit18-landing.html">Car Rental v1</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">shopping_cart</span>Ecommerce</a>
                        <ul>
                            <li><a class="is-submenu" href="/commerce-home.html">Shop page</a></li>
                            <li><a class="is-submenu" href="/commerce-product-landing.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/commerce-product-landing-2.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                            <li><a class="is-submenu" href="/commerce-cart.html">Cart</a></li>
                            <li><a class="is-submenu" href="/commerce-payment-flow.html">Payment</a></li>
                            <li><a class="is-submenu" href="/kit11-landing.html">SaaS v1</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-2.html">SaaS v2</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-3.html">SaaS v3</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-4.html">SaaS v4</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-5.html">SaaS v5</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-6.html">SaaS v6</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-7.html">SaaS v7</a></li>
                            <li><a class="is-submenu" href="/kit11-landing-8.html">SaaS v8</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Services</a>
                        <ul>
                            <li><a class="is-submenu" href="kit12-landing.html">Consulting v1</a></li>
                            <li><a class="is-submenu" href="kit12-landing-2.html">Consulting v2</a></li>
                            <li><a class="is-submenu" href="kit12-landing-3.html">Consulting v3</a></li>
                            <li><a class="is-submenu" href="kit12-landing-4.html">Consulting v4</a></li>
                            <li><a class="is-submenu" href="kit4-landing.html">HR v1</a></li>
                            <li><a class="is-submenu" href="kit4-landing-2.html">HR v2</a></li>
                            <li><a class="is-submenu" href="kit5-landing.html">Collaboration v1</a></li>
                            <li><a class="is-submenu" href="kit5-features.html">Collaboration v2</a></li>
                            <li><a class="is-submenu" href="kit6-landing.html">Collaboration v3</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Jobs</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit13-landing.html">Jobs v1</a></li>
                            <li><a class="is-submenu" href="/kit13-landing-2.html">Jobs v2</a></li>
                            <li><a class="is-submenu" href="/kit8-landing.html">Work v1</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-1.html">Work v2</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-5.html">Work v3</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-2.html">Work v4</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-6.html">Work v5</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-3.html">Work v6</a></li>
                            <li><a class="is-submenu" href="/kit8-landing-4.html">Work v7</a></li>
                            <li><a class="is-submenu" href="/kit14-landing.html">Development v1</a></li>
                            <li><a class="is-submenu" href="/kit14-landing-3.html">Development v2</a></li>
                            <li><a class="is-submenu" href="/kit14-landing-2.html">Development v3</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a class="parent-link" href="#">
                            <span class="material-icons">people</span>Customers</a>
                        <ul>
                            <li><a class="is-submenu" href="/kit7-landing.html">CRM v1</a></li>
                            <li><a class="is-submenu" href="/kit7-landing-alt.html">CRM v2</a></li>
                            <li><a class="is-submenu" href="/kit7-landing-3.html">CRM v3</a></li>
                            <li><a class="is-submenu" href="/kit7-landing-4.html">CRM v4</a></li>
                            <li><a class="is-submenu" href="/kit7-landing-5.html">CRM v5</a></li>
                            <li><a class="is-submenu" href="/kit9-landing.html">CRM v6</a></li>
                            <li><a class="is-submenu" href="/kit9-landing-2.html">CRM v7</a></li>
                            <li><a class="is-submenu" href="/kit9-landing-3.html">CRM v8</a></li>
                            <li><a class="is-submenu" href="/kit9-landing-4.html">CRM v9</a></li>
                            <li><a class="is-submenu" href="/kit8-jobs.html">Job List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Navigation menu -->
            <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Sub Pages</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">account_circle</span>Personal</a>
                        <ul>
                            <li><a class="is-submenu" href="/profile-1.html">Profile v1</a></li>
                            <li><a class="is-submenu" href="/profile-2.html">Profile v2</a></li>
                            <li><a class="is-submenu" href="/profile-3.html">Profile v3</a></li>
                            <li><a class="is-submenu" href="/profile-4.html">Profile v4</a></li>
                            <li><a class="is-submenu" href="/profile-5.html">Profile v5</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">shopping_cart</span>Commerce</a>
                        <ul>
                            <li><a class="is-submenu" href="/commerce-home.html">Shop Home</a></li>
                            <li><a class="is-submenu" href="/commerce-product-landing.html">Product landing v1</a></li>
                            <li><a class="is-submenu" href="/commerce-product-landing-2.html">Product landing v2</a></li>
                            <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                            <li><a class="is-submenu" href="/commerce-cart.html">Cart page</a></li>
                            <li><a class="is-submenu" href="/commerce-payment-flow.html">Checkout page</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                        <ul>
                            <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                            <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                            <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                        <ul>
                            <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                            <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                            <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                            <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                            <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                        <ul>
                            <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                            <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                            <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                            <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                            <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                            <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                            <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                            <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                            <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                            <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a class="parent-link has-new" href="#"><span class="material-icons">verified_user</span>Authentication</a>
                        <ul>
                            <li><a class="is-submenu" href="/startup-login.html">Login v1</a></li>
                            <li><a class="is-submenu" href="/startup-login-2.html">Login v2</a></li>
                            <li><a class="is-submenu" href="/kit1-login.html">Login v3</a></li>
                            <li><a class="is-submenu" href="/kit2-login.html">Login v4</a></li>
                            <li><a class="is-submenu" href="/kit3-login.html">Login v5</a></li>
                            <li><a class="is-submenu" href="/kit4-login.html">Login v6</a></li>
                            <li><a class="is-submenu" href="/kit5-login.html">Login v7</a></li>
                            <li><a class="is-submenu" href="/kit6-login.html">Login v8</a></li>
                            <li><a class="is-submenu" href="/kit8-login.html">Login v9</a></li>
                            <li><a class="is-submenu" href="/startup-signup.html">Signup v1</a></li>
                            <li><a class="is-submenu" href="/startup-signup-2.html">Signup v2</a></li>
                            <li><a class="is-submenu" href="/kit3-signup.html">Signup v3</a></li>
                            <li><a class="is-submenu" href="/kit4-signup.html">Signup v4</a></li>
                            <li><a class="is-submenu" href="/kit6-signup.html">Signup v5</a></li>
                            <li><a class="is-submenu" href="/kit8-signup.html">Signup v6</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                        <ul>
                            <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                            <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                            <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                            <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                            <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                            <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                            <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                            <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Navigation menu -->
            <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Components</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                            <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                            <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                            <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                            <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                            <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                            <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                                    light</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                                    dark</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                                    solid</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                                    dark</a></li>
                            <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                                    light</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">view_stream</span>Sections</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                            <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                            <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                            <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                            <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                            <li><a class="is-submenu" href="/_components-sections-faq.html">FAQ</a></li>
                            <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                            <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                            <li><a class="is-submenu" href="/_components-sections-cta.html">Call To Action</a></li>
                            <li><a class="is-submenu" href="/_components-sections-posts.html">Posts</a></li>
                            <li><a class="is-submenu" href="/_components-sections-video.html">Video</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                            UI</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                            UI</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">check_box</span>Forms</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                            <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                            <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                            <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                            <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                            <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                            <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                            <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                            <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Navigation menu --></div>
        <!-- /Side navigation -->        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>        
    </body>
</html>
