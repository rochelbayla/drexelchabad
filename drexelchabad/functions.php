<?php 
register_nav_menus( array(
	'nav-menu' => 'Nav Menu',
	'sidabar-donate' => 'Donate Sidebar',
) );




function create_post_types() {
  register_post_type( 'board_members',
    array(
      'labels' => array(
        'name' => __( 'Board Members' ),
        'singular_name' => __( 'Board Member' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
    
    register_post_type( 'alumni_association',
    array(
      'labels' => array(
        'name' => __( 'Alumni Association' ),
        'singular_name' => __( 'Alunmi Association Member' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
    
    
    
      register_post_type( 'sponsorships',
    array(
      'labels' => array(
        'name' => __( 'Sponsorships' ),
        'singular_name' => __( 'Sponsorship' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
    
    register_post_type( 'newsfeed',
    array(
      'labels' => array(
        'name' => __( 'News Feed' ),
        'singular_name' => __( 'News Feed' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
    
    register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
   
    
}
add_action( 'init', 'create_post_types' );




