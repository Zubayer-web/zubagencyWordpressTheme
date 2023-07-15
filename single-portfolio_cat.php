<?php
get_header();
?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Single Portfolio</h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>"></a>Home</li> /
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">

            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <h4><?php echo get_post_meta(get_the_ID(), 'portfolio_subtittle', true); ?></h4>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content();?></p>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project gallery</h4>
                    </div>
                    <?php
                    $portfolio_gallerys = get_post_meta( get_the_ID(), 'portfolio_gallery', true );                     
                    foreach($portfolio_gallerys as $attachment_id => $attachment_url ):                    
                    ?>
                    <div class="col-xl-4">
                        <div class="project-gallery">
                            <?php echo wp_get_attachment_image($attachment_id); ?>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project overview</h4>
                        <?php $url = esc_url( get_post_meta( get_the_ID(), 'portfolio_video', true ) ); echo wp_oembed_get( $url ); ?>"
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>
                        <li><?php echo wpautop( get_post_meta( get_the_ID(), 'technology_used', true ) ); ?></li>                       
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <li><?php echo wpautop( get_post_meta( get_the_ID(), 'project_features', true ) ); ?></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area Start -->
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>best solution for your business <span>the can be used on larger scale projectss as well as small
                        scale projectss</span></h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area End -->
<?php get_footer(); ?>