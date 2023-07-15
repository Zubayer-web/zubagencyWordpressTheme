<?php 
/*
Template Name: Services
*/
get_header(); ?>
<?php get_template_part('template-parts/breadcumb'); ?>

<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">

        <?php
            $service_query = new WP_Query(array(
                'post_type' => 'service_cus',
                'posts_per_page' => 9,
                
            ));
            if($service_query->have_posts()):
                while($service_query->have_posts()):
                    $service_query->the_post();
                    $fa_icon = get_post_meta(get_the_ID(), 'services_icon' ,true);
                    
            ?>
           <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                      <?php echo $fa_icon; ?>                    
                     <h4><?php echo wp_trim_words(get_the_title(), 3 , ''); ?> </h4>
                     <p><?php echo wp_trim_words(get_the_content(), 15 ,''); ?> </p>
                  </div>
               </div>

            <?php endwhile;?>
            <?php else:?>
                <h4>OOPS! No Services Available</h4>
            <?php endif;
            wp_reset_postdata();           
            ?>
     </div>
    </div>
</section>
 <!-- CTA Area Start -->
 <?php get_template_part('template/footer/cta'); ?>
 <!-- CTA Area End -->
<?php get_footer(); ?>