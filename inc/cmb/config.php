<?php
function custom_field_setup(){
    $slider_post = new_cmb2_box( array(
        'id'                => 'slider_box_id',
        'title'             => esc_html__( 'Slider', 'Zubayer_agency' ),
        'object_types'      => array('slider_cus'),
    ) );
    $slider_post->add_field( array(
        'id'                => 'slider_images',
        'name'              => esc_html__('Slider Images','Zubayer_agency'),
        'desc'              => esc_html__('Upload Your Slider images image or enter an URL.','Zubayer_agency'),
        'type'              => 'file',
        'options'      => array(
            'url'      => true,
        ),
        'text'              => array( 'add_upload_file_text' => 'Add Slider Image' ),
        'preview_size'      => 'large',
    ) );
    $slider_post->add_field( array(
        'id'                =>'first_title',
        'name'              => esc_html__( 'Frist Title', 'Zubayer_agency' ),
        'desc'              => esc_html__( 'You can edit your frist title', 'Zubayer_agency' ),
        'type'              => 'text',       
    ) );
    $slider_post->add_field( array(
        'id'                => 'btn_Content',
        'name'              => esc_html__( 'Button Content', 'Zubayer_agency' ),
        'desc'              => esc_html__( 'You can edit your cutton content', 'Zubayer_agency' ),
        'type'              => 'text_medium',
        'default'           => 'Contect us',
    ) );
    $slider_post->add_field( array(
        'id'                =>'btn_link',
        'name'              => esc_html__( 'Button Link', 'Zubayer_agency' ),
        'desc'              => esc_html__( 'You can edit your button link', 'Zubayer_agency' ),
        'type'              => 'text_url',
        'default'           => '#',
    ) );


    $service_post = new_cmb2_box( array(
        'id'                => 'services_box_id',
        'title'             => esc_html__( 'Services Icon', 'Zubayer_agency' ),
        'object_types'      => array('service_cus'),
    ) );
    $service_post->add_field( array(
        'id'                => 'services_icon',
        'name'              => esc_html__( 'Services Icon', 'Zubayer_agency' ),
        'desc'              => esc_html__( 'Your Icon And Html code', 'Zubayer_agency' ),
        'type'              => 'textarea_code',
        'default'           => '<i class="fa fa-laptop"></i>',        
    ) );


    $team_post = new_cmb2_box( array(
        'id'                  => 'team_mumber',
        'title'               => esc_html__( 'Services Iconz', 'Zubayer_agency' ),
        'object_types'        => 'team_cat',
        ) );
    $team_post->add_field(array(
        'id'                  =>'servise_working_title',
        'name'                => esc_html__( 'Team Mumber Working On', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your working position', 'Zubayer_agency' ),
        'type'                =>'text',
        'default'             =>'web developer'
    ) );
    $team_post->add_field( array(
        'id'                  =>'facebook_link',
        'name'                => esc_html__( 'Team Mumber Facebook A\C Link', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your team mumber facebook account link', 'Zubayer_agency' ),
        'type'                =>'text_url',
    ) );
    $team_post->add_field( array(
        'id'                  =>'twitter_link',
        'name'                => esc_html__( 'Team Mumber twitter A\C Link', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your team mumber twitter account link', 'Zubayer_agency' ),
        'type'                =>'text_url',
    ) );
    $team_post->add_field( array(
        'id'                  =>'linkedin_link',
        'name'                => esc_html__( 'Team Mumber linkedin A\C Link', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your team mumber linkedin account link', 'Zubayer_agency' ),
        'type'                =>'text_url',
    ) );
    $team_post->add_field( array(
        'id'                  =>'google_plus_link',
        'name'                => esc_html__( 'Team Mumber google-plus A\C Link', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your team mumber google-plus account link', 'Zubayer_agency' ),
        'type'                =>'text_url',
    ) );


    $client_say_post = new_cmb2_box( array(
        'id'                  =>'client_say',
        'title'               => esc_html__( 'Client Say', 'Zubayer_agency' ),
        'object_types'        => 'testimonial_cat',
    ) );
    $client_say_post->add_field( array(
        'id'                  =>'client_subtitle_working',
        'name'                => esc_html__( 'Client Subtitie / working position', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your Client Subtitie / working position', 'Zubayer_agency' ),
        'type'                => 'text',
    ) );
    $gallery_post = new_cmb2_box( array(
        'id'             => 'gallery_items',
        'title'          => esc_html__( 'Gallery Items','Zubayer_agency' ),
        'object_types'   => 'gallery_cat',
    ) );
    $gallery_post->add_field( array(
        'id'            =>'gallery_images',
        'name'          => esc_html__( 'Gallery Images', 'Zubayer_agency' ),
        'desc'          => esc_html__( 'Add Your Gallery Images', 'Zubayer_agency' ),
        'type'          =>'file',
    ) );
    $gallery_post->add_field( array(
        'id'                  =>'gallery_lightbox_image',
        'name'                => esc_html__( 'Gallery Lightbox Image', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Add Your Gallery Lightbox Image', 'Zubayer_agency' ),
        'type'                =>'file',
    ) );  
    $portfolio_post = new_cmb2_box( array(
        'id'             => 'portfolio_items',
        'title'          => esc_html__( 'Portiolio Items','Zubayer_agency' ),
        'object_types'   => 'portfolio_cat',
    ) );
    $portfolio_post->add_field( array(
        'id'                  =>'portfolio_subtittle',
        'name'                => esc_html__( 'Portfolio Subtitie', 'Zubayer_agency' ),
        'desc'                => esc_html__( 'Write your Portfolio Subtitie', 'Zubayer_agency' ),
        'type'                => 'text',
    ) );
    $portfolio_post->add_field( array(
        'id'            => 'portfolio_gallery',
        'name'          => esc_html__( 'Portfolio Gallery', 'Zubayer_agency' ),
        'desc'          => esc_html__( 'Write your Portfolio Gallery', 'Zubayer_agency' ),        
        'type'          => 'file_list',        
        'text'          => array(
            'add_upload_files_text' => 'Add or Upload Files', 
            'remove_image_text' => 'Remove Image', 
        ),
    ) );
    $portfolio_post->add_field( array(
        'id'            => 'portfolio_video',
        'name'          => esc_html__( 'Portfolio Video', 'Zubayer_agency' ),
        'desc'          => esc_html__('Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.','Zubayer_agency'),        
        'type'          => 'oembed',
    ) );
    $portfolio_post->add_field( array(
        'name'    => esc_html__('Technology Used','Zubayer_agency'),
        'desc'    => esc_html__('field description (optional)','Zubayer_agency'),
        'id'      => 'technology_used',
        'type'    => 'wysiwyg',
        'options' => array(),
    ) );
    $portfolio_post->add_field( array(
        'name'    => esc_html__('project features','Zubayer_agency'),
        'desc'    => esc_html__('field description (optional)','Zubayer_agency'),
        'id'      => 'project_features',
        'type'    => 'wysiwyg',
        'options' => array(),
    ) );
}
add_action( 'cmb2_admin_init','custom_field_setup' );
?>