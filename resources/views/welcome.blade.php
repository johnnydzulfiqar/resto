<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DU 68 Market - Landing Page</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/icon1.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <style>
            .masthead {
  position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("http://localhost:8080/viko/resto/public/img/coffee2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}
.masthead h1, .masthead .h1 {
  font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 2.5rem;
  line-height: 2.5rem;
  letter-spacing: 0.8rem;
  background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
          background-clip: text;
}
.masthead h2, .masthead .h2 {
  max-width: 20rem;
  font-size: 1rem;
}
@media (min-width: 768px) {
  .masthead h1, .masthead .h1 {
    font-size: 4rem;
    line-height: 4rem;
  }
}
@media (min-width: 992px) {
  .masthead {
    height: 100vh;
    padding: 0;
  }
  .masthead h1, .masthead .h1 {
    font-size: 6.5rem;
    line-height: 6.5rem;
    letter-spacing: 0.8rem;
  }
  .masthead h2, .masthead .h2 {
    max-width: 30rem;
    font-size: 1.25rem;
  }
}

.signup-section {
  padding: 10rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 75%, #000 100%), url("http://localhost:8080/viko/resto/public/img/Coffee recipes.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}
.signup-section .form-signup input {
  box-shadow: 0 0.1875rem 0.1875rem 0 rgba(0, 0, 0, 0.1) !important;
  padding: 1.25rem 2rem;
  height: auto;
  font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: 0.15rem;
  border: 0;
}
            .img-fluid {
                height: 620px; 
                width: 620px; 
                object-fit: cover;
            }
            .bg-gradient-primary {
                background-image: linear-gradient(195deg, #c8846b 0%, #c88d6b 100%); 
            }
    
            .btn-primary {
                color: #FFF;
                background-color: #c88d6b;
                border-color: #c88d6b; }
                .btn-primary:hover {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d; }
                .btn-check:focus + .btn-primary, .btn-primary:focus {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d;
                    box-shadow: 0 0 0 0.2rem rgb(148, 67, 45, 0.50); }
                .btn-check:checked + .btn-primary,
                .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active,
                .show > .btn-primary.dropdown-toggle {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d; }
                    .btn-check:checked + .btn-primary:focus,
                    .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus,
                    .show > .btn-primary.dropdown-toggle:focus {
                    box-shadow: 0 0 0 0.2rem rgb(148, 67, 45, 0.5); }
                .btn-primary:disabled, .btn-primary.disabled {
                    color: #FFF;
                    background-color: hsl(22, 46%, 60%);
                    border-color: #c88d6b; }
    
            .btn-primary,
            .btn.bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgb(133, 96, 63, 0.15), 0 3px 1px -2px rgb(133, 96, 63, 0.2), 0 1px 5px 0 rgb(133, 96, 63, 0.15); }
            .btn-primary:hover,
            .btn.bg-gradient-primary:hover {
                background-color: #c88d6b;
                border-color: #c88d6b;
                box-shadow: 0 14px 26px -12px rgb(133, 96, 63, 0.4), 0 4px 23px 0 rgb(133, 96, 63, 0.15), 0 8px 10px -5px rgb(133, 96, 63, 0.2); }
            .btn-primary .btn.bg-outline-primary,
            .btn.bg-gradient-primary .btn.bg-outline-primary {
                border: 1px solid #c88d6b; }
            .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active,
            .show > .btn-primary.dropdown-toggle,
            .btn.bg-gradient-primary:not(:disabled):not(.disabled).active,
            .btn.bg-gradient-primary:not(:disabled):not(.disabled):active,
            .show >
            .btn.bg-gradient-primary.dropdown-toggle {
                color: color-yiq(#c88d6b);
                background-color: #c88d6b; }
            .btn-primary.focus, .btn-primary:focus,
            .btn.bg-gradient-primary.focus,
            .btn.bg-gradient-primary:focus {
                color: #fff; }
            
            .btn-outline-primary {
            color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-outline-primary:hover {
            color: #fff;
            background-color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(100, 161, 157, 0.5);
            }
            .btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
            color: #fff;
            background-color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
             box-shadow: 0 0 0 0.25rem rgba(200, 141, 107, 0.5);
            }
            .btn-outline-primary:disabled, .btn-outline-primary.disabled {
            color: #c88d6b;
            background-color: transparent;
            }
        </style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">DU 68 Market</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#menus">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pelanggan.menu.index') }}">List Menu</a></li>
                        @auth()
                            @if(Auth::user()->role == 'admin')
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.registration.index') }}">Home</a></li>
                            @elseif(Auth::user()->role == 'kasir')
                                <li class="nav-item"><a class="nav-link" href="{{ route('kasir.transaction.index') }}">Home</a></li>
                            @elseif(Auth::user()->role == 'manajer')
                                <li class="nav-item"><a class="nav-link" href="{{ route('manajer.dashboard') }}">Home</a></li>
                            @endif
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endauth
                        @auth
                        <li title="Logout" class="nav-item">
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="">Logout</i>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">DU 68 Market</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Best Market in DU</h2>
                        <a class="btn btn-primary" href="#about">Ayo Mulai</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">{{ $total_transaksi }} Total Transaksi Dalam 1 Minggu Terakhir</h2>
                        <p class="text-white-50">
                           Best Market
                        </p>
                    </div>
                </div>
                <img class="" src="{{ asset('img') }}/bg-coffee.png" alt="..." />
            </div>
        </section>
        <!-- Menus -->
        <section class="menus-section bg-light" id="menus">
            <div class="container px-4 px-lg-5">
                <!-- Featured Menu Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img') }}/coffee2.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Jus Segar</h4>
                            <p class="text-black-50 mb-0">Jus atau sari adalah minuman yang terbuat dari ekstraksi atau pemerasan cairan alami yang terkandung dalam buah dan sayuran.</p>
                        </div>
                    </div>
                </div>
                <!-- Menu One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/bakmiebakar.jpg" alt="..."/></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Bakmie Bakar</h4>
                                    <p class="mb-0 text-white-50">Sebuah bakmi bakar yang sangat lezat halal dan baik untuk kesehatan.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/bakmiimingkatsu.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Bakmi Iming Katsu</h4>
                                    <p class="mb-0 text-white-50">Sebuah bakmi Iming Katsu yang sangat lezat halal dan baik untuk kesehatan.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/bakmibm.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-left">
                                    <h5 class="text-white">Lihat Menunya Dengan Lengkap Sekarang Juga !!</h5>
                                    <a href="{{ route('pelanggan.menu.index') }}" class="mb-0 btn btn-outline btn-outline-primary text-white-50">Klik</a>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Ayo Mulai. Sekarang!</h2>
                        <form class="form-signup">
                            <div class="row input-group-newsletter">
                                <div class="col text-center">
                                    @if (Route::has('login'))
                                        @auth()
                                            @if(Auth::user()->role == 'admin')
                                                <a href="{{ route('admin.registration.index') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @elseif(Auth::user()->role == 'kasir')
                                                <a href="{{ route('kasir.transaction.index') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @elseif(Auth::user()->role == 'manajer')
                                                <a href="{{ route('manajer.dashboard') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        {{-- <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://wa.me/6281283885955"><i class="fab fa-whatsapp"></i></a>
                    <a class="mx-2" href="https://twitter.com/_kmrsha_"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://instagram.com/kmrsha"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://github.com/kmarsha"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section> --}}
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; DU 68 Market - 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('_partials.session-script')
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
  
</html>
