<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- BOOTSTRAP 5.1.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- ICONOS DE BOXICONS 2.1.4 -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- CSS PERSONAL -->
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>

  <div class="custom-container-spinner">
    <div class="spinner-border text-light" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <header id="header">
    <nav class="navbar custom-navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand me-auto custom-logo" href="#">Logo</a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title custom-logo-canvas" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="custom-close-button text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
              <span class="bx bx-x"></span>
            </button>
          </div>
          <div class="offcanvas-body custom-nav-memu-container">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 custom-nav-memu" id="menuItems">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#inicio" id="inicioLink">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#evento" id="eventoLink">Evento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ponentes">Ponentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cronograma">Cronograma</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lugar">Lugar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#inscripciones">Inscripciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>

        <a href="#" class="custom-login-button click-modal-demo">Ingresar</a>

        <button class="navbar-toggler pe-0 custom-menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="bx bx-menu"></span>
        </button>

      </div>
    </nav>
  </header>

  <section id="inicio">
    <div class="inicio-container" data-aos="zoom-in" data-aos-delay="100">
      <h2 class="mb-4 pb-0 text-white"><b>SITIO WEB PARA EL CONGRESO INTERNACIONAL</b></h2>
      <h3 class="mb-4 pb-0 text-white">"IX Congreso Internacional"</h3>
      <h3 class="mb-4 pb-0 text-white"><b>IX<span class="ms-1"> CONGRESO</span></b><br><b>2024</b></h3>
    </div>
  </section>

  <main id="main">

    <?php include_once 'components/evento.php'; ?>

    <?php include_once 'components/ponentes.php'; ?>

    <?php include_once 'components/cronograma.php'; ?>

    <?php include_once 'components/lugar.php'; ?>

    <?php include_once 'components/preguntas.php'; ?>

    <?php include_once 'components/subscribe.php'; ?>

    <?php include_once 'components/planes.php'; ?>

    <?php include_once 'components/contacto.php'; ?>

    <?php include_once 'components/demo.php'; ?>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Congreso Internacional</h4>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci illo animi culpa facere doloribus voluptate mollitia, laborum blanditiis eveniet vitae quis nam sapiente inventore beatae fugit tenetur facilis voluptates magnam!</p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#inicio" id="footerInicioLink">Inicio</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#evento" id="footerEventoLink">Acerca del Evento</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#ponentes">Ponentes del Evento</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#cronograma">Cronograma del evento</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#lugar">Lugar del evento</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#inscripciones">Inscripciones</a></li>
              <li><i class="bx bx-caret-right"></i> <a class="mini-nav-link" href="#contacto">Contacto</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacto acerca del evento</h4>
            <p>Lima<br>
              <strong>Celular:</strong> 000 000 000<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links">
              <a href="#" class="twitter"
                target="_new"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"
                target="_new"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram" target="_new"><i class="bx bxl-instagram"></i></a>
      
            </div>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Empresa</h4>
            <p>Lima<br>
              <strong>Celular:</strong> 000 000 000<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links">
              <a href="#" class="twitter"
                target="_new"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"
                target="_new"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"
                target="_new"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>
          <?php echo date('Y')?>
        </strong>. Todos los derechos reservados.
      </div>

    </div>
  </footer>


  <!-- BOOTSTRAP 5.1.3 -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <!-- JQUERY -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- JS PERSONAL -->
  <script type="text/javascript" src="assets/js/home.js"></script>
  <script type="text/javascript" src="assets/js/custom_spinner.js"></script>
  <script type="text/javascript" src="assets/js/carrusel_ponente.js"></script>
  <script type="text/javascript" src="assets/js/custom_aos.js"></script>
  <script type="text/javascript" src="assets/js/custom_validation.js"></script>
  <script type="text/javascript" src="assets/js/modal_demo.js"></script>

</body>

</html>