<?php
session_start();

// cek session
if(isset($_SESSION['login'])) {
  header("Location: include/dashboard.php");
  exit;
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio | Achmad Choerul Ramdhani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="portfolio/Portfolio" rel="icon">
  <!-- <link href="portfolio/Portfolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="portfolio/Portfolio/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="portfolio/Portfolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="portfolio/Portfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="portfolio/Portfolio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="portfolio/Portfolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="portfolio/Portfolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="portfolio/Portfolio/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="portfolio/Portfolio/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Achmad Choerul R.</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Choerul10_" class="x"><i class="bx bi-x"></i></a>
          <a href="https://www.instagram.com/choerul_ram/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/choerulram" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/achmad-choerul-ramdhani-0b237b279/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="users/login.php" class="nav-link scrollto"><i class="fas fa-sign-in-alt"></i> <span>Login</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Achmad Choerul Ramdhani</h1>
      <p>Saya seorang <span class="typed" data-typed-items="Mahasiswa"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="portfolio/Portfolio/assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Mahasiswa</h3>
            <p class="fst-italic">
              Saya adalah seorang mahasiswa yang sedang menempuh pendidikan di Politeknik Negeri Cilacap, fokus pada bidang studi yang berkaitan dengan pengembangan web dan teknologi informasi.
            </p>
            <div class="row">
              <div class="">
                <ul>
                  <li><i class="bi bi-arrow-right"></i> 
                    <strong>Birthday :</strong> <span>10 October 2004</span>
                  </li>
                  <li><i class="bi bi-arrow-right"></i>
                    <strong>Phone :</strong> <span>+62 8129-4029-308</span>
                  </li>
                  <li><i class="bi bi-arrow-right"></i> <strong>Email :</strong> <span>achmadchoerul12345@gmail.com</span></li>
                  <li><i class="bi bi-arrow-right"></i> <strong>Alamat :</strong> <span>Jl. Tongkol RT 25/RW 03, Sikampuh, Kroya, Cilacap, Jawa Tengah</span></li>
                </ul>
              </div>
            </div>
            <p>
              Saya memiliki minat kuat di bidang pengembangan web. Selama lebih dari dua tahun, saya telah mengasah dan mengembangkan keterampilan pemrograman saya di lingkungan perguruan tinggi. Saya telah belajar penggunaan framework Laravel dan CodeIgniter untuk menghasilkan solusi web yang efektif dan inovatif.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Certification</h3>
            <div class="resume-item pb-1">
              <h4>2022</h4>
              <ul>
                <a href="https://www.dicoding.com/certificates/NVP7978DRZR0" class="text-dark">
                  <u><li>Belajar Dasar-Dasar DevOps | Dicoding</li></u>
                </a>
              </ul>
            </div>
            <div class="resume-item pb-0">
              <h4>2023</h4>
              <ul>
                <a href="https://drive.google.com/file/d/1N7sO6pi8y1shjJqdWpZw05249lY5B-Tn/view?usp=sharing" class="text-dark">
                  <u><li>NDG Linux Unhatched | Cisco</li></u>
                </a>
                <a href="https://drive.google.com/file/d/1eOvw8dlAkWj2COlm38W7lhChuXRYKNXW/view?usp=sharing" class="text-dark">
                  <u><li>Introduction to Network | Cisco</li></u>
                </a>
                <a href="https://drive.google.com/file/d/15pYYKN0oOHNk3c6W2opQWfx5KC-7VxgZ/view?usp=sharing" class="text-dark">
                  <u><li>Database Design | Oracle</li></u>
                </a>
                <a href="https://drive.google.com/file/d/1FdKUEESsEO5EYIjozvol1Pk5ISOtgEMy/view?usp=sharing" class="text-dark">
                  <u><li>Junior Web Developer| VSGA</li></u>
                </a> 
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Politeknik Negeri Cilacap</h4>
              <h5>2022 - Now</h5>
              <p><em>D3 Teknik Informatika</em></p>
              <p>Saat ini saya sedang menempuh pendidikan D3 Teknik Informatika di Politeknik Negeri Cilacap.</p>
            </div>
            <div class="resume-item">
              <h4>SMK Ma'arif 1 Kroya</h4>
              <h5>2019 - 2022</h5>
              <p><em>Teknik Kendaraan Ringan Otomotif</em></p>
              <p>Sebelumnya, saya lulus dari SMK Ma'arif 1 Kroya dengan fokus pada Teknik Kendaraan Ringan Otomotif.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Member of Web Division</h4>
              <h5>2022 - Now</h5>
              <p><em>Protic (Programmer Teknik Informatika Club)</em></p>
              <ul>
                <li>Bertanggung jawab sebagai asisten mentor dalam study jams Protic untuk kelas Web Basic, memberikan bimbingan dan dukungan kepada peserta untuk memahami konsep-konsep dasar pengembangan web.</li>
                <li>Mengembangkan website khusus untuk memenuhi kebutuhan Protic, termasuk fitur-fitur dan desain yang dirancang untuk meningkatkan pengalaman pengguna.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Teaching Factory</h4>
              <h5>2023 - Now</h5>
              <p><em>Teaching Factory JKB Politeknik Negeri Cilacap</em></p>
              <ul>
                <li>Saya bertanggung jawab dalam pengembangan salah satu proyek dalam JKB ERP menggunakan teknologi Laravel.</li>
                <li>Berpartisipasi dalam pertemuan tim untuk merencanakan dan mengevaluasi proyek-proyek yang sedang dikerjakan.</li>
                <li>Menganalisis kebutuhan pengguna dan menerapkan perubahan atau peningkatan sesuai dengan umpan balik yang diberikan.</li>
                <li>Mengikuti perkembangan teknologi dan best practice dalam pengembangan aplikasi web untuk terus meningkatkan kualitas dan efisiensi proyek.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Berikut adalah beberapa pencapaian yang telah saya raih hingga saat ini, mencakup sertifikasi, pembelajaran, tugas kuliah, serta implementasi berbagai proyek yang telah saya selesaikan.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-certificate">Certificate</li>
              <li data-filter=".filter-projects">Projects</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="NDG Linux Unhatched"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/1N7sO6pi8y1shjJqdWpZw05249lY5B-Tn/view?usp=sharing" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Belajar Dasar-Dasar DevOps"><i class="bx bx-plus"></i></a>
                <a href="https://www.dicoding.com/certificates/NVP7978DRZR0" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Junior Web Developer"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/1FdKUEESsEO5EYIjozvol1Pk5ISOtgEMy/view?usp=sharing" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Introduction to Network"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/1eOvw8dlAkWj2COlm38W7lhChuXRYKNXW/view?usp=sharing" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Database Design"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/15pYYKN0oOHNk3c6W2opQWfx5KC-7VxgZ/view?usp=sharing" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landing Page"><i class="bx bx-plus"></i></a>
                <a href="https://choerulram.github.io/Landing-page/" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mobile Mockup"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/1vs-a24NvELEoW1S-5DoZmEThow3ywKWL/view?usp=sharing" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-projects">
            <div class="portfolio-wrap">
              <img src="portfolio/Portfolio/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio/Portfolio/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RIDEAS Competition 2023"><i class="bx bx-plus"></i></a>
                <a href="https://logicrobotic.netlify.app/" title="Lihat Detail" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Cilacap</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>achmadchoerul12345@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <a href="https://wa.me/6281294029308" class="text-dark">
                  <u><p>6281294029308</p></u>
                </a>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.5992525613724!2d109.19568299999999!3d-7.6185089999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzcnMDYuNiJTIDEwOcKwMTEnNDQuNSJF!5e0!3m2!1sid!2sid!4v1712468149714!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="portfolio/Portfolio/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/aos/aos.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="portfolio/Portfolio/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="portfolio/Portfolio/assets/js/main.js"></script>

</body>

</html>