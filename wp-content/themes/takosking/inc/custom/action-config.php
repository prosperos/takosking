<?php
/**
 * Action Config - Theme setting
 *
 * @package takosking
 * @since 1.0.0
 *
 */

// ------------------------------------------
// Global actions for theme
// ------------------------------------------
add_action( 'widgets_init',       'takosking_register_sidebar' );
add_action( 'wp_enqueue_scripts', 'takosking_enqueue_scripts' );
//add_action( 'wp_enqueue_scripts', 'takosking_custom_styles' );
add_action( 'tgmpa_register',     'takosking_include_required_plugins' );



/** Loads all the js and css script to frontend */
if ( ! function_exists( 'takosking_enqueue_scripts' ) ) {
    function takosking_enqueue_scripts()
    {
        // general settings

        wp_enqueue_script( 'takosking-popper',	        TAKOSKING_URI .'/assets/js/popper.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-bootstrap',	        TAKOSKING_URI .'/assets/js/bootstrap.min.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-matchHeight',	        TAKOSKING_URI .'/assets/js/jquery.matchHeight.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-swiper',	        TAKOSKING_URI .'/assets/js/swiper.min.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-wow',	        TAKOSKING_URI .'/assets/js/wow.min.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-fullpage',	        TAKOSKING_URI .'/assets/js/fullpage.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-waterwheel',	        TAKOSKING_URI .'/assets/js/waterwheel.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-owl',	        TAKOSKING_URI .'/assets/js/owl.carousel.min.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-webfont',	        TAKOSKING_URI .'/assets/js/webfont.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-lazyload',	        TAKOSKING_URI .'/assets/js/lazyload.min.js', array( 'jquery' ), false );

        wp_enqueue_script( 'takosking-wizard',	        TAKOSKING_URI .'/assets/js/main_franchisee.js', array( 'jquery' ), false );
        wp_enqueue_script( 'takosking-main',	        TAKOSKING_URI .'/assets/js/main.js', array( 'jquery' ), false );

        // add TinyMCE style
        add_editor_style();

        // including jQuery plugins
        wp_localize_script('takosking-main', 'ajax_data',
            array(
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'takosking-siteurl' => get_template_directory_uri()
            )
        );

        if ( is_singular() ) {
            wp_enqueue_script( 'comment-reply' );
        }

        // register style

        wp_enqueue_style( 'bootstrap', 	              TAKOSKING_URI .'/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'takosking-normalize',     TAKOSKING_URI .'/assets/css/normalize.css' );
        wp_enqueue_style( 'takosking-core', 	      TAKOSKING_URI .'/style.css' );
        wp_enqueue_style( 'takosking-theme', 	      TAKOSKING_URI .'/assets/scss/theme.css' );
        wp_enqueue_style( 'takosking-font-awesome',     TAKOSKING_URI .'/assets/css/font-awesome.min.css' );
        wp_enqueue_style( 'takosking-font-kgbrokenvesselssketch',     TAKOSKING_URI .'/assets/css/kgbrokenvesselssketch.css' );
        wp_enqueue_style( 'takosking-swiper',     TAKOSKING_URI .'/assets/css/swiper.min.css' );
        //wp_enqueue_style( 'takosking-pagepiling',     TAKOSKING_URI .'/assets/css/jquery.pagepiling.css' );
        //wp_enqueue_style( 'takosking-scroll',     TAKOSKING_URI .'/assets/css/onepage-scroll.css' );
        wp_enqueue_style( 'takosking-owl',     TAKOSKING_URI .'/assets/css/takos.default.min.css' );
        wp_enqueue_style( 'takosking-fullpage',     TAKOSKING_URI .'/assets/css/fullpage.css' );
        wp_enqueue_style( 'takosking-animate',     TAKOSKING_URI .'/assets/css/animate.css' );
       // wp_enqueue_style( 'takosking-magic',     TAKOSKING_URI .'/assets/css/magic.css' );
        wp_enqueue_style( 'takosking-theme', 	      TAKOSKING_URI .'/assets/css/style.css' );
    }
}



/** Function for register sidebar */
if ( ! function_exists( 'takosking_register_sidebar' ) ) {
    function takosking_register_sidebar()
    {
        global $takosking_opt;

        // register main sidebars
        register_sidebar(
            array(
                'id'            => 'sidebar',
                'name'          => esc_html__( 'Sidebar' , 'takosking' ),
                'before_widget' => '<div class="takosking-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h6 class="takosking-title-w">',
                'after_title'   => '</h6>',
                'description'   => esc_html__( 'Drag the widgets for blog sidebars.', 'takosking' )
            )
        );

        // register footer sidebars is active
        register_sidebar(
            array(
                'id'            => 'footer-sidebar',
                'name'          => esc_html__( 'Footer sidebar' , 'takosking' ),
                'before_widget' => '<div class="col-xs-6 col-md-15 col-sm-1-5 takosking-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="ft-footer__title">',
                'after_title'   => '</h3>',
                'description'   => esc_html__( 'Drag the widgets for footer sidebars.', 'takosking' )
            )
        );
        // register footer sidebars is active
        register_sidebar(
            array(
                'id'            => 'footer-sidebar-bottom-menu',
                'name'          => esc_html__( 'Footer sidebar menu' , 'takosking' ),
                'before_widget' => '<div class="ft-footer--bottom__nav takosking-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="ft-footer__title">',
                'after_title'   => '</h3>',
                'description'   => esc_html__( 'Drag the widgets for footer sidebars.', 'takosking' )
            )
        );
    }
}