<?php get_header(); ?>
     <!-- Latest  Area started -->
<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">
                <?php
                while(have_posts()):
                    the_post(); ?>
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <?php endwhile; ?>
            </div>
         </div>
</section>
      <!-- Latest Area End -->
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<?php get_footer(); ?>