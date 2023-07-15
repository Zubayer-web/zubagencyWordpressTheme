<?php $configs = get_option('zubayer'); ?>
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><?php echo $configs['cta_text']; ?> <span><?php echo $configs['cta_decs']; ?></span></h4>
            </div>
            <div class="col-md-6 text-center">               
                <a href="<?php echo $configs['cta_button']['url']; ?> " class="box-btn"><?php echo $configs['cta_button']['text']; ?> <i class="fa fa-angle-double-right"></i></a>               
            </div>
        </div>
    </div>
</section>