<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    @include('style')
    <title>Landing Page</title>
    {{-- <link rel="stylesheet" href="{{ asset('public/css/style2.css') }}"> --}}
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container ">
        <a class="navbar-brand" href="#">DigiPos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active " href="#">Home 
            <a class="nav-link  " href="#galery">GALERY</a>
            <a class="nav-link " href="#info">INFORMASI</a>
            <a class="nav-link  " href="#footer">ABOUT</a>
            <a class="btn btn-primary tombol" href="{{ route('login') }}">Login</a>
          </div>
        </div>
    </div>
      </nav>

    <!-- Akhir Navbar -->
        <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4 text-white ">Selamat Datang di <span>Digi Posyandu</span> <br>dan <span>Mari</span> Bergabung Dengan Kami</h1>
            <a href="" class="btn btn-primary tombol">Download</a>
        </div>
      </div>

    <!-- Akhir Jumbotron -->

<div class="warnain hidden">
  <div class="container">
    <!-- Infopanel -->
    <div class="justify-content-left panel">
    
        <div class="col-6 info-panel">
          <div class="keunggulan text-center">
            <h2>Keunggulan</h2>
          </div>
          <div class="konten">
            <p>Mempermudah Dalam Pengumpulan Data Imunisasi Dan Gizi Dari Seluruh Posyandu dan Puskesmas di Indramayu. Serta Mengetahui Daerah Mana yang pembagian Imunisasinya Dan Gizinya Tidak Merata</p>
          </div>
            </div>
        </div>
    </div>
    
    <!-- Akhir infopanel -->
        <!-- Container -->
    
    <!-- Co working space -->
    <div class="pembungkus clearfix" id="galery" data-scrol-index="2">
      <div class="working-space">
        <div class="judul text-center">
          <h1>Galery</h1>
        </div>
        <div class="taro">
          <div class="gambar1">
            <img src="gambar/gambar1.png" alt="" class="img-fluid" id="gambar2">
          </div>
          <div class="gambar2">
            <img src="gambar/gambar2.png" alt="" class="img-fluid" id="gambar2">
          </div>
          <div class="gambar3">
            <img src="gambar/gambar3.png" alt="" class="img-fluid" id="gambar3">
          </div>
          <div class="gambar5">
            <img src="gambar/gambar5.png" alt="" class="img-fluid" id="gambar5">
          </div>
          <div class="gambar4">
            <img src="gambar/gambar4.png" alt="" class="img-fluid" id="gambar4">
          </div>
        </div>

      </div>
    </div>
  
    </div>
  
    




  <!-- Informasi -->
  <div class="informasi" id="info" data-scrol-index="2">
    <div class="col-lg-6">
      <img src="gambar/kantor.jpg"class="img-fluid"  alt="">
    </div>
    <div class="col-5 tengah mx-auto" >
      <h3>Kenapa Perlu <span>DigiPos?</span></h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium eveniet modi odit quas nam corrupti harum doloremque accusantium optio ad. Saepe dolores aliquid temporibus nobis delectus perspiciatis at facere ut.</p>
    </div>
  </div> 
  <!-- akhir infopanel -->
<!-- <footer id="footer" data-scrol-index="2">
  <div class="tangan">
    <img src="gambar/tangan.png" alt="" id="tangan">
  </div>
  <div class="justify-content-left aplikasi">
    <div class="col-sm-9">

      <div class="google">
        <div class="keterangan">
          <h3>DigiPos Dalam Satu Genggaman</h3>
          <p><span> Mendapatkan Informasi</span></p>
        </div>
       
      </div>
      <div class="google2">
        <img src="gambar/google.png" alt="" id="google">
      </div>
    </div>
</div>
    <div class="footer">
        <div class="col text-center">
            <p>&copy; DigiPosyandu 2022</p>
        </div>
    </div>
</footer> -->

<!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #21D192"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Terkoneksi Dengan Kami:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
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
            <h6 class="text-uppercase fw-bold">DigiPosyandu</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-dark">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-dark">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-dark">lorem</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Indramayu, Indonesia</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> No</p>
            <p><i class="fas fa-print mr-3"></i> No</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/"
         >DigiPosyandu/a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<!-- End of .container -->

        <!-- Akhir container -->
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>