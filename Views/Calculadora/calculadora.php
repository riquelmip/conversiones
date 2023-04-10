<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data['page_title']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icono pestania -->
  <link href="assets/img/icono calculadora-modified.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= media(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= media(); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= media(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= media(); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= media(); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= media(); ?>/vendor/aos/aos.css" rel="stylesheet">

  <!-- main CSS-->
  <link href="<?= media(); ?>/css/main.css" rel="stylesheet">

  <style>
    /*Estilos login*/
    #divLoading {
      position: fixed;
      top: 0;
      width: 100%;
      height: 100%;
      background: blue;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(254, 254, 255, .65);
      z-index: 9999;
      display: none;

    }

    #divLoading img {
      width: 50px;
      height: 50px;
    }
  </style>
  <!--Toastr alertas-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= media(); ?>/images/icono calculadora-modified.png" alt="">
        <h1><?= $data['page_title']; ?></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" class="active">Inicio</a></li>
          <li><a href="#service"> Servicios</a></li>
          <li><a href="#calc"> Calculadora</a></li>
          <li><a href="#nosotros"> Nosotros</a></li>
        </ul>
        </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= 1 Section ======= -->
  <div id="divLoading">
    <div>
      <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
  </div>

  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Convierte sin límites</h2>
          <p data-aos="fade-up" data-aos-delay="100">Nuestro conversor en línea está aquí para hacer que
            las conversiones sean más fáciles que nunca. Desde medidas de tiempo, volumen, longitud, masa, datos y monedas,
            nuestra herramienta proporciona resultados precisos y confiables en un instante. </p>
        </div>
        <!--Imagen  section-->
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="<?= media(); ?>/images/fondo_conversion-removebg-preview.png" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End 1 Section -->

  <main id="main">

    <!-- ======= Nuestros Servicios ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <br><br><br>
        <div class="section-header">
          <span>Nuestros Servicios</span>
          <h2>Nuestros Servicios</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Tiempo</h3>
              <p>Este conversor te permite convertir unidades de tiempo, como segundos, minutos, horas, días, semanas, y más. <br><br>Es muy útil para cualquier persona que necesite hacer conversiones de tiempo, como por ejemplo, al planear su horario o al calcular el tiempo de un proyecto.</p>
            </div>
          </div><!-- End Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Masa</h3>
              <p>Con este convertidor puedes convertir magnitudes de masa entre diferentes unidades de medida. Puedes convertir desde unidades como gramos, kilogramos, libras y onzas, entre otras. <br><br>Este convertidor te será útil para convertir medidas de alimentos o ingredientes en recetas de cocina o para calcular la masa de diferentes objetos en un contexto científico.</p>
            </div>
          </div><!-- End Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Longitud</h3>
              <p>Con este conversor, puedes convertir diferentes unidades de longitud, como centímetros, metros, kilómetros, pies, pulgadas, millas, entre otros. <br><br>Es muy útil para cualquier persona que necesite hacer conversiones de distancia, como por ejemplo, al planear un viaje o al medir terrenos.</p>
            </div>
          </div><!-- End Card-->

        </div>
        <br>
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Volumen</h3>
              <p>Con este convertidor puedes convertir magnitudes de volumen entre diferentes unidades de medida. Puedes convertir desde unidades como litros, centímetros cúbicos, metros cúbicos y galones, entre otras.<br><br> Este convertidor te será útil para convertir medidas de líquidos o gases en diferentes contextos, por ejemplo, para la preparación de recetas de cocina o para realizar mediciones en un laboratorio.</p>
            </div>
          </div><!-- End Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Monedas</h3>
              <p>Con este convertidor puedes convertir magnitudes de moneda entre diferentes divisas. Puedes convertir desde divisas como dólares, euros, pesos, yenes y libras, entre otras. <br><br>Este convertidor te será útil para calcular el valor de diferentes monedas en distintos países, por ejemplo, si estás planificando un viaje al extranjero o realizando operaciones comerciales internacionales.</p>
            </div>
          </div><!-- End Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img" style="background-color: #001973;">
                <img src="<?= media(); ?>/images/icono calculadora-modified,png" alt="" class="img-fluid">
              </div>
              <h3>Conversor de Datos</h3>
              <p>Con este conversor, puedes convertir diferentes unidades de magnitud de datos, como bytes, kilobytes, megabytes, gigabytes, terabytes, y más. <br><br>Es muy útil para cualquier persona que necesite hacer conversiones de tamaño de archivos, como por ejemplo, al transferir datos o al almacenar archivos en su computadora.</p>
            </div>
          </div><!-- End Card-->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Acerca de Nosotros ======= -->
    <section id="calc" class="about pt-0">
      <div class="container" data-aos="fade-up">
        <br><br><br>
        <div class="row gy-4">
          <div class="section-header">
            <span>Calculadora de Conversiones</span>
            <h2>Calculadora de Conversiones</h2>
          </div>

          <form id="formConversion">
            <div class="mb-3">
              <label for="nombre" class="form-label">Seleccione el tipo de conversión</label>
              <select class="form-select" aria-label="Default select example" id="tipo" name="tipo" required>
                <option value="Longitud">Longitud</option>
                <option value="Masa">Masa</option>
                <option value="Volumen">Volumen</option>
                <option value="Moneda">Moneda</option>
                <option value="Tiempo">Tiempo</option>
                <option value="Datos">Datos</option>
              </select>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group">
                  <label class="control-label" for="valor">Valor</label>
                  <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="control-label" for="unidad1">Unidad</label>
                  <div>
                    <select name="unidad1" id="unidad1" class="form-control" style="width: 100%;" required>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-1">
                <div class="form-group">
                  <label class="control-label" for="unidad2">a</label>

                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="control-label" for="unidad2">Unidad</label>
                  <div>
                    <select name="unidad2" id="unidad2" class="form-control" style="width: 100%;" required>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Convertir</button> <br> <br>
          </form>

          <br><br><br>
          <div class="row">
            <br><br>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="rol">Resultado</label>
                <input type="text" class="form-control" id="resultado" name="resultado" required disabled>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="ud_final">Unidad</label>
                <input type="text" class="form-control" id="ud_final" name="ud_final" disabled>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section><!-- Termina acerca de nosotros -->


    <!-- ======= Seccion de fotos de nosotros ======= -->
    <section id="nosotros" class="featured-services">
      <div class="container">
        <br><br><br>
        <div class="row gy-4">
          <div class="section-header">
            <span>Acerca de Nosotros</span>
            <h2>Acerca de Nosotros</h2>
          </div>

          <p class="text-center">
            Como estudiantes, hemos aprendido mucho en el proceso de crear esta herramienta y estamos
            entusiasmados por compartir nuestro trabajo con el mundo. Esperamos que disfruten usando
            nuestro conversor tanto como nosotros disfrutamos creándolo.
            <br>¡Gracias por visitar nuestra página!
          </p>

        </div>
        <br><br>

        <div class="row gy-4">

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/riquelmi.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Riquelmi Palacios</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/adonay.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Adonay Gonzalez</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/emerson.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Emerson Alfaro</h6>
              </div>
            </div>
          </div>


          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/rudy.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Rudy Gudiel</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/jonh.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Jonh Rodriguez</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 service-item d-flex" data-aos="fade-up">
            <div class="card">
              <img src="<?= media(); ?>/images/duvan.jpeg" class="card-img-top img-fluid w-100 h-75" alt="...">
              <div class="card-body">
                <h6 class="card-title text-center">Duvan</h6>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Termina seccion fotos de nosotros-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">



    <div class="container">
      <div class="copyright">
        &copy; Copyright
      </div>
      <div class="credits">


        Designed by <a href="#">Equipo 3 Kodigo</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= media(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= media(); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= media(); ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= media(); ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= media(); ?>/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= media(); ?>/js/main.js"></script>

  <script>
    const base_url = "<?= base_url(); ?>";
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!--Toastr alertas-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: true,
      positionClass: "toast-top-right",
      preventDuplicates: false,
      onclick: null,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut",
    };
  </script>
  <script src="<?= media(); ?>/js/calculadora.js"></script>

</body>

</html>