<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();
// -----------------------------------------
// POST PREVIEW OPTIONS                    -
// -----------------------------------------
$options[]    = array(
	'id'        => 'takosking_post_options',
	'title'     => 'Post preview settings',
	'post_type' => 'post',
	'context'   => 'normal',
	'priority'  => 'default',
	'sections'  => array(
		array(
			'name'   => 'section_3',
			'fields' => array(
                array(
                    'id'      	 => 'info_post',
                    'type'    	 => 'textarea',
                    'title'   	 => 'Information post',
                ),
			)
		)
	)
);

// -----------------------------------------
// PAGE OPTIONS                            -
// -----------------------------------------
//$options[]    = array(
//	'id'        => 'takosking_page_options',
//	'title'     => 'Page settings',
//	'post_type' => 'page',
//	'context'   => 'side',
//	'priority'  => 'high',
//	'sections'  => array(
//		array(
//			'name'   => 'section_3',
//			'fields' => array(
//				array(
//					'id'      => 'page_footer',
//					'type'    => 'switcher',
//					'title'   => 'Page footer',
//					'default' => true
//				),
//                array(
//                    'id'      => 'absolute_header',
//                    'type'    => 'switcher',
//                    'title'   => 'Absolute header',
//                    'default' => false
//                ),
//			)
//		),
//	)
//);



// -----------------------------------------
// PAGE OPTIONS                            -
// -----------------------------------------
$options[]    = array(
    'id'        => 'takosking_team_options',
    'title'     => 'Team settings',
    'post_type' => 'team',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'   => 'section_5',
            'fields' => array(
                array(
                    'id'    => 'position',
                    'type'  => 'textarea',
                    'title' => 'Position',
                ),
            )
        ),
    )
);

// -----------------------------------------
// PORTFOLIO OPTIONS                            -
// -----------------------------------------
$options[]    = array(
    'id'        => 'takosking_portfolio_options',
    'title'     => 'Portfolio settings',
    'post_type' => 'portfolio',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'   => 'section_7',
            'fields' => array(
                array(
                    'id'              => 'takosking_text',
                    'type'            => 'group',
                    'title'           => 'Text field',
                    'button_title'    => 'Add New',
                    'accordion_title' => 'Add New Field',
                    'fields'          => array(

                        array(
                            'id'          => 'title',
                            'type'        => 'text',
                            'title'       => 'Title',
                        ),

                        array(
                            'id'          => 'description',
                            'type'        => 'text',
                            'title'       => 'Description',
                        ),
                    ),
                ),
            )
        ),
    )
);


CSFramework_Metabox::instance( $options );
