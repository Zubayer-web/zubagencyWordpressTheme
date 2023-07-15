<?php
/*
Template Name: Portfolio Page
*/
get_header();
$scarchtitle='';
if(!isset($_GET['title'])==''){
    $scarchtitle = $_GET['title'];
}
?>
<?php get_template_part('tamplate/breadcumb'); ?>
<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="portfolio-menu mb-40 text-center">
                    <!-- <button class="active" data-filter="*">ALL</button> -->
                    <a href="<?php echo get_page_link(); ?>" class="active">ALL</a>
                    <?php   
                        $current = get_query_var( 'paged' ) ? get_query_var( 'paged' ): 1;
                        $portfolio_menus = get_terms('portfolio_tax');
                           foreach($portfolio_menus as $portfolio_menu):
                        ?>
                    <button data-filter=".<?php echo $portfolio_menu->slug; ?>"
                        class=""><?php echo $portfolio_menu->name; ?> </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-xl-4">
                <form method="GET">
                    <input type="text" name="title" placeholder="Scarch Your Need" value="<?php echo $scarchtitle; ?>">
                    <input type="submit" value="Scarch">
                </form>
            </div>
        </div>
        <div class="row grid no-gutters">
            <?php
            $post_par_Page = 9;
            $portfolio_items = new WP_Query( array(
               'post_type'       =>'portfolio_cat',
               'posts_per_page'  => $post_par_Page,             
               'paged'           =>$current,             
               's'               =>$scarchtitle,             
               ) );
            if($portfolio_items->have_posts()):
               while($portfolio_items->have_posts()): $portfolio_items->the_post();
               $subtitle = get_post_meta(get_the_ID(),'portfolio_subtittle', true);
            ?>
            <div class="col-md-4 grid-item <?php
                 $portfolio_menus = get_the_terms(get_the_ID(), 'portfolio_tax');
                 foreach($portfolio_menus as $portfolio_menu){
                     echo $portfolio_menu->slug.' ';
                 } 
            ?>">
                <div class="single-portfolio">
                    <?php the_post_thumbnail(); ?>
                    <div class="portfolio-hover">
                        <div class="portfolio-content">
                            <h3><a href="<?php the_permalink() ?>" class=""><i
                                        class="fa fa-link"></i><?php the_title() ?><span><?php echo $subtitle;?></span></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <h2>OOPS! NO Any Portfilio Items</h2>

            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="pagination">
                    <?php                    
                        $totlepage = $portfolio_items-> max_num_pages;
                        echo paginate_links(
                            array(
                               'total'=>$totlepage, 
                               'current'=>$current, 
                               'format' => '/page/%#%',
                               'aria_current'=>'page', 
                               'prev_next'          => true,
                               'prev_text'          => __( '&laquo; Previous','Zubayer_agency'),
                               'next_text'          => __( 'Next &raquo;','Zubayer_agency' ),
                               'end_size'           => 2,                               
                            )
                        );
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- projectss Area End -->
<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
<!-- CTA Area End -->
<?php get_footer(); ?>