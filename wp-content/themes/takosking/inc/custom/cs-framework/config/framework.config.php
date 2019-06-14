<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
	'menu_title' 		=> 'Theme options',
	'menu_type'  		=> 'menu',
	'menu_slug'  		=> 'takosking-options',
	'ajax_save'  		=> true,
	'show_reset_all' 	=> true,
	'framework_title'	=> 'Theme options ',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// ----------------------------------------
// General option section
// ----------------------------------------
//$options[] = array(
//	'name'        => 'general',
//	'title'       => 'General',
//	'icon'        => 'fa fa-globe',
//	'fields'      => array(
//
//		array(
//			'id'      => 'global_style_color',
//			'type'    => 'color_picker',
//			'title'   => 'Global style color'
//		),
//        array(
//            'id'      => 'enable_human_diff',
//            'type'    => 'switcher',
//            'title'   => 'Enable Human diff time',
//            'default' => true
//        ),
//	)
//);

// ----------------------------------------
// Typography option section
// ----------------------------------------
//$options[] = array(
//	'name'        => 'typography',
//	'title'       => 'Typography',
//	'icon'        => 'fa fa-font',
//	'fields'      => array(
//		array(
//			'type'    => 'subheading',
//			'content' => 'Global typography style',
//		),
//		array(
//			'id'              => 'typography_style',
//			'type'            => 'group',
//			'title'           => 'Typography Headings',
//			'button_title'    => 'Add New',
//			'accordion_title' => 'Add New Icon',
//
//			// begin: fields
//			'fields'      => array(
//
//			    // header size
//			    array(
//					'id'             => 'heading_tag',
//					'type'           => 'select',
//					'title'          => 'Title Tag',
//					'options'        => array(
//						'h1'    => esc_html__('H1','antica'),
//						'h2'    => esc_html__('H2','antica'),
//						'h3'    => esc_html__('H3','antica'),
//						'h4'    => esc_html__('H4','antica'),
//						'h5'    => esc_html__('H5','antica'),
//						'h6'    => esc_html__('H6','antica'),
//						'p'     => esc_html__('Paragraph','antica'),
//						'span'  => esc_html__('Span','antica'),
//						'a'     => esc_html__('Link','antica'),
//					),
//			    ),
//
//			    // font family
//			    array(
//					'id'        => 'heading_family',
//					'type'      => 'typography',
//					'title'     => 'Font Family',
//					'default'   => array(
//						'family'  => 'Lato',
//						'variant' => 'regular',
//						'font'    => 'google', // this is helper for output
//					),
//			    ),
//
//			    // font size
//			    array(
//					'id'          => 'heading_size',
//					'type'        => 'text',
//					'title'       => 'Font Size',
//					'default'     => '24',
//			    ),
//
//			    // font color
//			    array(
//					'id'      => 'heading_color',
//					'type'    => 'color_picker',
//					'title'   => 'Font Color',
//			    ),
//			),
//		),
//		array(
//			'type'    => 'subheading',
//			'content' => 'Menu typography style',
//		),
//		array(
//			'id'      => 'default_header_typography',
//			'type'    => 'switcher',
//			'title'   => 'Default header typography',
//			'default' => true
//		),
//		array(
//			'id'        => 'header_typography_group',
//			'type'      => 'fieldset',
//			'title'     => 'Menu typography',
//			'fields'    => array(
//				array(
//					'id'      => 'header_typography',
//					'type'    => 'typography',
//					'title'   => 'Font',
//					'default'   => array(
//						'font'    => 'google',
//					),
//				),
//				array(
//					'id'      => 'header_font_size',
//					'type'    => 'number',
//					'title'   => 'Menu font size',
//					'after'   => ' <i class="cs-text-muted">(px)</i>'
//				),
//				array(
//					'id'      => 'header_font_color',
//					'type'    => 'color_picker',
//					'title'   => 'Menu font color',
//				),
//			),
//			'dependency' => array( 'default_header_typography', '==', false )
//		),
//	)
//);

// ----------------------------------------
// Header option section
// ----------------------------------------
$options[] = array(
    'name'        => 'header',
    'title'       => 'Header',
    'icon'        => 'fa fa-arrow-up',
    'fields'      => array(
        array(
            'type'    => 'subheading',
            'content' => 'Other settings',
        ),
        array(
            'id'         => 'logo_type',
            'type'       => 'select',
            'title'      => 'Logo type',
            'options'    => array(
                'image'   => 'Image',
                'text'    => 'Text'
            ),
            'default' => 'text'
        ),
        array(
            'id'         => 'site_logo',
            'type'       => 'upload',
            'title'      => 'Site Logo',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
            'dependency' => array( 'logo_type', '==', 'image' )
        ),
        array(
            'id'         => 'retina_logo',
            'type'       => 'upload',
            'title'      => 'Retina Logo',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
            'dependency' => array( 'logo_type', '==', 'image' )
        ),
        array(
            'id'         => 'text_logo',
            'type'       => 'textarea',
            'title'      => 'Text logo',
            'default'    => 'Takosking',
            'dependency' => array( 'logo_type', '==', 'text' )
        ),
        array(
            'id'         => 'text_logo_font_size',
            'type'       => 'number',
            'title'      => 'Text logo font size',
            'dependency' => array( 'logo_type', '==', 'text' )
        ),
        array(
            'id'          => 'header_notice',
            'type'        => 'text',
            'title'       => 'Legal notice'
        ),
        array(
            'id'          => 'header_link',
            'type'        => 'text',
            'title'       => 'Legal notice link'
        ),
        array(
            'id'          => 'header_email',
            'type'        => 'text',
            'title'       => 'Email '
        ),
        array(
            'id'           => 'header_other_list',
            'type'         => 'group',
            'title'        => 'Header other list',
            'button_title' => 'Add New',
            'fields'       => array(
                array(
                    'id'          => 'header_other_link',
                    'type'        => 'text',
                    'title'       => 'Url'
                ),
                array(
                    'id'          => 'header_other_text',
                    'type'        => 'text',
                    'title'       => 'Text'
                )
            ),
            'default' => array(
                array(
                    'header_other_link' => '#',
                    'header_other_text' => 'Useful Links'
                ),
            ),
        ),
    ) // end: fields
);

// ----------------------------------------
// Footer option section                  -
// ----------------------------------------
$author_url = '#';
$options[] = array(
    'name'        => 'footer',
    'title'       => 'Footer',
    'icon'        => 'fa fa-arrow-down',
    'fields'      => array(
        array(
            'type'    => 'subheading',
            'content' => 'Other settings',
        ),
        array(
            'id'      => 'footer_subscribe',
            'type'    => 'switcher',
            'title'   => 'Footer subscribe',
            'default' => true
        ),
        array(
            'id'         => 'footer_logo',
            'type'       => 'upload',
            'title'      => 'Footer Logo',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
        ),
        array(
            'id'          => 'footer__text_logo',
            'type'        => 'text',
            'title'       => 'Text under logo'
        ),
        array(
            'id'      => 'footer_other_links',
            'type'    => 'switcher',
            'title'   => 'Footer other links',
            'default' => true
        ),
        array(
            'id'           => 'footer_other_list',
            'type'         => 'group',
            'title'        => 'Footer other list',
            'button_title' => 'Add New',
            'fields'       => array(
                array(
                    'id'          => 'footer_other_link',
                    'type'        => 'text',
                    'title'       => 'Url'
                ),
                array(
                    'id'          => 'footer_other_text',
                    'type'        => 'text',
                    'title'       => 'Text'
                )
            ),
            'default' => array(
                array(
                    'footer_other_link' => '#',
                    'footer_other_text' => 'Useful Links'
                ),
            ),
            'dependency' => array( 'footer_other_links', '==', true )
        ),

        array(
            'id'          => 'footer_email',
            'type'        => 'text',
            'title'       => 'Email '
        ),
        array(
            'id'      => 'footer_social',
            'type'    => 'switcher',
            'title'   => 'Footer social',
            'default' => true
        ),
        array(
            'id'           => 'footer_social_links',
            'type'         => 'group',
            'title'        => 'Footer social links',
            'button_title' => 'Add New',
            'fields'       => array(
                array(
                    'id'          => 'footer_social_link',
                    'type'        => 'text',
                    'title'       => 'Url'
                ),
                array(
                    'id'          => 'footer_social_text',
                    'type'        => 'text',
                    'title'       => 'Icon'
                )
            ),
            'default' => array(
                array(
                    'footer_social_link' => 'https://fb.com/',
                    'footer_social_text' => 'Facebook'
                ),
                array(
                    'footer_social_link' => 'https://twitter.com/',
                    'footer_social_text' => 'Twitter'
                ),
            ),
            'dependency' => array( 'footer_social', '==', true )
        ),
        array(
            'id'         => 'footer_copyright',
            'type'       => 'textarea',
            'title'      => 'Copyright text',
            'default'    => ' Handcrafted in Voronin Design studio. 2019. &copy;',
        ),

        array(
            'id'         => 'footer_copyright_logo',
            'type'       => 'upload',
            'title'      => 'Copyright logo',
        ),

    ) // end: fields
);
//// ----------------------------------------
//// Blog                                   -
//// ----------------------------------------
//$options[] = array(
//	'name'        => 'blog',
//	'title'       => 'Blog',
//	'icon'        => 'fa fa-book',
//	'fields'      => array(
//        array(
//            'type'    => 'heading',
//            'content' => 'Banner blog',
//        ),
//		array(
//			'id'      	 => 'banner_blog',
//			'type'    	 => 'switcher',
//			'title'   	 => 'Show/Hide Banner Blog',
//			'default' 	 => true
//		),
//        array(
//            'id'      	 => 'banner_image',
//            'type'    	 => 'upload',
//            'title'   	 => 'Banner image',
//            'desc'    	 => 'Upload any media using the WordPress Native Uploader.',
//            'dependency' => array( 'banner_blog', '==', true )
//        ),
//        array(
//            'id'      	 => 'banner_blog_title',
//            'type'    	 => 'textarea',
//            'title'   	 => 'Banner title',
//            'dependency' => array( 'banner_blog', '==', true )
//        ),
//        array(
//            'id'      	 => 'banner_blog_subtitle',
//            'type'    	 => 'text',
//            'title'   	 => 'Banner subtitle',
//            'dependency' => array( 'banner_blog', '==', true )
//        ),
//        array(
//            'id'        => 'banner_link',
//            'type'      => 'fieldset',
//            'title'     => 'Banner blog link',
//            'fields'    => array(
//
//                array(
//                    'id'      	 => 'banner_blog_link',
//                    'type'    	 => 'text',
//                    'title'   	 => 'Banner link URI',
//                ),
//                array(
//                    'id'      	 => 'banner_blog_link_text',
//                    'type'    	 => 'text',
//                    'title'   	 => 'Banner link text',
//                ),
//
//            ),
//            'dependency' => array( 'banner_blog', '==', true )
//        ),
//        array(
//            'type'    => 'heading',
//            'content' => 'other settings',
//        ),
//        array(
//            'id'      => 'blog_style',
//            'type'    => 'select',
//            'title'   => 'Blog style',
//            'options' => array(
//                'default'    => 'Default',
//                'modern'     => 'Modern',
//                'vertical'   => 'Vertical',
//            )
//        ),
//        array(
//            'id'      => 'blog_sidebar',
//            'type'    => 'select',
//            'title'   => 'Blog sidebar',
//            'options' => array(
//                'left'    => 'Left',
//                'right'   => 'Right',
//                'disable' => 'Disable'
//            ),
//            'default' => 'right'
//        ),
//        array(
//            'id'      => 'pagination_style',
//            'type'    => 'select',
//            'title'   => 'Pagination style',
//            'options' => array(
//                'default'       => 'Default',
//                'load_more'     => 'Load More',
//            )
//        ),
//        array(
//            'type'    => 'heading',
//            'content' => 'Post blog settings',
//        ),
//		array(
//			'id'      => 'post_sidebar',
//			'type'    => 'select',
//			'title'   => 'Single post sidebar',
//			'options' => array(
//				'left'    => 'Left',
//				'right'   => 'Right',
//				'disable' => 'Disable'
//			),
//			'default' => 'right'
//		),
//	)
//);
//
//// ----------------------------------------
//// Single                                 -
//// ----------------------------------------
//$options[] = array(
//    'name'        => 'single',
//    'title'       => 'Single',
//    'icon'        => 'fa fa-file-text-o',
//    'fields'      => array(
//        array(
//            'type'    => 'heading',
//            'content' => 'Banner post',
//        ),
//        array(
//            'id'      	 => 'banner_post',
//            'type'    	 => 'switcher',
//            'title'   	 => 'Show/Hide Banner Post',
//            'default' 	 => true
//        ),
//        array(
//            'id'      	 => 'banner_post_image',
//            'type'    	 => 'upload',
//            'title'   	 => 'Banner image',
//            'desc'    	 => 'Upload any media using the WordPress Native Uploader.',
//            'dependency' => array( 'banner_post', '==', true )
//        ),
//        array(
//            'id'      	 => 'banner_post_title',
//            'type'    	 => 'textarea',
//            'title'   	 => 'Banner title',
//            'dependency' => array( 'banner_post', '==', true )
//        ),
//        array(
//            'id'      	 => 'banner_post_subtitle',
//            'type'    	 => 'text',
//            'title'   	 => 'Banner subtitle',
//            'dependency' => array( 'banner_post', '==', true )
//        ),
//        array(
//            'id'        => 'banner_link',
//            'type'      => 'fieldset',
//            'title'     => 'Banner post link',
//            'fields'    => array(
//
//                array(
//                    'id'      	 => 'banner_post_link',
//                    'type'    	 => 'text',
//                    'title'   	 => 'Banner link URI',
//                ),
//                array(
//                    'id'      	 => 'banner_post_link_text',
//                    'type'    	 => 'text',
//                    'title'   	 => 'Banner link text',
//                ),
//
//            ),
//            'dependency' => array( 'banner_post', '==', true )
//        ),
//        array(
//            'type'    => 'heading',
//            'content' => 'Other settings',
//        ),
//        array(
//            'id'      => 'post_sidebar',
//            'type'    => 'select',
//            'title'   => 'Single post sidebar',
//            'options' => array(
//                'left'    => 'Left',
//                'right'   => 'Right',
//                'disable' => 'Disable'
//            ),
//            'default' => 'right'
//        ),
//    )
//);

// ----------------------------------------
// Custom CSS and JS
//// ----------------------------------------
//$options[] = array(
//	'name'        => 'custom_css',
//	'title'       => 'Custom CSS and JS',
//	'icon'        => 'fa fa-css3',
//	'fields'      => array(
//		array(
//		  	'id'         => 'custom_css_styles',
//		  	'desc'       => 'Only CSS, without tag &lt;style&gt;.',
//		  	'type'       => 'textarea',
//		  	'title'      => 'Custom CSS code'
//		),
//		array(
//		  	'id'         => 'custom_js_code',
//		  	'desc'       => 'Only JS code, without tag &lt;script&gt;.',
//		  	'type'       => 'textarea',
//		  	'title'      => 'Custom JS code'
//		)
//	)
//);

// ----------------------------------------
// 404 Page                               -
// ----------------------------------------
$options[] = array(
	'name'        => 'error_page',
	'title'       => '404 Page',
	'icon'        => 'fa fa-warning',
	'fields'      => array(
		array(
			'id'      => 'error_title',
			'type'    => 'text',
			'title'   => 'Error Title'
		),
		array(
			'id'      => 'error_content',
			'type'    => 'text',
			'title'   => 'Error button text'
		)
	) // end: fields
);

// ----------------------------------------
// Backup
// ----------------------------------------
$options[] = array(
	'name'     => 'backup_section',
	'title'    => 'Backup',
	'icon'     => 'fa fa-shield',
	'fields'   => array(
		array(
			'type'    => 'notice',
			'class'   => 'warning',
			'content' => 'You can save your current options. Download a Backup and Import.',
		),
		array(
			'type'    => 'backup',
		),
	) // end: fields
);

// ----------------------------------------
// Documentation
// ----------------------------------------
// $options[]  = array(
// 	'name'     => 'documentation_section',
// 	'title'    => 'Documentation',
// 	'icon'     => 'fa fa-info-circle',
// 	'fields'   => array(
// 		array(
// 		  'type'    => 'heading',
// 		  'content' => 'Documentation'
// 		),
// 		array(
// 		  'type'    => 'content',
// 		  'content' => 'To view the documentation, go to <a href="' . esc_url( $author_url ) . '" target="_blank">documentation page</a>.',
// 		),
// 	)
// );

CSFramework::instance( $settings, $options );
