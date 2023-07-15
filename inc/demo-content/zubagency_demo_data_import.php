<?php
function zubagency_import_files() {
    return [
        [
            'import_file_name'          =>'Zubagency',
            'categories'                =>['Agency'],
            'Local_import_file'         => trailingslashit( get_template_directory() ) .'inc/demo-content/zubagency.xml',
            'local_import_widget_file'  => trailingslashit( get_template_directory() ).'inc/demo-content/widgets.wie',
        ],

            // একাধিক demo বেবহার করার জন্য 
              // [
              //   'import_file_name'             => 'Demo Import 1',
              //   'categories'                   => [ 'Category 1', 'Category 2' ],
              //   'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content.xml',
              //   'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.json',
              //   'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
              //   'local_import_redux'           => [
              //     [
              //       'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
              //       'option_name' => 'redux_option_name',
              //     ],
              //   ],
              //   'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
              //   'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
              // ],

            // একাধিক demo বেবহার করার জন্য 
              // [
              //   'import_file_name'             => 'Demo Import 2',
              //   'categories'                   => [ 'New category', 'Old category' ],
              //   'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content2.xml',
              //   'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets2.json',
              //   'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer2.dat',
              //   'local_import_redux'           => [
              //     [
              //       'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
              //       'option_name' => 'redux_option_name',
              //     ],
              //     [
              //       'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux2.json',
              //       'option_name' => 'redux_option_name_2',
              //     ],
              //   ],
              //   'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image2.jpg',
              //   'preview_url'                  => 'http://www.your_domain.com/my-demo-2',
              // ],
              
            ];        
  }
  add_filter( 'ocdi/import_files', 'zubagency_import_files' );
 
          function zubagency_after_import_setup() {
            // Assign menus to their locations.
            $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
            set_theme_mod( 'nav_menu_locations', [
                    'main-header' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
                ]
            );
        
            // Assign front page and posts page (blog page).
            $front_page_id = get_page_by_title( 'Home' );
            $blog_page_id  = get_page_by_title( 'Blog' );
        
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $front_page_id->ID );
            update_option( 'page_for_posts', $blog_page_id->ID );
        
        }
        add_action( 'ocdi/after_import', 'zubagency_after_import_setup' );
 ?>