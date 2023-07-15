<?php
function after_theme_support(){
    add_theme_support('header');
    add_theme_support( 'widgets' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link','image','quote','video','audio','chat') );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme','after_theme_support');
// menu register
function register_theme_menu(){
    register_nav_menus( array(
        'top-menu'      => esc_html__( 'Top Menu', 'Zubayer_agency' ),
        'main-header'   => esc_html__( 'Main Header', 'Zubayer_agency' ),
        'Category-menu' => esc_html__( 'Category Menu', 'Zubayer_agency' ),
        'footer-menu'   => esc_html__( 'Footer Menu', 'Zubayer_agency' ),
    ) );
}
add_action( 'init', 'register_theme_menu' );

  function ragister_sidebar_footer_widgets(){
        register_sidebar(array(
            'id'=>'zu_agency',
            'name'=>'Agency Sidebar',
            'before_widget'=>'<div class="">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4>',
            'after_title'=>'</h4>',
        )); 
    }
   add_action( 'widgets_init', 'ragister_sidebar_footer_widgets' ); 

   add_filter('get_the_archive_title_prefix','__return_false');
function home_slider_add(){
    register_post_type( 'slider_cus', array(
        'labels'      =>array(
            'name'                  => esc_html__( 'Our Sliders', 'Zubayer_agency' ),
            'singular_name'         => esc_html__( 'Our Slider', 'Zubayer_agency' ),
            'menu_name'             => esc_html__( 'Our Slider', 'Zubayer_agency' ),
            'parent_item_colon'     => esc_html__( 'Parent Slider', 'Zubayer_agency' ),
            'all_items'             => esc_html__( 'All Slider items','Zubayer_agency'),
            'view_item'             => esc_html__( 'View Sliders','Zubayer_agency' ),
            'add_items'             => esc_html__( 'Add Slider Items','Zubayer_agency' ),
            'add_new_item'          => esc_html__( 'Add Slider item','Zubayer_agency' ),
            'add_new'               => esc_html__( 'Add Slider New','Zubayer_agency' ),
            'edit_item'             => esc_html__( 'Edit Sliders item','Zubayer_agency' ),
            'update_item'           => esc_html__( 'Update Sliders item','Zubayer_agency' ),
            'search_items'          => esc_html__( 'search_items Sliders item','Zubayer_agency' ),
            'not_found'             => esc_html__( 'Not Found Any Slider', 'Zubayer_agency' ),
            'set_featured_image'    => esc_html__( 'Set Slider Featured Image','Zubayer_agency' ),
            'remove_featured_image' => esc_html__( 'Remove Slider Featured Image','Zubayer_agency' ),
        ),          
            'public'=>true,
            'menu_position'     => 15,
            'menu_icon'         =>'dashicons-images-alt2',
            'rewrite'           => array( 'slug' => 'our-Slider' ),
            'supports'          =>array( 'title','editor','author', ),
            'show_ui'           => true,
            'can_export'        => true, 
  ) );

  register_post_type( 'service_cus', array(
    'labels'      =>array(
        'name'                  => esc_html__( 'Our Services', 'Zubayer_agency' ),
        'singular_name'         => esc_html__( 'Our Service', 'Zubayer_agency' ),
        'menu_name'             => esc_html__( 'Our Services', 'Zubayer_agency' ),
        'parent_item_colon'     => esc_html__( 'Parent Services', 'Zubayer_agency' ),
        'all_items'             => esc_html__( 'All Services items','Zubayer_agency'),
        'view_item'             => esc_html__( 'View Service','Zubayer_agency' ),
        'add_items'             => esc_html__( 'Add Services Items','Zubayer_agency' ),
        'add_new_item'          => esc_html__( 'Add Service item','Zubayer_agency' ),
        'add_new'               => esc_html__( 'Add Service New','Zubayer_agency' ),
        'edit_item'             => esc_html__( 'Edit Service item','Zubayer_agency' ),
        'update_item'           => esc_html__( 'Update Services item','Zubayer_agency' ),
        'search_items'          => esc_html__( 'search_items Services item','Zubayer_agency' ),
        'not_found'             => esc_html__( 'Not Found Any Services', 'Zubayer_agency' ),
        'set_featured_image'    => esc_html__( 'Set Services Featured Image','Zubayer_agency' ),
        'remove_featured_image' => esc_html__( 'Remove Services Featured Image','Zubayer_agency' ),
    ),          
        'public'=>true,
        'menu_position'     => 15,
        'menu_icon'         =>'dashicons-pressthis',
        'rewrite'           => array( 'slug' => 'our_servics' ),
        'supports'          =>array( 'title','editor','author', 'page-attributes' ),
        'show_ui'           => true,
        'can_export'        => true, 
) );
register_post_type( 'team_cat', array(
    'labels'      =>array(
        'name'                  => esc_html__( 'Our Teams', 'Zubayer_agency' ),
        'singular_name'         => esc_html__( 'Our Team', 'Zubayer_agency' ),
        'menu_name'             => esc_html__( 'Our Teams', 'Zubayer_agency' ),
        'parent_item_colon'     => esc_html__( 'Parent Teams', 'Zubayer_agency' ),
        'all_items'             => esc_html__( 'All Teams items','Zubayer_agency'),
        'view_item'             => esc_html__( 'View Teams','Zubayer_agency' ),
        'add_items'             => esc_html__( 'Add Teams Items','Zubayer_agency' ),
        'add_new_item'          => esc_html__( 'Add Team item','Zubayer_agency' ),
        'add_new'               => esc_html__( 'Add Teams New','Zubayer_agency' ),
        'edit_item'             => esc_html__( 'Edit Teams item','Zubayer_agency' ),
        'update_item'           => esc_html__( 'Update Teams item','Zubayer_agency' ),
        'search_items'          => esc_html__( 'search_items Teams item','Zubayer_agency' ),
        'not_found'             => esc_html__( 'Not Found Any Teams', 'Zubayer_agency' ),
        'set_featured_image'    => esc_html__( 'Set Teams Featured Image','Zubayer_agency' ),
        'remove_featured_image' => esc_html__( 'Remove Teams Featured Image','Zubayer_agency' ),
    ),          
        'public'=>true,
        'menu_position'     => 15,
        'menu_icon'         =>'dashicons-businessman',
        'rewrite'           => array( 'slug' => 'our_team' ),
        'supports'          =>array( 'title','author', 'page-attributes','thumbnail' ),
        'show_ui'           => true,
        'can_export'        => true, 
) );
register_post_type( 'testimonial_cat', array(
    'labels'      =>array(
        'name'                  => esc_html__( 'Our Client Say', 'Zubayer_agency' ),
        'singular_name'         => esc_html__( 'Our Client', 'Zubayer_agency' ),
        'menu_name'             => esc_html__( 'Our Clients', 'Zubayer_agency' ),
        'parent_item_colon'     => esc_html__( 'Parent Clients', 'Zubayer_agency' ),
        'all_items'             => esc_html__( 'All Clients items','Zubayer_agency'),
        'view_item'             => esc_html__( 'View Client','Zubayer_agency' ),
        'add_items'             => esc_html__( 'Add Clients Items','Zubayer_agency' ),
        'add_new_item'          => esc_html__( 'Add Client item','Zubayer_agency' ),
        'add_new'               => esc_html__( 'Add Client New','Zubayer_agency' ),
        'edit_item'             => esc_html__( 'Edit Clients item','Zubayer_agency' ),
        'update_item'           => esc_html__( 'Update Clients item','Zubayer_agency' ),
        'search_items'          => esc_html__( 'search_items Clients item','Zubayer_agency' ),
        'not_found'             => esc_html__( 'Not Found Any Clients', 'Zubayer_agency' ),
        'set_featured_image'    => esc_html__( 'Set Clients Featured Image','Zubayer_agency' ),
        'remove_featured_image' => esc_html__( 'Remove Clients Featured Image','Zubayer_agency' ),
    ),          
        'public'=>true,
        'menu_position'     => 15,
        'menu_icon'         =>'dashicons-twitch',
        'rewrite'           => array( 'slug' => 'our_Clients' ),
        'supports'          =>array( 'title','editor','author', 'page-attributes','thumbnail' ),
        'show_ui'           => true,
        'can_export'        => true, 
) );
register_post_type( 'gallery_cat', array(
    'labels'       =>array(
        'name'                   => esc_html__('Gallery','Zubayer_agency'),
        'singuler_name'          => esc_html__('Gallery Item','Zubayer_agency'),
        'menu_name'              => esc_html__('Gallery Items','Zubayer_agency'),
        'parent_item_colon'      => esc_html__('Parent Gallery Items','Zubayer_agency'),
        'all_items'              => esc_html__('All Gallery Items','Zubayer_agency'),
        'view_item'              => esc_html__('View Gallery Items','Zubayer_agency'),
        'add_items'              => esc_html__('Add Gallery Items','Zubayer_agency'),
        'add_new_item'           => esc_html__('Add Gallery Item','Zubayer_agency'),
        'add_new'                => esc_html__('Add Gallery New','Zubayer_agency'),
        'edit_ttem'              => esc_html__('Edit Gallery Item','Zubayer_agency'),
        'update_item'            => esc_html__('Update Gallery Item','Zubayer_agency'),
        'search_item'            => esc_html__('search Gallery Items','Zubayer_agency'),
        'not_found'              => esc_html__('Not Found Gallery Items','Zubayer_agency'),
        'set_featured_image'     => esc_html__('Add Gallery Image','Zubayer_agency'),
        'remove_featured_image'  => esc_html__('Remove Gallery Image','Zubayer_agency'),        
    ),
    'public'=>true,
    'menu_position'=>'15',
    'menu_icon'=>'dashicons-format-gallery',
    'rewrite'           => array( 'slug' => 'our_gallery' ),
    'supports'          =>array( 'title','author' ),
    'show_ui'           => true,
    'can_export'        => true, 
) );
register_post_type( 'portfolio_cat', array(
    'labels'      =>array(
        'name'                  => esc_html__( 'Our Porifolios', 'Zubayer_agency' ),
        'singular_name'         => esc_html__( 'Our Portfilio', 'Zubayer_agency' ),
        'menu_name'             => esc_html__( 'Our Portfilio', 'Zubayer_agency' ),
        'parent_item_colon'     => esc_html__( 'Parent Portfilio', 'Zubayer_agency' ),
        'all_items'             => esc_html__( 'All Portfilio items','Zubayer_agency'),
        'view_item'             => esc_html__( 'View Porifolios','Zubayer_agency' ),
        'add_items'             => esc_html__( 'Add Portfilio Items','Zubayer_agency' ),
        'add_new_item'          => esc_html__( 'Add Portfilio item','Zubayer_agency' ),
        'add_new'               => esc_html__( 'Add Portfilio New','Zubayer_agency' ),
        'edit_item'             => esc_html__( 'Edit Porifolios item','Zubayer_agency' ),
        'update_item'           => esc_html__( 'Update Porifolios item','Zubayer_agency' ),
        'search_items'          => esc_html__( 'search_items Porifolios item','Zubayer_agency' ),
        'not_found'             => esc_html__( 'Not Found Any Portfilio', 'Zubayer_agency' ),
        'set_featured_image'    => esc_html__( 'Set Portfilio Featured Image','Zubayer_agency' ),
        'remove_featured_image' => esc_html__( 'Remove Portfilio Featured Image','Zubayer_agency' ),
    ),          
        'public'=>true,
        'menu_position'     => 15,
        'menu_icon'         =>'dashicons-images-alt2',
        'rewrite'           => array( 'slug' => 'our-portfolio' ),
        'supports'          =>array( 'title','editor','author', 'page-attributes','thumbnail' ),
        'show_ui'           => true,
        'can_export'        => true, 
) );
// Now register the taxonomy for portfolio Category started
        $labels = array(
            'name' => _x( 'Categories', 'taxonomy general name' ,'Zubayer_agency'),
            'singular_name' => _x( 'Category', 'taxonomy singular name' ,'Zubayer_agency'),
            'search_items' =>  __( 'Search Categories','Zubayer_agency' ),
            'all_items' => __( 'All Categories','Zubayer_agency' ),
            'parent_item' => __( 'Parent Category' ,'Zubayer_agency'),
            'parent_item_colon' => __( 'Parent Category:' ,'Zubayer_agency'),
            'edit_item' => __( 'Edit Category' ,'Zubayer_agency'), 
            'update_item' => __( 'Update Category' ,'Zubayer_agency'),
            'add_new_item' => __( 'Add New Category' ,'Zubayer_agency'),
            'new_item_name' => __( 'New Category Name' ,'Zubayer_agency'),
            'menu_name' => __( 'Categories' ,'Zubayer_agency'),
        );    
        
        register_taxonomy('portfolio_tax', 'portfolio_cat', array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'portfolio-cat' ),
            // Now register the taxonomy for portfolio Category ended
        ));
        // Now register the non-hierarchical taxonomy like tag started
        $labels = array(
            'name' => _x( 'Topics' ,'Zubayer_agency'),
            'singular_name' => _x( 'Topic' ,'Zubayer_agency'),
            'search_items' =>  __( 'Search Topics' ,'Zubayer_agency'),
            'popular_items' => __( 'Popular Topics' ,'Zubayer_agency'),
            'all_items' => __( 'All Topics','Zubayer_agency' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Topic' ,'Zubayer_agency'), 
            'update_item' => __( 'Update Topic' ,'Zubayer_agency'),
            'add_new_item' => __( 'Add New Topic' ,'Zubayer_agency'),
            'new_item_name' => __( 'New Topic Name' ,'Zubayer_agency'),
            'separate_items_with_commas' => __( 'Separate topics with commas' ,'Zubayer_agency'),
            'add_or_remove_items' => __( 'Add or remove topics','Zubayer_agency'),
            'choose_from_most_used' => __( 'Choose from the most used topics','Zubayer_agency'),
            'menu_name' => __( 'Topics' ,'Zubayer_agency'),
          ); 
         
          
          register_taxonomy('portfolio_tag','portfolio_cat',array(
              'hierarchical' => false,
              'labels' => $labels,
              'show_ui' => true,
              'show_in_rest' => true,
              'show_admin_column' => true,
              'update_count_callback' => '_update_post_term_count',
              'query_var' => true,
              'rewrite' => array( 'slug' => 'topic' ),
            ));
            // Now register the non-hierarchical taxonomy like tag ended
 

}
add_action( 'init', 'home_slider_add' );
// add cmb2
require_once 'inc/cmb/init.php';
require_once 'inc/cmb/config.php';
// add tmp 
 require_once 'inc/tmp/config.php';
// add codester framework
require_once 'inc/codester/codestar-framework.php';
require_once 'inc/codester/samples/config.php';
// add demo content
require_once 'inc/demo-content/zubagency_demo_data_import.php';

// menu css & js
 function add_css_and_js_file(){
     wp_enqueue_style( 'zub_agency_css_Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700' );
    wp_enqueue_style( 'zub_agency_css_googleapis', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style( 'zub_agency_css_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'zub_agency_css_awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fas', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'zub_agency_css_magnific', get_template_directory_uri().'/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'zub_agency_css_carousel', get_template_directory_uri().'/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'zub_agency_css_style', get_template_directory_uri().'/assets/css/style.css' );
    wp_enqueue_style( 'zub_agency_css_responsive', get_template_directory_uri().'/assets/css/responsive.css' );
    wp_enqueue_style( 'zub_agency_css_mainstyle' , get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'zub_agency_js_popper', get_template_directory_uri().'/assets/js/popper.min.js ',array('jquery'),'', true );
    wp_enqueue_script( 'zub_agency_js_bootstrip', get_template_directory_uri(  ).'/assets/js/bootstrap.min.js' ,array('jquery') , '', true );    
    wp_enqueue_script( 'zub_agency_js_magnific', get_template_directory_uri(  ).'/assets/js/jquery.magnific-popup.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_onepagenav', get_template_directory_uri(  ).'/assets/js/onepagenav.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_isotope', get_template_directory_uri(  ).'/assets/js/isotope.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_imageloaded', get_template_directory_uri(  ).'/assets/js/imageloaded.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_counterup', get_template_directory_uri(  ).'/assets/js/jquery.counterup.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_waypoint', get_template_directory_uri(  ).'/assets/js/waypoint.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_carousel', get_template_directory_uri(  ).'/assets/js/owl.carousel.min.js' ,array('jquery') , '', true );
    wp_enqueue_script( 'zub_agency_js_main', get_template_directory_uri(  ).'/assets/js/main.js' ,array('jquery') , '', true );
    
 }
add_action( 'wp_enqueue_scripts','add_css_and_js_file' );   
?>
