<?php
  if(isset($_GET['lang']) && $_GET['lang'] == 'es') {
    require "./assets/lang/es.php";
  }//end if
  else if(isset($_GET['lang']) && $_GET['lang'] == 'en') {
    require "./assets/lang/en.php";
  }//end else if
  else {
    require "./assets/lang/es.php";
  }//end else
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Juan Pablo | Portafolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Juan Pablo</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Romefjp" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.linkedin.com/in/romefjp/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <?php
            for ($i=0; $i < sizeof($menu); $i++) { 
              echo $menu[$i];
            }//end for
          ?>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Juan Pablo</h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Back-end Developer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $about_title; ?></h2>
          <p>
            <?php echo $about_text; ?>
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <p class="font-italic">
              <?php echo $phrase; ?> <br>- Stephen Hawking.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <?php
                    foreach ($info_uno as $clave => $valor) {
                      echo '<li><i class="icofont-rounded-right"></i> <strong>'.$valor['text'].'</strong> '.$valor['value'].'</li>';
                    }//end foreach
                  ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <?php
                    foreach ($info_dos as $clave2 => $valor2) {
                      echo '<li><i class="icofont-rounded-right"></i> <strong>'.$valor2['text'].'</strong> '.$valor2['value'].'</li>';
                    }//end foreach
                  ?>
                </ul>
              </div>
            </div>
            <p>
              <!-- Something -->
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $skills_title; ?></h2>
          <p><?php echo $skills_text; ?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            <div class="progress">
              <span class="skill">Inglés <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Ajax <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">C# <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Angular <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">React <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">MySQL <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PostgresSQL <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SQL Server <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">Bootstrap 4.* <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">HTML5 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $title_education; ?></h2>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <div class="resume-item">
              <h4><?php echo $carrer; ?></h4>
              <h5>2016 - 2019</h5>
              <p><em>Universidad Politécnica de Tlaxcala</em></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Resume Section ======= -->
    <section class="resume">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $experience_title; ?></h2>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <?php
              foreach ($experiencia_uno as $index => $val) {
                echo '
                  <div class="resume-item">
                    <h4>'.$val['title'].'</h4>
                    <h5>'.$val['time'].'</h5>
                    <p><em>'.$val['company'].'</em></p>
                    <ul>';
                      foreach ($val['tasks'] as $tarea) {
                        echo '<li>'.$tarea.'</li>';
                      }//end foreach
                echo '</ul>
                    <p>'.$val['technologies'].'</p>
                  </div>
                ';
              }
            ?>

          </div>
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <?php
              foreach ($experiencia_dos as $index2 => $val2) {
                echo '
                  <div class="resume-item">
                    <h4>'.$val2['title'].'</h4>
                    <h5>'.$val2['time'].'</h5>
                    <p><em>'.$val2['company'].'</em></p>
                    <ul>';
                      foreach ($val2['tasks'] as $tarea2) {
                        echo '<li>'.$tarea2.'</li>';
                      }//end foreach
                echo '</ul>
                    <p>'.$val2['technologies'].'</p>
                  </div>
                ';
              }
            ?>

          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $portafolio_title; ?></h2>
          <p><?php echo $portafolio_text; ?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters" style="display: none;">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-web">Webs</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/1.png" data-gall="portfolioGallery" class="venobox" title="OTTLAx"><i class="bx bx-plus"></i></a>
                <a href="https://observatorioturisticodetlaxcala.mx/" title="Más detalles" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/2.png" data-gall="portfolioGallery" class="venobox" title="Visita Tlaxcala"><i class="bx bx-plus"></i></a>
                <a href="https://visitatlaxcala.observatorioturisticodetlaxcala.mx/" title="Más detalles" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/3.png" data-gall="portfolioGallery" class="venobox" title="IMAV2021"><i class="bx bx-plus"></i></a>
                <a href="https://imav2021.inaoep.mx/2.php/portal/home" title="Más detalles" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/4.png" data-gall="portfolioGallery" class="venobox" title="Plataforma de Examen de Admisión"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/5.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/5.png" data-gall="portfolioGallery" class="venobox" title="Sistema Barbaros GYM"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/6.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/6.png" data-gall="portfolioGallery" class="venobox" title="Trayectoría Educativa UPTx"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Juan Pablo</span></strong>
        <br>
        <strong><a href="./?lang=es">Es</a></strong> | <strong><a href="./?lang=en">En</a></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/edad.js"></script>

</body>

</html>