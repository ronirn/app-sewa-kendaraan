<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KendaraanKu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
\

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendor/home/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">KendaraanKu</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
  <li><a class="getstarted scrollto" href="{{ route('login') }}">Log In</a></li>
  <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

  <div class="container">
  <div class="row">
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
      <div>
        <h1>Sewa Kendaraan dengan Mudah</h1>
        <h2>Temukan berbagai pilihan kendaraan untuk kebutuhan perjalanan Anda. Mudah, cepat, dan terpercaya.</h2>
        <a href="{{ route('login') }}" class="download-btn"><i class="bx bx-car"></i> Rent Now</a>
        <a href="{{ route('register') }}" class="download-btn"><i class="bx bx-user-plus"></i> Registration</a>
      </div>
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
      <img src="vendor/home/assets/img/hero.png" class="img-fluid" alt="Kendaraan">
    </div>
  </div>
</div>




  </section><!-- End Hero -->

  <main id="main">

<!-- ======= App Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title">
      <h2>Fitur Sewa Kendaraan</h2>
      <p>Temukan berbagai fitur unggulan yang memudahkan Anda dalam proses sewa kendaraan. Dengan layanan kami, Anda mendapatkan kemudahan dan kepuasan maksimal dalam setiap perjalanan.</p>
    </div>

    <div class="row no-gutters">
      <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
        <div class="content d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-md-6 icon-box" data-aos="fade-up">
              <i class="bx bx-car"></i>
              <h4>Berbagai Pilihan Kendaraan</h4>
              <p>Pilih dari berbagai jenis kendaraan sesuai dengan kebutuhan dan preferensi Anda.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-calendar"></i>
              <h4>Pemesanan Mudah</h4>
              <p>Proses pemesanan kendaraan yang cepat dan mudah melalui platform kami.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-credit-card"></i>
              <h4>Pembayaran Aman</h4>
              <p>Metode pembayaran yang aman dan terjamin untuk kenyamanan transaksi Anda.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-support"></i>
              <h4>Dukungan Pelanggan</h4>
              <p>Tim dukungan pelanggan siap membantu Anda kapan saja jika Anda membutuhkan bantuan.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-tachometer"></i>
              <h4>Informasi Kendaraan</h4>
              <p>Informasi lengkap tentang kondisi kendaraan untuk memastikan pengalaman yang nyaman.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-star"></i>
              <h4>Ulasan dan Penilaian</h4>
              <p>Periksa ulasan dan penilaian dari pelanggan lain untuk memilih kendaraan terbaik.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="vendor/home/assets/img/features.svg" class="img-fluid" alt="Fitur Sewa Kendaraan">
      </div>
    </div>

  </div>
</section><!-- End App Features Section -->


    <!-- ======= Details Section ======= -->
<!-- ======= Details Section ======= -->
<section id="details" class="details">
  <div class="container">

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <img src="vendor/home/assets/img/details-1.png" class="img-fluid" alt="Pilihan Kendaraan">
      </div>
      <div class="col-md-8 pt-4" data-aos="fade-up">
        <h3>Beragam Pilihan Kendaraan untuk Anda</h3>
        <p class="fst-italic">
          Kami menawarkan berbagai jenis kendaraan yang sesuai dengan kebutuhan Anda, mulai dari mobil keluarga hingga kendaraan komersial.
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Pilihan kendaraan yang lengkap dari berbagai kategori.</li>
          <li><i class="bi bi-check"></i> Kendaraan terbaru dengan teknologi terkini.</li>
          <li><i class="bi bi-check"></i> Kondisi kendaraan yang selalu diperiksa secara rutin.</li>
          <li><i class="bi bi-check"></i> Fleksibilitas dalam memilih kendaraan sesuai dengan kebutuhan Anda.</li>
        </ul>
        <p>
          Kami memastikan bahwa setiap kendaraan yang kami tawarkan dalam kondisi terbaik dan siap digunakan untuk perjalanan Anda.
        </p>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="vendor/home/assets/img/details-2.png" class="img-fluid" alt="Pemesanan Mudah">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Pemesanan Mudah dan Cepat</h3>
        <p class="fst-italic">
          Proses pemesanan kendaraan yang cepat dan mudah hanya dengan beberapa langkah sederhana.
        </p>
        <p>
          Proses pemesanan kami dirancang untuk kenyamanan Anda. Dengan sistem online yang intuitif, Anda dapat melakukan pemesanan kapan saja dan dari mana saja.
        </p>
        <p>
          Nikmati kemudahan dalam memilih, memesan, dan mendapatkan kendaraan yang Anda inginkan dengan proses yang efisien.
        </p>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <img src="vendor/home/assets/img/details-3.png" class="img-fluid" alt="Pembayaran Aman">
      </div>
      <div class="col-md-8 pt-5" data-aos="fade-up">
        <h3>Pembayaran Aman dan Terjamin</h3>
        <p>
          Pembayaran melalui platform kami dilakukan dengan aman menggunakan metode yang terpercaya dan terjamin.
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Metode pembayaran yang beragam dan aman.</li>
          <li><i class="bi bi-check"></i> Transaksi yang dilindungi dengan enkripsi data.</li>
          <li><i class="bi bi-check"></i> Konfirmasi pembayaran instan dan transparan.</li>
        </ul>
        <p>
          Kami berkomitmen untuk memberikan pengalaman pembayaran yang aman dan nyaman bagi setiap pelanggan kami.
        </p>
        <p>
          Dukungan pelanggan kami siap membantu Anda jika ada masalah atau pertanyaan terkait pembayaran.
        </p>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="vendor/home/assets/img/details-4.png" class="img-fluid" alt="Dukungan Pelanggan">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Dukungan Pelanggan 24/7</h3>
        <p class="fst-italic">
          Tim dukungan pelanggan kami siap membantu Anda setiap saat untuk memastikan kepuasan Anda.
        </p>
        <p>
          Kami menyediakan dukungan pelanggan 24/7 untuk menjawab pertanyaan, menangani masalah, dan memberikan bantuan terkait layanan sewa kendaraan kami.
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Dukungan pelanggan yang responsif dan ramah.</li>
          <li><i class="bi bi-check"></i> Bantuan teknis dan operasional kapan saja diperlukan.</li>
          <li><i class="bi bi-check"></i> Solusi cepat untuk setiap masalah yang mungkin Anda hadapi.</li>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End Details Section -->





<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Untuk pertanyaan, dukungan, atau informasi lebih lanjut mengenai layanan sewa kendaraan kami, silakan hubungi kami menggunakan informasi di bawah ini. Kami siap membantu Anda!</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 info">
            <i class="bx bx-map"></i>
            <h4>Address</h4>
            <p>Jl. Adam Street,<br>Pontianak, Indonesia</p>
          </div>
          <div class="col-lg-6 info">
            <i class="bx bx-phone"></i>
            <h4>Call Us</h4>
            <p>+6285849604654</p>
          </div>
          <div class="col-lg-6 info">
            <i class="bx bx-envelope"></i>
            <h4>Email Us</h4>
            <p>ronn.7ex@gmail.com</p>
          </div>
          <div class="col-lg-6 info">
            <i class="bx bx-time-five"></i>
            <h4>Working Hours</h4>
            <p>Mon - Sun: 07:00 to 18:00</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
          <div class="form-group">
            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="form-group mt-3">
            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group mt-3">
            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
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

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Sewa Kendaraan</h3>
          <p>
            Jl. Adam Street <br>
            Pontianak, Indonesia <br><br>
            <strong>Phone:</strong> +6285849604654<br>
            <strong>Email:</strong> ronn.7ex@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Car Rentals</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Vehicle Maintenance</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Support</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Follow us on social media for updates and promotions.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Sewa Kendaraan</span></strong>. All Rights Reserved
    </div>

  </div>
</footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/home/assets/vendor/aos/aos.js"></script>
  <script src="vendor/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/home/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="vendor/home/assets/js/main.js"></script>

</body>

</html>