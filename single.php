<?php get_header(); ?>

<main id="main">


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">
        <!-- php -->
    <?php 
         while(have_posts()): the_post();
     ?>
      <div class="col-lg-8 entries">

        <article class="entry entry-single">

          <div class="entry-img">
            <!-- <img src="assets/img/blog-1.jpg" alt="" class="img-fluid"> -->
            <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>

          </div>

          <h2 class="entry-title">
            <?php the_title(); ?>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php the_author_posts_link(); ?></a></li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><?php echo get_the_date(); ?></a></li>
              <li class="d-flex align-items-center"><i class="icofont-link"></i><a href="blog-single.html"><?php the_category(); ?></a></li>
            </ul>
          </div>

          <div class="entry-content">
            <p>
            <?php the_content(); ?>
            </p>

           

          </div>

          <div class="entry-footer clearfix">
            <div class="float-left">

              <i class="icofont-link"></i>
              <ul class="cats">
                <li><a href="#"><?php the_category(',');?></a></li>
              </ul>

              <i class="icofont-tags"></i>
              <ul class="tags">
                <li><a href="#"><?php the_tags('Tags: '  , ','); ?></a></li>
              </ul>

            </div>

            <div class="float-right share">
              <!-- <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a> -->
              <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
              <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

          </div>

        </article><!-- End blog entry -->

        <!-- <div class="blog-author clearfix">
          <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
          <h4>Jane Smith</h4>
          <div class="social-links">
            <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
            <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
            <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
          </div>
          <p>
            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
          </p>
        </div> -->
        <!-- End blog author bio -->

        <!-- End blog comments -->

      </div><!-- End blog entries list -->
      

      <div class="col-lg-4">

        <div class="sidebar">

          <!-- <h3 class="sidebar-title">Search</h3> -->
          <!-- <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="icofont-search"></i></button>
            </form>

          </div> -->
          <!-- End sidebar search formn-->

          <?php 
                dynamic_sidebar('sidebar-right');
                ?>

          <!-- <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>

          </div> -->
          <!-- End sidebar categories-->

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
          <?php 
          $destaque = new WP_Query('post_type=post&post_per_page=1&cat=5,6,7');
          if($destaque->have_posts()):
              while($destaque->have_posts()): $destaque->the_post();
          ?>
          <div class="post-item clearfix">
              <?php the_post_thumbnail('thumbnail'); ?>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <time datetime="2020-01-01"><?php echo get_the_date(__('M d, Y')); ?></time>
            </div>
          

         <?php 
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
            
        
            <!-- <div class="post-item clearfix">
              <img src="assets/img/blog-recent-2.jpg" alt="">
              <h4><a href="blog-single.html"></a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog-recent-3.jpg" alt="">
              <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog-recent-4.jpg" alt="">
              <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog-recent-5.jpg" alt="">
              <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div> -->

          </div><!-- End sidebar recent posts-->
          
          <h3 class="sidebar-title">Tags</h3>
          <div class="sidebar-item tags">
            <ul>
              <li><a href="#"><?php the_tags('<i class="icofont-tags"></i>', ''); ?></a></li>
            </ul>

          </div>
          <!-- End sidebar tags -->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

      <?php
                  endwhile;
            ?>
    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->

<?php get_footer(); ?>