<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Unijos eLogbook</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/1712237744407.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  
    <!-- Font Icon -->
    <link href="assets/img/uj.png" rel="icon">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

  <!-- =======================================================
  * Template Name: Vesperr
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <body>

    <header id="header" class="header d-flex align-items-center sticky-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">
  
        <a href="/" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="/assets/img/1712237744407.jpg" alt="">
          <h1 class="sitename">UNIVERSITY OF JOS</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            @auth
            <!--<h6>You Are Logged in as<div class="text-uppercase">{{ auth()->user()->name }}</div></h6> -->
            <li><a href="/" class="active">Home<br></a></li>
           <li><a href="#clients">About</a></li>
            <li><a href="/reports">My Logbook</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="supervisor/reports">Manage Logbook</a></li>
            <li>
              <form method="POST" action="/logout">
                  @csrf
                  <button type="submit" class="btn-getstarted">Logout
              </form>
          </li>
            @else
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
            <a class="btn-getstarted" href="/register">Get Started</a>
            @endauth
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  
      </div>
    </header><br><br>

    <main>
        {{ $slot }}
    </main><br><br>
    
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  
    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script scr="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  
  </body>
</html>