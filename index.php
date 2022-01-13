<?php get_header(); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>
      </div>
    </section> -->
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">
        <?php
              if(have_posts()):
                  while(have_posts()): the_post();
            ?>
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          
            <article class="entry">

              <div class="entry-img">
                <!-- <img src="assets/img/blog-1.jpg" alt="" class="img-fluid"> -->
                <?php the_post_thumbnail('', array( 'class' => 'img-fluid')) ?>

              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php the_author_posts_link(); ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-link"></i> <a href=""><time datetime="2020-01-01"><?php the_category(); ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <div class="read-more">
                  <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            
          </div>
          <?php
                  endwhile;
                endif;
            ?>

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <?php
            the_posts_navigation(
                    array(
                      'next_text' => '<h2><i class="icofont-block-left"></i></h2>',
                      'prev_text' => '<h2><i class="icofont-block-right"></i></h2>',
                    )
            );
             ?>
            <!--  -->
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php get_footer(); ?>

            <!-- <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icofont-rounded-right"></i></a></li> -->