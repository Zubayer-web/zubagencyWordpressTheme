<?php 
/*
Template Name: team Menber
*/
get_header(); 
$configs = get_option('zubayer');
?>
<?php get_template_part('template-parts/breadcumb'); ?>
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
   <div class="container">       
         <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo $configs['team_small_text']; ?></span> <?php echo $configs['team_big_text']; ?>
                </h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $configs['team_big_description']; ?></p>
            </div>
        </div>
         <div class="row">

            <?php
             $team_mumber = new WP_Query( array(
               'post_type'           =>'team_cat',
               'posts_per_page'      => 9,
               'order'      =>'ASC',
           ) );
             if($team_mumber->have_posts()):
                while($team_mumber->have_posts()):
                            $team_mumber->the_post();
                      $number_working    = get_post_meta( get_the_ID(), 'servise_working_title', true);      
                      $number_facebook   = get_post_meta( get_the_ID(), 'facebook_link', true);      
                      $number_twitter    = get_post_meta( get_the_ID(), 'twitter_link', true);      
                      $number_linkdedin  = get_post_meta( get_the_ID(), 'linkedin_link', true);      
                      $number_google     = get_post_meta( get_the_ID(), 'google_plus_link', true);      
            
            
               ?>

               <div class="col-md-4">
                  <div class="single-team">
                     <?php the_post_thumbnail(); ?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?><span><?php echo $number_working; ?></span></h4>
                           <ul>
                              <?php 
                              if($number_facebook){
                                 echo '<li><a href="'. $number_facebook .'"><i class="fa fa-facebook"></i></a></li>';
                              }
                              ?>
                              <?php
                               if($number_twitter){
                                  echo '<li><a href="'. $number_twitter  .'"><i class="fa fa-facebook"></i></a></li>';
                               }                              
                              ?>
                              <?php
                               if($number_linkdedin){
                                  echo '<li><a href="'. $number_linkdedin .'"><i class="fa fa-linkedin"></i></a></li>';
                               }                              
                              ?>
                              <?php
                               if($number_google){
                                  echo '<li><a href="'.$number_google.'"><i class="fa fa-google-plus"></i></a></li>';
                               }                              
                              ?>
                             
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endwhile; ?>
            <?php else: ?>
               <h2>OOPS! NO Any Teams</h2>
            <?php endif; ?>   
       

      </div>
   </div>
</section>
<!-- Team Area ended -->
<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
 <!-- CTA Area End -->
<?php get_footer(); ?>