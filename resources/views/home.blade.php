<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title >{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />

        <meta name="description" content="Bienvenid@ a dms jales">
        <meta name="theme-color" content="#D7033D">
        <meta name="twitter:card" content="summary">
        <meta name="theme-color" content="#D7033D">
        <meta name="twitter:card" content="summary">
        <meta property="og:type" content="website">
        <meta property="og:title" name="twitter:title" content="DMS Jales ">
        <meta property="og:description" name="twitter:description" content="Bienvenid@ a DMS Jales">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description" content="">
        <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
        {{-- @vite('resources/js/app.css') --}}
    </head>
    <body class="bg-light">
        <!-- Section: Design Block -->
        <section class="mb-10">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">
            <!-- Container wrapper -->
            <div class="container-fluid">
            <div class="d-flex">
                <!-- Toggle button -->
                <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-collapse-init
                        data-mdb-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                <i class="fas fa-bars"></i>
                </button>

                <!-- Navbar brand -->
                <a class="navbar-brand ms-3" href="#">
                    <img src="{{ asset('img/logo.png') }}" width="50px" height="50px" />
                </a>
            </div>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul
                    class="navbar-nav me-auto mb-2 ms-2 ps-1 ms-lg-0 ps-lg-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <a href="{{ route('login') }}" data-mdb-ripple-init class="btn btn-link px-3 mb-1 me-2">Iniciar sesión</a>
            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div
            class="p-5 text-center bg-image"
            style="
                    background-image: url('https://mdbootstrap.com/img/new/textures/full/142.jpg');
                    height: 500px;
                    "
            ></div>
        <!-- Background image -->

        <div class="container">
            <div
                class="card mx-4 mx-md-5 text-center shadow-5-strong"
                style="
                        margin-top: -170px;
                        background: hsla(0, 0%, 100%, 0.7);
                        backdrop-filter: blur(30px);
                        "
                >
            <div class="card-body px-4 py-5 px-lg-3">
                <h1 class="display-3 fw-bold ls-tight mb-4">
                Desarrollos a la medida <br />
                <span class="text-primary">para tu negocio</span>
                </h1>
            </div>
            </div>
        </div>
        </section>
<!-- Section: Design Block -->
        {{-- <header class="mb-7">
          <!-- Background image -->
          <div id="intro" class="bg-image shadow-1-strong"
              style="background-image: url({{ asset('img/panditas.png') }});height: 500px;" alt="Daniela Slezáková">
            <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.6)">
              <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-white">
                  <h1 class="mb-3">Fuego Bites</h1>
                  <h4 class="mb-4">Date un gusto 🔥</h4>
                  <a class="btn btn-outline-light btn-lg mb-3" href="#!" role="button">Ver productos
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Background image -->
        </header>

        <!--Main layout-->
        <main class="mb-6">
          <div class="container">

            <!-- Section: PRODUCTOS -->
            <section class="mb-6">
              <h5 class="text-center fw-bold mb-6">
                <i class="fas fa-fire me-2 text-danger"></i> Productos
              </h5>

            </section>
            <!-- Section: PRODUCTOS -->

          </div>
        </main>
        <!--Main layout-->

        <!-- Footer -->
        <footer class="text-center text-lg-start text-muted" style="background-color: hsl(213, 44%, 97%);">
          <!-- Section: Social media -->
          <section
                    class="
                          d-flex
                          justify-content-center justify-content-lg-between
                          p-4
                          border-bottom
                          container
                          "
                    >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
              <span>Solicita tu pedido:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
              <a href="https://wa.link/jchb01" class="me-4 text-reset">
                <i class="fab fa-whatsapp"></i> 461-122-38-196
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-fire me-3"></i>{{ config('app.name') }}
                  </h6>
                  <p>
                    Fuego Bites es una creación de <b>Georgina Cruz Sierra</b>. Todos los derechos reservados
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Productos</h6>
                  <p>
                    <a href="#!" class="text-reset">Gomitas</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Dulces</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Enlaces externos</h6>
                  <p>
                    <a href="{{ route('login') }}" class="text-reset">Plataforma de administación</a>
                  </p>
                  <p>
                    <a href="https://www.headcruser.xyz" class="text-reset">Desarrollos</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                  <p><i class="fas fa-home me-3"></i> Celaya Guanajuato</p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    headcruser@gmail.com
                  </p>
                  <p><i class="fab fa-whatsapp me-3"></i> +52 461 358 58 90</p>
                  <p><i class="fab fa-whatsapp me-3"></i> +52 461 122 38 196</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div
                class="text-center p-4"
                style="background-color: hsla(0, 0%, 17%, 0.04)"
                >
            © {{ now()->year }} Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/"
                >{{ config('app.name') }}</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer --> --}}
    </body>
</html>
