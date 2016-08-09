<?php
/*
 * Barcelona. Child Theme Function File
 * You can modify any function here. Simply copy any function from parent and paste here. It will override the parent's version.
 */

add_action( 'after_setup_theme', 'barcelona_child_theme_scripts', 99 );

function barcelona_child_theme_scripts() {

	add_action( 'wp_enqueue_scripts', 'barcelona_enqueue_scripts_child', 99 );

	// Дополнительные сайдбары для бокового меню
        register_sidebar( array(
                'name'          => esc_html__( 'School sidebar', 'barcelona' ),
                'id'            => 'fotorama-school-sidebar',
                'description'   => esc_html__( 'Для отображения на странице "школа"', 'barcelona' ),
                'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="widget-title"><h2 class="title">',
                'after_title'   => '</h2></div>'
        ) );

        register_sidebar( array(
                'name'          => esc_html__( 'Rent sidebar', 'barcelona' ),
                'id'            => 'fotorama-rent-sidebar',
                'description'   => esc_html__( 'Для отображения на странице "аренда"', 'barcelona' ),
                'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="widget-title"><h2 class="title">',
                'after_title'   => '</h2></div>'
        ) );
}

/*
 * Enqueue Child Scripts & Styles
 */
function barcelona_enqueue_scripts_child() {

	if ( ! is_admin() ) {

		wp_register_style( 'barcelona-main-child', trailingslashit( get_stylesheet_directory_uri() ).'style.css', array(), BARCELONA_THEME_VERSION, 'all' );
		wp_enqueue_style( 'barcelona-main-child' );

	}
remove_filter( 'post_gallery', 'barcelona_gallery_shortcode' ); // for fotorama.js correct work

}


