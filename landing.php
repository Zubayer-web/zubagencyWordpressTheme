<?php
//Template Name: Landing page
get_header(); 
$configs = get_option('zubayer');
?>
<!-- Slider Area Start -->
<section class="slider-area" id="home">
    <div class="slider owl-carousel">
        <?php
    $slider_images = new WP_Query( array(
        'post_type'          => 'slider_cus',
        'posts_per_page'     => 3,
    ) );
    
    if($slider_images->have_posts()):
        while($slider_images->have_posts()) : $slider_images->the_post();
        $images = get_post_meta( get_the_ID(), 'slider_images' , true );
        $sub_title = get_post_meta(get_the_ID(), 'first_title' ,true);
        $btn_content = get_post_meta(get_the_ID(), 'btn_Content' ,true);
        $btn_link = get_post_meta(get_the_ID(), 'btn_link' ,true);
    ?>
        <div class="single-slide" style="background-image: url('<?php echo esc_html($images); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <h4><?php echo esc_html($sub_title); ?></h4>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                                <a href="<?php echo esc_url($btn_link); ?>" class="box-btn"><?php echo esc_html($btn_content); ?>
                                    <span>=></span><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <h3><?php echo esc_html__('OOPS! No Slider Found','Zubayer_agency'); ?></h3>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
</section>
<!-- Slider Area Start -->
<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($configs['about_small_text']); ?></span> <?php echo esc_html($configs['about_big_text']); ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($configs['about_big_description']); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <div class="page-title">
                        <h4><?php echo esc_html($configs['about_left_text']); ?></h4>
                    </div>
                    <p><?php echo esc_html($configs['about_left_description']); ?></p>
                    <a href="#" class="box-btn"><?php esc_html_e('read more','Zubayer_agency'); ?><i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-5">

                <?php
            $single_abouts = $configs['about_right_side'];
            if($single_abouts):
                foreach($single_abouts as $single_about):
            ?>
                <div class="single_about">
                    <i class="<?php echo esc_html($single_about['about_right_side_icon']); ?>"></i>
                    <h4><?php echo esc_html($single_about['about_right_side_text']); ?></h4>
                    <p><?php echo esc_html($single_about['about_right_side_decs']); ?></p>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="single_about">
                    <i class="fa fa-laptop"></i>
                    <h4>our mission</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry </p>
                </div>
                <div class="single_about">
                    <i class="fa fa-user"></i>
                    <h4>our vission</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry </p>
                </div>
                <div class="single_about">
                    <i class="fa fa-pencil"></i>
                    <h4>our history</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry </p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</section>
<!-- About Area End -->
<!-- Choose Area End -->
<section class="choose">
    <div class="container">
        <div class="row pt-100 pb-100">
            <div class="col-md-6">
                <div class="faq">
                    <div class="page-title">
                        <h4><?php echo esc_html($configs['feq_title']); ?></h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php
                        $collapses = $configs['accordion_right_side'];
                        if($collapses):
                            $i = 0;
                                foreach($collapses as $collapse):
                            $i++;
                        ?>
                        <div class="card">
                            <div class="card-header" id="heading-<?php echo $i; ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse-<?php echo $i; ?>" aria-expanded="true"
                                        aria-controls="collapse-<?php echo $i; ?>">
                                        <?php echo esc_html($collapse['accordion_right_side_text']); ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if( $i == 1 ){echo 'show'; } ?>"
                                aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo esc_html($collapse['accordion_right_side_decs']); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skills">
                    <div class="page-title">
                        <h4><?php echo esc_html($configs['skills_title']); ?></h4>
                    </div>
                    <?php
                        $skills = $configs['skills_right_side'];
                            if($skills):
                                foreach($skills as $skill):
                    ?>
                    <div class="single-skill">
                        <h4><?php echo esc_html($skill['skill_right_side_text']); ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo esc_html($skill['skill_right_side_decs']); ?>%;" aria-valuenow="<?php echo esc_html($skill['skill_right_side_decs']); ?>"
                            aria-valuemin="0" aria-valuemax="100"><?php echo esc_html($skill['skill_right_side_decs']); ?>%</div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->
<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($configs['service_small_text']); ?></span>
                    <?php echo esc_html($configs['service_big_text']); ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($configs['service_big_description']); ?></p>
            </div>
        </div>
        <div class="row">
            <?php
                $services_post = new WP_Query( array(
                    'post_type'         =>'service_cus',
                    'posts_per_page'    => 6,
                    'order' => 'ASC'
                ) );
                if($services_post->have_posts()):
                    while($services_post->have_posts()) : $services_post->the_post();                    
                    $service_icon = get_post_meta( get_the_ID(), 'services_icon', true );
                ?>

            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <?php echo $service_icon; ?>
                    <h4><?php echo wp_trim_words( get_the_title(), 3, ''); ?></h4>
                    <?php echo wp_trim_words( get_the_content(), 17, '' ); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <h2><?php echo esc_html__('OOPS! Servise Not Found','Zubayer_agency'); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Services Area End -->

<!-- Counter Area End -->
<section class="counter-area">
    <div class="container-fluid">
        <div class="row">
                <?php
                $counters = $configs['counter_right_side'];
                if($counters):
                    foreach($counters as $counter):
                ?>
                    <div class="col-md-3">
                        <div class="single-counter">
                            <h4><i class="<?php echo esc_html($counter['counter_right_side_icon']); ?>"></i><span class="counter"><?php echo esc_html($counter['counter_right_side_decs']); ?></span><?php echo esc_html($counter['counter_right_side_text']); ?></span></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>   
        </div>
    </div>
</section>
<!-- Counter Area End -->
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($configs['team_small_text']); ?></span> <?php echo esc_html($configs['team_big_text']); ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($configs['team_big_description']); ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
                    $team_mumber = new WP_Query( array(
                        'post_type'           =>'team_cat',
                        'posts_per_page'      => 3,
                        'order'      =>'ASC',
                    ) );
                    if($team_mumber->have_posts()):
                        while($team_mumber->have_posts()) : $team_mumber->the_post();
                        $number_working     = get_post_meta( get_the_ID(), 'servise_working_title', true );
                        $number_facebook    = get_post_meta( get_the_ID(), 'facebook_link', true );
                        $number_twitter     = get_post_meta( get_the_ID(), 'twitter_link', true);
                        $number_linkedin    = get_post_meta( get_the_ID(), 'linkedin_link', true);
                        $number_google      = get_post_meta( get_the_ID(), 'google_plus_link', true);                        
                        ?>
            <div class="col-md-4">
                <div class="single-team">
                    <?php the_post_thumbnail(); ?>
                    <div class="team-hover">
                        <div class="team-content">
                            <h4><?php the_title(); ?><span><?php echo esc_html($number_working); ?></span></h4>
                            <ul>
                                <?php
                                    if($number_facebook){
                                       echo '<li><a href="'.esc_url($number_facebook).'"><i class="fa fa-facebook"></i></a></li>'; 
                                    }
                                ?>
                                <?php
                                    if($number_twitter){
                                       echo '<li><a href="'.esc_url($number_twitter).'"><i class="fa fa-twitter"></i></a></li>'; 
                                    }
                                ?>
                                <?php
                                    if($number_linkedin){
                                       echo '<li><a href="'.esc_url($number_linkedin).'"><i class="fa fa-linkedin"></i></a></li>'; 
                                    }
                                ?>
                                <?php
                                    if($number_google){
                                       echo '<li><a href="'.esc_url($number_google).'"><i class="fa fa-google-plus"></i></a></li>'; 
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <h3 class="team-nuber"><?php echo esc_html__('OOPS! Team Number Is not Found','Zubayer_agency'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
    <div class="container">
        <div class="row section-title white-section">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($configs['client_small_text']); ?></span><?php echo esc_html($configs['client_big_text']); ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($configs['client_big_description']); ?></p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials owl-carousel">
                    <?php
                    $testimonials = new WP_Query(array(
                        'post_type'         =>'testimonial_cat',
                        'posts_per_page'    => '',
                    ));                    
                    if($testimonials->have_posts()):
                        while($testimonials->have_posts()):$testimonials->the_post();
                        $subtitle = get_post_meta( get_the_ID(), 'client_subtitle_working', true );                       
                    ?>

                    <div class="single-testimonial">
                        <div class="testi-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <p>" <?php echo wp_trim_words(get_the_content(), 21, ''); ?> "</p>
                        <h4><?php echo wp_trim_words(get_the_title(), 3, ''); ?> <span><?php echo esc_html($subtitle); ?></span>
                        </h4>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <h4><?php echo esc_html__('OOPS! Neither Say Any client','Zubayer_agency'); ?></h4>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonilas Area End -->
<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($configs['news_small_text']); ?></span><?php echo esc_html($configs['news_big_text']); ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($configs['news_big_description']); ?></p>
            </div>
        </div>
        <div class="row">

            <?php
            $main_posts = new WP_Query(array(
                'post_type'     =>'post',
                'posts_per_page'=>'3',
            ));
            if($main_posts->have_posts()):
                while($main_posts->have_posts()):$main_posts->the_post();
        ?>
            <div class="col-md-4">
                <div class="single-blog">
                    <?php the_post_thumbnail(); ?>
                    <div class="post-content">
                        <div class="post-title">
                            <h4><a
                                    href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 4, ''); ?></a>
                            </h4>
                        </div>
                        <div class="pots-meta">
                            <ul>
                                <li><a href="#"><?php the_time('j M Y'); ?></a></li>
                                <li><a href="#"><?php the_author(); ?></a></li>
                            </ul>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(), 21, '</p>
                        <a href="'. get_the_permalink() .'" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>'); ?>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <h2><?php echo esc_html__('OOPS! No Post Found','Zubayer_agency'); ?></h2>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Latest News Area End -->

<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
<!-- CTA Area End -->
<?php get_footer();?>