<?php
  session_start();

  // cek session
  if(isset($_SESSION['login'])) {
    header("Location: portfolio/dashboard.php");
    exit;
  } 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Portfolio Achmad Choerul Ramdhani</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="portfolio/assets/img/favicon.png" rel="icon" />
    <link href="portfolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="portfolio/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="portfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="portfolio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="portfolio/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="portfolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="portfolio/assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Folio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="#" class="logo"
          ><img src="portfolio/assets/img/logo.png" alt="" class="img-fluid"
        /></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li>
              <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
            </li>
            <li><a class="nav-link scrollto" href="#journal">Blog</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="nav-link scrollto" href="users/login.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="home">
      <div class="container">
        <div class="hero-content">
          <h1>
            I'm
            <span
              class="typed"
              data-typed-items="Achmad Choerul Ramdhani, Developer, Designer, Freelancer, Analyst"
            ></span>
          </h1>
          <p>Developer, Designer, Freelancer, Analyst</p>

          <ul class="list-unstyled list-social">
            <li>
              <a href="https://web.facebook.com/profile.php?id=100089418026602"
                ><i class="bi bi-facebook"></i
              ></a>
            </li>
            <li>
              <a href="https://twitter.com/AchmadChoe69999"
                ><i class="bi bi-twitter"></i
              ></a>
            </li>
            <li>
              <a href="https://www.instagram.com/choerul_ram/"
                ><i class="bi bi-instagram"></i
              ></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/achmad-choerul-0b237b279/"
                ><i class="bi bi-linkedin"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <div id="about" class="paddsection">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4">
              <div class="div-img-bg">
                <div class="about-img">
                  <img
                    src="portfolio/assets/img/me.jpg"
                    class="img-responsive"
                    alt="me"
                  />
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="about-descr">
                <p class="p-heading">
                  i'm a web developer who is passionate about functional,
                  intuitive, and attractive designs. i've always been passionate
                  about creating an attractive appearance and enhancing the
                  functionality of a website.
                </p>
                <p class="separator">
                  Currently, i'm focusing on learning JavaScript and PHP to
                  develop my skills as a web developer. In addition, i'm always
                  committed to continuously learning and staying up to date with
                  the latest developments in the web development industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <div id="services">
        <div class="container">
          <div
            class="services-slider swiper"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-briefcase"></i>
                  <span>UI/UX DESIGN</span>
                  <p class="separator">
                    In UI/UX design, I create interactive experiences that are
                    intuitive and engaging for users
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-card-checklist"></i>
                  <span>BRAND IDENTITY</span>
                  <p class="separator">
                    I have expertise in developing a strong and consistent brand
                    identity to strengthen the company's brand image
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-bar-chart"></i>
                  <span>WEB DESIGN</span>
                  <p class="separator">
                    In web design, I combine visual elements and effective
                    functionality to create an attractive and responsive
                    interface
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-binoculars"></i>
                  <span>MOBILE APPS</span>
                  <p class="separator">
                    I have experience prototyping user-friendly mobile
                    applications with adaptive designs
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-brightness-high"></i>
                  <span>Analytics</span>
                  <p class="separator">
                    With analytics, I am able to extract valuable insights from
                    data to support intelligent decision-making and improve
                    digital performance
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-calendar4-week"></i>
                  <span>PHOTOGRAPHY</span>
                  <p class="separator">
                    Photography is an activity that I enjoy, and I apply my
                    photography skills to provide an interesting visual
                    dimension to design projects
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <div id="portfolio" class="paddsection">
        <div class="container">
          <div class="section-title text-center">
            <h2>My Portfolio</h2>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">CERTIFICATE</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img
                src="portfolio/assets/img/portfolio/portfolio-4.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>DevOps</h4>
                <p>Certificate</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-4.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img
                src="portfolio/assets/img/portfolio/portfolio-1.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>NDG Linux Unhatched</h4>
                <p>Certificate</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-1.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img
                src="portfolio/assets/img/portfolio/portfolio-3.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>SMArT App</h4>
                <p>App Prototypes</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-3.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img
                src="portfolio/assets/img/portfolio/portfolio-2.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>Landing Page</h4>
                <p>Web</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-2.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img
                src="portfolio/assets/img/portfolio/portfolio-6.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>Price List Diamond</h4>
                <p>My Business</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-6.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img
                src="portfolio/assets/img/portfolio/portfolio-5.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>Form Register</h4>
                <p>Web</p>
                <a
                  href="portfolio/assets/img/portfolio/portfolio-5.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  ><i class="bx bx-plus"></i
                ></a>
                <a class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Portfolio Section -->

      <!-- ======= Journal Section ======= -->
      <div id="journal" class="text-left paddsection">
        <div class="container">
          <div class="section-title text-center">
            <h2>MY BLOG</h2>
          </div>
        </div>

        <div class="container">
          <div class="journal-block">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="journal-info">
                  <a href="portfolio/blog1.html"
                    ><img
                      src="portfolio/assets/img/blog-post-1.jpg"
                      class="img-responsive"
                      alt="img"
                  /></a>

                  <div class="journal-txt">
                    <h4>
                      <a href="portfolio/blog1.html"
                        >EFFECTIVE TIPS FOR MANAGING TIME PRODUCTIVE</a
                      >
                    </h4>
                    <p class="separator">
                      Find effective ways to manage your time and achieve high
                      productivity in your life!
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">
                  <a href="portfolio/blog2.html"
                    ><img
                      src="portfolio/assets/img/blog-post-2.jpg"
                      class="img-responsive"
                      alt="img"
                  /></a>

                  <div class="journal-txt">
                    <h4>
                      <a href="portfolio/blog2.html">WAYS TO EFFECTIVELY MANAGE STRESS</a>
                    </h4>
                    <p class="separator">
                      Learn how to manage stress effectively and find balance in
                      your life
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">
                  <a href="portfolio/blog3.html"
                    ><img
                      src="portfolio/assets/img/blog-post-3.jpg"
                      class="img-responsive"
                      alt="img"
                  /></a>

                  <div class="journal-txt">
                    <h4>
                      <a href="portfolio/blog3.html"
                        >PRACTICAL TIPS FOR MANAGING CONCENTRATION AND FOCUS</a
                      >
                    </h4>
                    <p class="separator">
                      Get practical tips to improve your concentration and focus
                      in daily activities
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Journal Section -->

      <!-- ======= Contact Section ======= -->
      <div id="contact" class="paddsection">
        <div class="container">
          <div class="contact-block1">
            <div class="row">
              <div class="col-lg-6">
                <div class="contact-contact">
                  <h2 class="mb-30">GET IN TOUCH</h2>

                  <ul class="contact-details">
                    <li><span>Cob street, Kroya</span></li>
                    <li><span>Cilacap, Central Java</span></li>
                    <li><span>+62 81294029308</span></li>
                    <li><span>achmadchoerul12345@gmail.com</span></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-6">
                <form
                  action="forms/contact.php"
                  method="post"
                  role="form"
                  class="php-email-form"
                >
                  <div class="row gy-3">
                    <div class="col-lg-6">
                      <div class="form-group contact-block1">
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          id="name"
                          placeholder="Your Name"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control"
                          name="email"
                          id="email"
                          placeholder="Your Email"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          name="subject"
                          id="subject"
                          placeholder="Subject"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          name="message"
                          placeholder="Message"
                          required
                        ></textarea>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">
                        Your message has been sent. Thank you!
                      </div>
                    </div>

                    <div class="mt-0">
                      <input
                        type="submit"
                        class="btn btn-defeault btn-send"
                        value="Send message"
                      />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <div id="footer" class="text-center">
      <div class="container">
        <div class="socials-media text-center">
          <ul class="list-unstyled">
            <li>
              <a href="https://web.facebook.com/profile.php?id=100089418026602"
                ><i class="bi bi-facebook"></i
              ></a>
            </li>
            <li>
              <a href="https://twitter.com/AchmadChoe69999"
                ><i class="bi bi-twitter"></i
              ></a>
            </li>
            <li>
              <a href="https://www.instagram.com/choerul_ram/"
                ><i class="bi bi-instagram"></i
              ></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/achmad-choerul-0b237b279/"
                ><i class="bi bi-linkedin"></i
              ></a>
            </li>
          </ul>
        </div>

        <p>&copy; Copyrights 2023. Web Developer.</p>

        <div class="credits">
          <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
          Designed by <a href="https://api.whatsapp.com/send/?phone=%2B6281294029308&text&type=phone_number&app_absent=0">Achmad Choerul Ramdhani❤️</a>
        </div>
      </div>
    </div>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="portfolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="portfolio/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="portfolio/assets/vendor/typed.js/typed.umd.js"></script>
    <script src="portfolio/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="portfolio/assets/js/main.js"></script>
  </body>
</html>
