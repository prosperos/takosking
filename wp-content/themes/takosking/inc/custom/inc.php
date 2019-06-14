<?php
/**
 * Including needed files.
 *
 * @package ]
 * @since 1.0.0
 *
 */

// Include all styles and scripts.
require_once TAKOSKING_F_PATH . '/custom/action-config.php';

// Helper functions.
require_once TAKOSKING_F_PATH . '/custom/helper-functions.php';


// Framework for theme options.
require_once( TAKOSKING_F_PATH .'/custom/cs-framework/cs-framework.php');

define( 'CS_ACTIVE_FRAMEWORK', true );
define( 'CS_ACTIVE_METABOX',   true );
define( 'CS_ACTIVE_TAXONOMY',  false );
define( 'CS_ACTIVE_SHORTCODE', false );
define( 'CS_ACTIVE_CUSTOMIZE', false );
