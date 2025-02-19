<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Request Kebutuhan Buku</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/trans_bg.png" rel="trans_bg.png">
  <link href="assets/img/trans_bg.png" rel="trans_bg.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <link href="assets/img/trans_bg.png" rel="trans_bg.png">
        <img src="assets/img/logoPCRValid.png" width="300px">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="user/dashboard">Services</a></li>

          </li>
          <li><a href="{{ route('admin.register') }}">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Selamat Datang di Sistem Request Kebutuhan Buku</h2>
              <p>Ini adalah web resmi Politeknik Caltex Riau untuk para civitas Politeknik Caltex Riau
                merequest kebutuhan buku atau modul</p>
              <a href="#Rekomendasi" class="btn-get-started">Mulai Pencarian</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/landingPage/perpustakaan1.jpg" alt="">
        </div>

        <div class="carousel-item active">
          <img src="assets/img/landingPage/perpustakaan2.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/landingPage/perpustakaan3.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/landingPage/perpustakaan4.jpeg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/landingPage/perpustakaan5.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->

    <!-- Get Started Section -->
    <section id="get-started" class="get-started section">

      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="content">
              <h3>Perpustakaan Digital PCR</h3>
              <p>
                Perpustakaan Digital PCR adalah platform online yang menyediakan akses mudah ke koleksi buku digital, e-book, dan sumber daya edukasi lainnya. 
                Pengguna dapat mencari, meminjam, dan mengajukan permintaan buku, serta mendapatkan rekomendasi buku yang sesuai dengan minat atau mood mereka. 
              </p>
              <p>Dengan fitur pencarian cerdas, permintaan buku, serta rekomendasi personal, kami berkomitmen untuk mendukung pembelajaran dan pengembangan diri.
                 Akses ilmu tanpa batas, karena membaca adalah kunci untuk membuka dunia yang lebih luas!               <p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Book Wish List</h3>
              <p>Tambahkan buku yang kamu inginkan ke daftar, dan biarkan kami membantu mewujudkan permintaan bacaanmu! 📚✨ </p>
              <div class="row gy-3">

                <div class="col-12">
                  <input type="text" name="name" class="form-control" placeholder="Apa yang kamu rasakan hari ini?" required="">
                </div>

                

                <div class="col-12">
                  <input type="text" class="form-control" name="phone" placeholder="Pilih genre buku seperti pilih Zodiakmu !" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Buku apa yang ingin kamu baca? " required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
               
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Submit</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>

    </section><!-- /Get Started Section -->

    <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan dan Fasilitas Perpustakaan</h2>
        <p>Cek Fasilitas Perpustakaan Kami yang Lengkap dan Menunjang Kebutuhan Belajar Anda!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/ruangBaca.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">BI Corner</h4>
                    <p>Nikmati kenyamanan ruang baca kami yang tenang dan nyaman, dilengkapi dengan kursi dan meja untuk menunjang kegiatan membaca buku, 
                      majalah, atau jurnal. Tempat yang ideal untuk fokus dan menyusun bahan bacaan dengan nyaman.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/KoleksiBuku.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Koleksi Buku Dan Referensi</h4>
                    <p>Temukan berbagai koleksi buku dari berbagai bidang ilmu, baik fiksi maupun non-fiksi, serta sumber referensi seperti ensiklopedia, 
                      kamus, dan atlas. Semua bahan yang Anda butuhkan untuk penelitian tersedia di sini.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/KerjaKelompok.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Ruang Diskusi Dan Kelompok Belajar</h4>
                    <p>Gunakan ruang diskusi kami untuk bekerja sama dalam proyek atau studi kelompok. Dilengkapi dengan meja besar, 
                      papan tulis, dan peralatan lainnya, ruangan ini sangat ideal untuk kolaborasi dan pembelajaran bersama.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/AksesInternet.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Komputer dan Akses Internet</h4>
                    <p>Gunakan fasilitas komputer dengan akses internet untuk mencari informasi, menjelajahi database digital, dan melakukan penelitian. 
                      Beberapa perpustakaan juga menyediakan software khusus untuk mendukung kegiatan belajar dan penelitian Anda.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Layanan Bantuan oleh Perpustakaan Politeknik Caltex Riau</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Request Buku dan Modul</h3>
              <p>Dosen dan mahasiswa dapat mengajukan permintaan buku atau modul yang tidak tersedia di perpustakaan melalui form online, yang akan diproses oleh petugas.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Peminjaman Buku dan Modul</h3>
              <p>Buku dan modul, baik fisik maupun digital, dapat dipinjam langsung atau melalui platform online dengan pengambilan terjadwal.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Pengajuan Modul untuk Mata Kuliah</h3>
              <p>Dosen dapat mengajukan permintaan modul atau bahan ajar khusus untuk mata kuliah yang diajarkan, tersedia dalam format digital atau fisik.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Rekomendasi Berdasarkan Mata Kuliah</h3>
              <p>Sistem memberikan rekomendasi buku dan modul relevan untuk mata kuliah yang dipilih oleh dosen atau mahasiswa</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Rekomendasi Berdasarkan Mata Kuliah</h3>
              <p>Akses ke berbagai e-book, jurnal, dan materi digital tersedia untuk mendukung kebutuhan akademik dosen dan mahasiswa.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Status Pengajuan atau Peminjaman</h3>
              <p>Sistem mengirimkan pengingat pengembalian buku/modul dan opsi perpanjangan peminjaman secara otomatis.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

  
    <!-- Projects Section -->
    <section id="Rekomendasi" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Rekomendasi</h2>
        <p>Berikut buku - buku yang direkomendasikan untuk dipinjam</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-BisnisDigital">Bisnis Digital</li>
            <li data-filter=".filter-IlmuKomputer">Ilmu Komputer </li>
            <li data-filter=".filter-Komunikasi">Komunikasi</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Komunikasi">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/TeoriKomunikasiIndividu.png" class="img-fluid" alt="" width="450px">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/buku/BisnisDigital.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-BisnisDigital">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/BisnisDigital.jpg" class="img-fluid" alt="" >
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-IlmuKomputer">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/Antena_Propagasi.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-IlmuKomputer">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/Raspberry.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-IlmuKomputer">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/Bahasa C.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-BisnisDigital">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/AI_Marketing.jpg" class="img-fluid" alt="" width="450px">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/UI_UX.avif" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-BisnisDigital">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/KomunikasiPemasaranDigital.avif" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Komunikasi">
              <div class="portfolio-content h-100">
                <img src="assets/img/buku/PublicRelation.avif" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Projects Section -->

    <!-- Recent Blog Posts Section -->
    <section id="recent-blog-posts" class="recent-blog-posts section">

         
            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Blog Posts Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Library Contact</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A1017 Andika Syuhada</p>
            <p>Rumbai, MR 2017</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>andika23ti@mahasiswa.pcr.ac.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Teaam</h4>
          <ul>
            <li><a href="#">Dhea Amanda Reyhan</a></li>
            <li><a href="#">Mifta Rahma Alisha</a></li>
            <li><a href="#">Steven</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Security</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Admin</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Library Request</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">NextGenWeb</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>