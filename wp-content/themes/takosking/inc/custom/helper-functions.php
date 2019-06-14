<?php
/**
 * Helper functions
 *
 * @package takosking
 * @since 1.0.0
 *
 */

/**
 * Custom menu
 */

if ( ! function_exists( 'takosking_custom_menu' ) ) {
	function takosking_custom_menu()
	{
		if ( has_nav_menu( 'top-menu' ) ) {
			wp_nav_menu(
				array(
					'items_wrap'     => '<ul class="navbar-nav expand">%3$s</ul>',
					'theme_location' => 'top-menu',
					'depth'          => 3,
				    'echo'			 => true,
				)
			);
		} else {
			echo '<div class="no-menu">' . esc_html__( 'Please register Top Navigation from', 'takosking' ) . ' <a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" target="_blank">' . esc_html__( 'Appearance &gt; Menus', 'takosking' ) . '</a></div>';
		}
	}
}
/*
 * Return theme logo
 */
if ( ! function_exists( 'takosking_logo' ) ) {
    function takosking_logo() {

        $logo_type = cs_get_option('logo_type');

        if ( $logo_type && $logo_type ) {

            // for text logo
            if ( $logo_type == 'text' ) {
                echo wp_kses_post( cs_get_option('text_logo') );
            }

            $site_logo   = cs_get_option('site_logo');
            $retina_logo = cs_get_option('retina_logo');

            // for image logo
            if ( $logo_type == 'image') {
                $retina = ( ! empty( $retina_logo ) ) ? 'data-retina="'. esc_url( $retina_logo ) .'"' : '';
                if ( ! empty( $site_logo ) ) {
                    echo '<img '. $retina .' src="'. esc_url( $site_logo ) . '" alt="" />';
                } else {
                    echo esc_html( cs_get_option('text_logo') );
                }
            }

        } else {
            esc_html_e( get_bloginfo('name'), 'takosking' );
        }
    }
}




// let's add "*active*" as a class to the li

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'top-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

//function wpb_first_and_last_menu_class($items) {
//    $items[1]->classes[] = 'active';
//    return $items;
//}
//add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class');
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/*
 * Body class.
 */
if ( ! function_exists( 'takosking_body_class' ) ) {
    function takosking_body_class( $classes ) {


        $classes[] = '';
            $classes[] .= ' ';


        return $classes;
    }
}
add_filter('body_class','takosking_body_class');

/**
Register Fonts.
 */
function takosking_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */

    if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'takosking' ) ) {
        $fonts = array(
           'Open+Sans:400,700'
        );

        $font_url = add_query_arg( 'family',
            ( implode( '|', $fonts ) . "&subset=latin,latin-ext" ), "//fonts.googleapis.com/css" );
    }

    return $font_url;
}

/*
Enqueue scripts and styles.
*/
function takosking_fonts() {
    wp_enqueue_style( 'takosking-fonts', takosking_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'takosking_fonts' );



