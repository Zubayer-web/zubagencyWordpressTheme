<?php $configs = get_option('zubayer'); ?>
<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-md navbar-light">
                    <?php 
                    
                        if($configs['header_logo']['url']){                            
                            echo '<div class="logo-img"><img src="'. $configs['header_logo']['url'] .'"></div>'; 
                        }
                        else{
                            echo '<a class="navbar-brand" href="#">'. esc_html($configs['header_text']) .'</a>';
                        }                       
                                     
                    ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">

                        <?php 
                       wp_nav_menu( array(
                            'theme_location' => 'main-header',
                            'menu_class' => 'navbar-nav ml-auto',
                            'container_class'=>'header-container', 
                       ) );
                    ?>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>