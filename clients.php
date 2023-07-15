<?php 
/*
Template Name: Client page
*/ 
get_header();
$configs = get_option('zubayer');
?>
<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
    <div class="container">
    <div class="row section-title white-section">
            <div class="col-md-6 text-right">
                <h3><span><?php echo $configs['client_small_text']; ?></span><?php echo $configs['client_big_text']; ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $configs['client_big_description']; ?></p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials owl-carousel">
                    <?php
                    $testimonial = new WP_Query(array(
                        'post_type'         =>'testimonial_cat',
                        'posts_per_page'    =>'-1',
                    ));                    
                    if($testimonial->have_posts()):
                        while($testimonial->have_posts()):$testimonial->the_post();
                         $subtitle = get_post_meta( get_the_ID(), 'client_subtitle_working', true );                       
                    ?>

                    <div class="single-testimonial">
                        <div class="testi-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <p>" <?php echo wp_trim_words(get_the_content(), 21, ''); ?> "</p>
                        <h4><?php echo wp_trim_words(get_the_title(), 3, '');?> <span><?php echo $subtitle; ?></span>
                        </h4>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <h4>OOPS! Neither Say Any client</h4>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonilas Area End -->
<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
<!-- CTA Area End -->
<?php
get_footer();
?>