<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Flexor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->


  <!-- Vendor CSS Files -->


  <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php wp_head(); ?>
</head>

<body >

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <ul>
          <?php 
                dynamic_sidebar('top-bar');
                ?>
        </ul>

      </div>
      <div class="cta">
        <a href="https://www.linkedin.com/in/edvaldo-filho/"><i class="icofont-linkedin"></i></a>
        <a href="https://www.instagram.com/_edvaldo_filho_/"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><span>Flexor</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo/EdvaldoFilho.png" alt="" class="img-fluid"></a> -->
        <a href="index.html" class="img-fluid" ><?php the_custom_logo();?></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li><a href="index.html">Home</a></li>
          <li class="active"><a href="blog.html">Blog</a></li> -->
          <!-- <li><a href="">Home</a></li>
          <li><a href="http://localhost/wpcurso/">Blog</a></li> -->
          <?php
            wp_nav_menu(
                array(
                  'theme_location'  => 'main_menu',
                  'depth'           => 2,
                  'container'       => 'div',
                  'container_class' => 'nav-menu d-flex',
                  'container_id'    => '',
                  'menu_claass'     => '',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::falback',
                  'walker'          => new WP_Bootstrap_Navwalker()
                )
            );
           ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  