<?php
/*
template name: Contact Page
*/
   get_header();
   $configs = get_option('zubayer');
?>
<?php get_template_part('template/breadcumb'); ?>
<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row text-center">
                     <?php $contects = $configs['contact_right_side'];                  
                        if($contects):
                           foreach($contects as $contect):
                        ?>
                     <div class="col-md-4">
                           <div class="contact-address">
                              <i class="<?php echo $contect['contact_right_side_icon']; ?>"></i>
                              <h4><?php echo $contect['contact_right_side_text']; ?>
                                 <span><?php echo $contect['contact_right_side_decs']; ?></span></h4>
                           </div>
                     </div>
                     <?php endforeach; ?>
                     <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="177" title="contact form"]'); ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                     <?php 
                   
                     $contect_map = $configs['Contect_map'];
                                        
                     ?>
                        <div class="google-map">                       
                        <iframe src="https://maps.google.com/maps?q=<?php echo $contect_map['latitude'];?>, <?php echo $contect_map['longitude'];?>&z=15&output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End -->
<!-- CTA Area Start -->
<?php get_template_part('template/footer/cta'); ?>
<!-- CTA Area End -->
<?php get_footer(); ?>