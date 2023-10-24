<?php
	// include "koneksi.php";

	// $tampil = mysqli_query ($konek, "SELECT * FROM tbl_produk WHERE status='1'");
	// $data = mysqli_fetch_array($tampil);
?>

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>JASA RAHARJA</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css2/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css2/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url() ?>assets/css2/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="<?= base_url() ?>assets/css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              JASA RAHARJA
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?= site_url('dashboard'); ?>"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="admission.html"> Admission </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="why.html"> Why Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="admin">Login</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1>
           Best way 
           to find 
           Inspiration
          </h1>
          <p>
          Asuransi Jasa Raharja adalah asuransi soaial milik negara (BUMN) yang Bertanggung jawab mengelolah asuransi kecelakaan lalu lintas bagi penumpang baik angkutan umum, kendaraan pribadi, maupin pejalan kaki.
          </p>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              Read More
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="<?= base_url() ?>assets/images/perpus.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <div class="common_style">

    <!-- about section -->
    <section class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="<?= base_url() ?>assets/images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box">
              <h3>
                ABDUL BAR SE.AWP
              </h3>
              <p>
              Bertugas sebagai Kepala Pimpinan Perwakilan Cabang kisaran
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end about section -->

    <!-- admission section -->
    <section class="admission_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="admission_detail-box">
              <h3>
               ARIEF NASUTION M.M
              </h3>
              <p>
              Bertugas Sebagai Staff Administrasi Pelayanan
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="admission_img-container">
              <img src="<?= base_url() ?>assets/images/estetik 1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- end admission section -->

    <!-- why section -->
    <section class="why_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="why_img-container">
              <img src="<?= base_url() ?>assets/images/buku.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="why_detail-box">
              <h3>
              M.RIDHO SYAFFENDI M.SI
              </h3>
              <p>
                Bertugas Sebagai Staff Administrasi 
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end why section -->

    <!-- determine section -->
    <section class="determine_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="determine_detail-box">
              <h3>
              MELY SIHOTANG
              </h3>
              <p>
                Bertugas Sebagai Kasir di Cabang kisaran.
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="determine_img-container">
              <img src="<?= base_url() ?>assets/images/estetik2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end determine section -->

  </div>


  <!-- client section -->
  <section class="client_section layout_padding">
    <h2 class="">
      Testimonial
    </h2>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="<?= base_url() ?>assets/images/sembunyi.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Asmaria Hasibuan
                          </h5>
                          <p>
                            Pelayanan sangat Bagus
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="<?= base_url() ?>assets/images/duduk.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Suliman
                          </h5>
                          <p>
                          Pelayanan sangat Bagus dan staff sangat ramah
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="<?= base_url() ?>assets/images/orang.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Sulastri
                          </h5>
                          <p>
                          Pelayanan mantap!!
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
     
    </div>
  </section>


  <!-- end client section -->


    <!-- contact section -->

    

      <!-- end contact section -->
      <section class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              JASA RAHARJA
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <h5>
                    Contact Us
                </h5>
                <p>
                    Hubungin kami 
                    Call 
                </p>
              </div>
              <div class="col-md-3">
           
                
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                  <div class="social-box">
                    <a href="">
                      <img src="<?= base_url() ?>assets/images/fb.png" alt="">
                    </a>
      
                    <a href="">
                      <img src="<?= base_url() ?>assets/images/twitter.png" alt="">
                    </a>
                    <a href="">
                      <img src="<?= base_url() ?>assets/images/linkedin.png" alt="">
                    </a>
                    <a href="">
                      <img src="<?= base_url() ?>assets/images/instagram.png" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </section>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>

 
</body>

</html>