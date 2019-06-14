<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package takosking
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 section not-found">

                <div class="background_smog"></div>
				<header class="page-header">
                    <p class="caption_big"><?php echo _e( '404 ERROR', 'takosking' ); ?></p>
					<h1 class="title"><?php echo _e( 'YOU <span>WON`T FIND</span> YOUR <span>TACOS HERE</span> ...', 'takosking' ); ?></h1>
                    <a href="/" class="our_menu_left main_btn is-animated">
                        <div class="our_menu_link clearfix">
                            <span class="our_menu_text"><?php echo _e('GO HOME', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </div>
                    </a>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
