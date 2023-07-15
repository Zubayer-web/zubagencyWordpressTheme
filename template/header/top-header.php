<?php $configs = get_option('zubayer'); ?>
<section class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="header-left">
                    <a href=""><i class="<?php echo esc_html($configs['header_top_email_icon']); ?>"></i>
                        <?php echo esc_html($configs['header_top_email_id']); ?></a>
                    <a href=""><i class="<?php echo esc_html($configs['header_top_phone_icon']); ?>"></i>
                        <?php echo esc_html($configs['header_top_phone_number']); ?></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="header-social">
                    <?php 
                        $social_icons = $configs['social_media'];
                        if($social_icons):
                           foreach($social_icons as $social_icon):                      
                    ?>
                    <a href="<?php echo esc_url($social_icon['social_media_link']); ?>"><i class="<?php echo esc_html($social_icon['social_media_icon']); ?>"></i></a>
                    <?php endforeach; ?>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</section>