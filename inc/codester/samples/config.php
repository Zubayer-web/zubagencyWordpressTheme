<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'zubayer';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => esc_html__('Zubayer','Zubayer_agency'),
  'menu_slug'  => 'Zubayer',
  'framework_title'=> 'Zubayer Options__<small>Zubayer hasan</small>',
) );

//
// Create a section
//

//custom design start
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Header','Zubayer_agency'),
  'id'      =>'header',
  'icon'    =>'fa fa-header',
) );
//Header Top Started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('Header Top','Zubayer_agency'),
    'description'     =>esc_html__('Change Your Header Top','Zubayer_agency'),
    'parent'          =>'header',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(
      array(
        'title'         =>esc_html__('Header top Background','Zubayer_agency'),
        'id'            =>'header_top_background',
        'type'          =>'background',
        'default'      =>'#635CDB',
        'output'      =>'.header-top',
      ),
        array(
          'title'         =>esc_html__('Header top email icon','Zubayer_agency'),
          'id'            =>'header_top_email_icon',
          'type'          =>'icon',
          'default'      =>'fa fa-envelope',
        ),
        array(
          'title'         =>esc_html__('Header top email id','Zubayer_agency'),
          'id'            =>'header_top_email_id',
          'type'          =>'text',
          'default'      =>'info@zubayer.com',
        ),
        array(
          'title'         =>esc_html__('Header top phone icon','Zubayer_agency'),
          'id'            =>'header_top_phone_icon',
          'type'          =>'icon',
          'default'      =>'fa fa-phone',
        ),
        array(
          'title'         =>esc_html__('Header top phone number','Zubayer_agency'),
          'id'            =>'header_top_phone_number',
          'type'          =>'text',
          'default'      =>'270-776-6982',
        ),
        array(
          'id'            =>'social_media',
          'type'          =>'group',
          'title'         =>esc_html__('Social Media','Zubayer_agency'),
          'fields'        =>array(
              array(
                'title'   =>esc_html__('Social Media Link','Zubayer_agency'),
                'id'      =>'social_media_link',
                'type'    =>'text',
              ),    
              array(
                'title'   =>esc_html__('Social Media Icon','Zubayer_agency'),
                'id'      =>'social_media_icon',
                'type'    =>'icon',
              ),    
          ),
        ),       
    ),
  ) );
//Header main started
CSF::createSection( $prefix, array(
  'title'           =>esc_html__('Main Header','Zubayer_agency'),
    'description'     =>esc_html__('Change Your Main Header','Zubayer_agency'),
    'parent'          =>'header',   
    'icon'            =>'fa-solid fa-temperature-arrow-down',
    'fields'          =>array(
      array(
        'title'         =>esc_html__('Header Main Background','Zubayer_agency'),
        'id'            =>'header_main_background',
        'type'          =>'background',
        'default'       =>'#FFFFFF',
        'output'        =>'.header.header-fixed',
      ),
      array(
        'title'         =>esc_html__('Header Main Background Sticky','Zubayer_agency'),
        'id'            =>'header_main_background_sticky',
        'type'          =>'background',
        'default'       =>'#FFFFFF',
        'output'        =>'.header.header-fixed.sticky',
      ),
      array(
        'title'         =>esc_html__('Header Text','Zubayer_agency'),
        'id'            =>'header_text',
        'type'          =>'text', 
        'default'       =>'logo',
        'placeholder'   => 'If you not using logo image then use it.',
      ),      
      array(
        'title'         =>esc_html__('Header Logo','Zubayer_agency'),
        'id'            =>'header_logo',
        'type'          =>'media', 
        'default'       => get_template_directory().'/images/logo.png',
      ),
      array(
        'title'         =>esc_html__('Favicon','Zubayer_agency'),
        'id'            =>'favicon',
        'type'          =>'media', 
      ),
      array(
        'title'         =>esc_html__('Header Menu Typograpy','Zubayer_agency'),
        'id'            =>'header_menu_typograpy',
        'type'          =>'typography',        
        'output'        =>'.header-container ul li a',        
      ),
    ),
  ) ); 
//about section started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('About','Zubayer_agency'),
  'id'      =>'about',
  'icon'    =>'fas fa-address-card',
) );
//about top started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('About Top','Zubayer_agency'),
    'description'     =>esc_html__('Change Your About Top','Zubayer_agency'),
    'parent'          =>'about',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(
      array(
        'type'    => 'subheading',
        'style'   => 'success',
        'content' => 'About Top Area',   
      ),
      array(
        'title'         =>esc_html__('About Top Small Text','Zubayer_agency'),
        'id'            =>'about_small_text',
        'type'          =>'text',
        'default'      =>'who we are?',
      ),
       array(
        'title'         =>esc_html__('About Top Big Text','Zubayer_agency'),
        'id'            =>'about_big_text',
        'type'          =>'text',
        'default'      =>'about us',
      ), 
      array(
        'title'         =>esc_html__('About Top Description','Zubayer_agency'),
        'id'            =>'about_big_description',
        'type'          =>'wp_editor',
        'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d ',
      ),          
    ),
  ) );
//about bottom started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('About Bottom','Zubayer_agency'),
    'description'     =>esc_html__('Change Your About Bottom','Zubayer_agency'),
    'parent'          =>'about',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(   
      array(
        'type'    => 'submessage',
        'style'   => 'success',
        'content' => 'About Bottom Left Side',   
      ),
      array(
        'title'         =>esc_html__('About Top Big Text','Zubayer_agency'),
        'id'            =>'about_left_text',
        'type'          =>'text',
        'default'      =>'welcome to agency',
      ), 
      array(
        'title'         =>esc_html__('About Top Description','Zubayer_agency'),
        'id'            =>'about_left_description',
        'type'          =>'wp_editor',
        'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry',
      ),
      array(
        'type'    => 'submessage',
        'style'   => 'success',
        'content' => 'About Bottom Right Side',   
      ),
      array(
        'id'            =>'about_right_side',
        'type'          =>'group',
        'title'         =>esc_html__('About Right Side','Zubayer_agency'),
        'fields'        =>array(
          array(
            'title'   =>esc_html__('About Icon','Zubayer_agency'),
            'id'      =>'about_right_side_icon',
            'type'    =>'icon',
          ), 
            array(
              'title'   =>esc_html__('About Title','Zubayer_agency'),
              'id'      =>'about_right_side_text',
              'type'    =>'text',
            ),    
            array(
              'title'   =>esc_html__('About Description','Zubayer_agency'),
              'id'      =>'about_right_side_decs',
              'type'    =>'wp_editor',
            ),  
        ),
      ),
    ),
  ) );

//Feq design start
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Frequently Expected Question','Zubayer_agency'),
  'id'      =>'feq',
  'icon'    =>'fad fa-question-circle',  
) );
//Feq design left side
CSF::createSection( $prefix, array(
  'title'           =>esc_html__('FAQ','Zubayer_agency'),
  'description'     =>esc_html__('Change Your FAQ','Zubayer_agency'),
  'parent'          =>'feq',   
  'icon'            =>'fa-solid fa-temperature-arrow-up',
  'fields'         =>array( 
    array(
      'title'         =>esc_html__('Frequently Expected Question Title','Zubayer_agency'),
      'id'            =>'feq_title',
      'type'          =>'text',
      'default'      =>'Feq',
    ), 
    array(
      'id'            =>'accordion_right_side',
      'type'          =>'group',
      'title'         =>esc_html__('Accordion Right Side','Zubayer_agency'),
      'fields'        =>array(      
          array(
            'title'   =>esc_html__('Accordion Title','Zubayer_agency'),
            'id'      =>'accordion_right_side_text',
            'type'    =>'text',
            'default' =>'Lorem Ipsum is simply',
          ),    
          array(
            'title'   =>esc_html__('Accordion Description','Zubayer_agency'),
            'id'      =>'accordion_right_side_decs',
            'type'    =>'wp_editor',
            'default' =>'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. ',
          ),  
      ),
    ),
   ),
) );
//Feq design Right side
CSF::createSection( $prefix, array(
  'title'           =>esc_html__('Skill','Zubayer_agency'),
  'description'     =>esc_html__('Change Your Skill','Zubayer_agency'),
  'parent'          =>'feq',   
  'icon'            =>'fa-solid fa-temperature-arrow-up',
  'fields'          =>array( 
    array(
      'title'         =>esc_html__('Skills Title','Zubayer_agency'),
      'id'            =>'skills_title',
      'type'          =>'text',
      'default'       =>'Our Skills',
    ), 
    array(
      'id'            =>'skills_right_side',
      'type'          =>'group',
      'title'         =>esc_html__('Skills Right Side','Zubayer_agency'),
      'fields'        =>array(      
          array(
            'title'   =>esc_html__('Skills Title','Zubayer_agency'),
            'id'      =>'skill_right_side_text',
            'type'    =>'text',
            'default' =>'Wordpress',
          ),    
          array(
            'title'   =>esc_html__('Skills Progress Bar','Zubayer_agency'),
            'id'      =>'skill_right_side_decs',
            'type'    =>'number',
            'default' =>'75',
          ),  
      ),
    ),
   ),
) );
//Service section started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Service','Zubayer_agency'),
  'id'      =>'service',
  'icon'    =>'fab fa-servicestack',
) );
//Service top started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('Service Top','Zubayer_agency'),
    'description'     =>esc_html__('Change Your Service Top','Zubayer_agency'),
    'parent'          =>'service',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(     
      array(
        'title'         =>esc_html__('Service Small Text','Zubayer_agency'),
        'id'            =>'service_small_text',
        'type'          =>'text',
        'default'      =>'who we are?',
      ),
       array(
        'title'         =>esc_html__('Service Big Text','Zubayer_agency'),
        'id'            =>'service_big_text',
        'type'          =>'text',
        'default'      =>'Service us',
      ), 
      array(
        'title'         =>esc_html__('Service Description','Zubayer_agency'),
        'id'            =>'service_big_description',
        'type'          =>'wp_editor',
        'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d ',
      ),          
    ),
  ) );
//conuter started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Counter Number','Zubayer_agency'),
  'id'      =>'counter',
  'icon'    =>'fad fa-question-circle',
  'fields'          =>array(   
    array(
      'id'            =>'counter_right_side',
      'type'          =>'group',
      'title'         =>esc_html__('Counter Items','Zubayer_agency'),
      'fields'        =>array(   
          array(
            'title'   =>esc_html__('Counter Number Icon','Zubayer_agency'),
            'id'      =>'counter_right_side_icon',
            'type'    =>'icon',
            'default' =>'fa fa-user',
          ),             
          array(
            'title'   =>esc_html__('Counter Number','Zubayer_agency'),
            'id'      =>'counter_right_side_decs',
            'type'    =>'number',
            'default' =>'567',
          ),  
          array(
            'title'   =>esc_html__('Counter Number Text','Zubayer_agency'),
            'id'      =>'counter_right_side_text',
            'type'    =>'text',
            'default' =>'customers',
          ), 
      ),
    ),
   ),
) );
//team section started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Team','Zubayer_agency'),
  'id'      =>'team',
  'icon'    =>'fas fa-users',
) );
//team top started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('Team Top','Zubayer_agency'),
    'description'     =>esc_html__('Change Your Team Top','Zubayer_agency'),
    'parent'          =>'team',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(     
      array(
        'title'         =>esc_html__('Team Small Text','Zubayer_agency'),
        'id'            =>'team_small_text',
        'type'          =>'text',
        'default'      =>'who we are?',
      ),
       array(
        'title'         =>esc_html__('Team Big Text','Zubayer_agency'),
        'id'            =>'team_big_text',
        'type'          =>'text',
        'default'      =>'creative team',
      ), 
      array(
        'title'         =>esc_html__('Team Description','Zubayer_agency'),
        'id'            =>'team_big_description',
        'type'          =>'wp_editor',
        'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d ',
      ),          
    ),
  ) );
//client  section started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Client','Zubayer_agency'),
  'id'      =>'client',
  'icon'    =>'fab fa-teamspeak',
) );
//client top started
  CSF::createSection( $prefix, array(
    'title'           =>esc_html__('Client Top','Zubayer_agency'),
    'description'     =>esc_html__('Change Your Client Top','Zubayer_agency'),
    'parent'          =>'client',   
    'icon'            =>'fa-solid fa-temperature-arrow-up',
    'fields'         =>array(     
      array(
        'title'         =>esc_html__('Client Small Text','Zubayer_agency'),
        'id'            =>'client_small_text',
        'type'          =>'text',
        'default'      =>'who we are?',
      ),
       array(
        'title'         =>esc_html__('Client Big Text','Zubayer_agency'),
        'id'            =>'client_big_text',
        'type'          =>'text',
        'default'      =>'what client say',
      ), 
      array(
        'title'         =>esc_html__('Client Description','Zubayer_agency'),
        'id'            =>'client_big_description',
        'type'          =>'wp_editor',
        'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d ',
      ),          
    ),
  ) );
  CSF::createSection( $prefix, array(
    'title'   =>esc_html__('News','Zubayer_agency'),
    'id'      =>'news',
    'icon'    =>'fas fa-newspaper',
  ) );
  //news top started
  CSF::createSection( $prefix, array(
      'title'           =>esc_html__('News Top','Zubayer_agency'),
      'description'     =>esc_html__('Change Your News Top','Zubayer_agency'),
      'parent'          =>'news',   
      'icon'            =>'fa-solid fa-temperature-arrow-up',
      'fields'         =>array(     
        array(
          'title'         =>esc_html__('News Small Text','Zubayer_agency'),
          'id'            =>'news_small_text',
          'type'          =>'text',
          'default'      =>'who we are?',
        ),
         array(
          'title'         =>esc_html__('News Big Text','Zubayer_agency'),
          'id'            =>'news_big_text',
          'type'          =>'text',
          'default'      =>'latest news',
        ), 
        array(
          'title'         =>esc_html__('News Description','Zubayer_agency'),
          'id'            =>'news_big_description',
          'type'          =>'wp_editor',
          'default'      =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d ',
        ),          
      ),
  ) );
// CTA started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('CTA','Zubayer_agency'),
  'id'      =>'cta',
  'icon'    =>'fas fa-rectangle-landscape',
  'fields'  =>array(
    array(
      'title'         =>esc_html__('CTA Title','Zubayer_agency'),
      'id'            =>'cta_text',
      'type'          =>'text',
      'default'      =>'best solution for your business',
    ), 
    array(
      'title'         =>esc_html__('CTA Description','Zubayer_agency'),
      'id'            =>'cta_decs',
      'type'          =>'wp_editor',
      'default'      =>'the can be used on larger scale projectss as well as small scale projectss',
    ), 
    array(
      'title'         =>esc_html__('Contact Button','Zubayer_agency'),
      'id'            =>'cta_button',
      'type'          =>'link',      
    ),     
  ), 
) );
// Contact started
CSF::createSection( $prefix, array(
  'title'   =>esc_html__('Contact','Zubayer_agency'),
  'id'      =>'contact',
  'icon'    =>'fas fa-address-book',
  'fields'  =>array(
    array(
      'id'            =>'contact_right_side',
      'type'          =>'group',
      'title'         =>esc_html__('Contact Area','Zubayer_agency'),
      'fields'        =>array(
        array(
          'title'   =>esc_html__('Contact Icon','Zubayer_agency'),
          'id'      =>'contact_right_side_icon',
          'type'    =>'icon',
        ), 
          array(
            'title'   =>esc_html__('Contact Title','Zubayer_agency'),
            'id'      =>'contact_right_side_text',
            'type'    =>'text',
          ),    
          array(
            'title'   =>esc_html__('Contact Description','Zubayer_agency'),
            'id'      =>'contact_right_side_decs',
            'type'    =>'text',
          ),  
      ),
    ),
    array(
      'title'         =>esc_html__('Contact Map','Zubayer_agency'),
      'id'            =>'Contect_map',
      'type'          =>'map',      
    ),
  ), 
) );
  
//custom design ended