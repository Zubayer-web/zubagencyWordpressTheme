<?php get_header(); ?>

<!-- breadcumb Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <!-- <h4>Blog</h4>                     -->
                    <h4><li><a href="<?php echo site_url();?>">Blog</a></li></h4>
                    <ul>
                        
                        <li><?php the_archive_title();?></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- breadcumb Area end -->


<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">

            <?php
            //$main_post = new WP_Query($args); kore jabe aitau

            if(have_posts()):
               while(have_posts()):
                  the_post();             
            ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <?php the_post_thumbnail(); ?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="#"><?php the_time('j M, Y');?></a></li>
                              <li><a href="#"><?php the_category(', '); ?></a></li>
                              <li><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                           </ul>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(),20,'</p>
                        <a href="'. get_the_permalink() .'" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>'); ?>
               <?php endwhile; ?>
               <?php else: ?>
               <h3>OOPS! No Posts</h3>
               <?php endif; ?> 
             </div>
         </div>
      </section>
      <!-- Latest News Area End -->
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