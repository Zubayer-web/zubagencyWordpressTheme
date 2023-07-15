<?php  get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <?php 
                        while(have_posts()): the_post(); ?>
                    <h4><?php echo wp_trim_words(get_the_title(), 7 ,''); ?></h4>
                    <?php endwhile;?>
                    <ul>
                        <li><a href=""></a>Home</li> /
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            

             <div class="col-xl-8">
                <h2>Blog Title</h2>
                <img src="assets/img/blog/blog1.jpg" alt="">
                <p>Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis.Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis.Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis.Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis.Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis.</p>
                <div class="comments">               
                    <?php comment_form(); ?>               
                </div>
        </div>

        <div class="col-xl-4">

            <?php get_sidebar(); ?>

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