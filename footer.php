<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <?php
            if(is_active_sidebar('footer-address')){
              dynamic_sidebar('footer-address');
            }

        ?>
        <!-- <h3>Flexor</h3>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p> -->
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Links Úteis</h4>
        <?php 
          wp_nav_menu(
              array(
                'theme_location' => 'footer_menu',
                'before' => '<i class="bx bx-chevron-right"></i>'
              )
          );
        ?>
        <!-- <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul> -->
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Solucões</h4>
        <ul>
        <?php
            wp_nav_menu(
                array(
                  'theme_location'  => 'service_menu',
                  'before'       => '<i class="bx bx-chevron-right"></i> <a href="#"></a>',
                )
            );
           ?>
          <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
       <!-- Para preeche espaço -->
      </div>

    </div>
  </div>
</div>

<div class="container d-lg-flex py-4">

  <div class="mr-lg-auto text-center text-lg-left">
    <div class="copyright">
      &copy; Copyright <strong><span>Edvaldo Filho</span></strong>. Todos os direitos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
  <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->

<?php wp_footer(); ?>
</body>

</html>