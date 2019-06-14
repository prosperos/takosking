<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package takosking
 */
$footer_copyright = cs_get_option('footer_copyright');
$footer_social_links = cs_get_option('footer_social_links');
$footer_logo = cs_get_option('footer_logo');
$footer_email = cs_get_option('footer_email');
$footer_copyright_logo = cs_get_option('footer_copyright_logo');
$footer__text_logo = cs_get_option('footer__text_logo');

?>

</div>
<footer id="colophon" class="main-footer section fp-auto-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="left_side">
                    <div class="footer_logo">
                        <?php if ( isset( $footer_logo ) && $footer_logo ) { ?>
                            <img src="<?php echo wp_kses_post( $footer_logo ); ?>" alt="Takos king">
                        <?php }  ?>
                        <?php if ( isset( $footer__text_logo ) && $footer__text_logo ) { ?>
                            <h6><?php echo wp_kses_post( $footer__text_logo ); ?></h6>
                        <?php }  ?>
                    </div>
                    <div class="site_info">
                        <?php if ( isset( $footer_email ) && $footer_email ) { ?>
                            <span>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo wp_kses_post( $footer_email ); ?>"> <?php echo wp_kses_post( $footer_email ); ?></a>
                            </span>
                        <?php }  ?>
                        <?php foreach ($footer_social_links as $item) : ?>
                        <a href="<?php echo $item['footer_social_link']; ?>" class="footer_link"><i class="fa <?php echo $item['footer_social_text']; ?>" aria-hidden="true"></i></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php if ( isset( $footer_copyright ) && $footer_copyright ) { ?>
                    <div class="footer_bottom__copyright">
                        <img src="<?php echo wp_kses_post( $footer_copyright_logo ); ?>" alt="">
                        <p><?php echo wp_kses_post( $footer_copyright ); ?></p>
                    </div>
                <?php }  ?>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
