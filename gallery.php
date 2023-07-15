<?php
/*
template Name: gallery Page
*/
get_header();?>
<?php get_template_part('tamplate/breadcumb'); ?>
<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php
            $current = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;            
            $gallery_post = new WP_query(array(
                'post_type'=>'gallery_cat',
                'posts_per_page'=>'9',
                'paged'=>$current,
            ));
            if($gallery_post->have_posts()):
                while($gallery_post->have_posts()):$gallery_post->the_post();
                $gallery_img = get_post_meta( get_the_ID(), 'gallery_images', true );
                $gallery_lightbox_img = get_post_meta( get_the_ID(), 'gallery_lightbox_image', true );         
            ?>
            <div class="col-xl-4">
                <div class="single-gallery">
                    <img src="<?php echo $gallery_img; ?>" alt="<?php the_title(); ?>">
                    <div class="gallery-hover">
                        <div class="gallery-content">
                            <h3><a href="<?php echo $gallery_lightbox_img; ?>" class="gallery"><i
                                        class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else: ?>
            <h2>OOPS! NO Any Gallery Image</h2>
            <?php endif; ?>


        </div>
        <div class="row">
            <div class="col-xl-12">               
                <div class="pagination">
                    <?php 
                       $totalpage = $gallery_post-> max_num_pages;              
                        echo paginate_links(array(
                            'total'         =>$totalpage,
                            'current'       =>$current,
                            'type'          =>'plain',
                            'show_all'          =>false,
                            'aria_current'       => 'page',
                            'prev_text'          => __( '&laquo; Previous' ,'Zubayer_agency'),
                            'next_text'          => __( 'Next &raquo;' ,'Zubayer_agency'),
                        
                    ));
                    
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
<!-- CTA Area End -->
<?php get_footer(); ?>