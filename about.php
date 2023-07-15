<?php
/*
template Name: About Page
*/
get_header();
$configs = get_option('zubayer');
?>

<!-- Header Area Start -->
<?php get_template_part('template/breadcumb'); ?>

<!-- About Area Start -->

<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo $configs['about_small_text']; ?></span> <?php echo $configs['about_big_text']; ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $configs['about_big_description']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <div class="page-title">
                        <h4><?php echo $configs['about_left_text']; ?></h4>
                    </div>
                    <p><?php echo $configs['about_left_description']; ?></p>
                    <a href="#" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-5">

                <?php
                $single_abouts = $configs['about_right_side'];
                if($single_abouts):
                    foreach($single_abouts as $single_about):
                ?>
                    <div class="single_about">
                        <i class="<?php echo $single_about['about_right_side_icon']; ?>"></i>
                        <h4><?php echo $single_about['about_right_side_text']; ?></h4>
                        <p><?php echo $single_about['about_right_side_decs']; ?></p>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Area End -->
<?php get_footer(); ?>