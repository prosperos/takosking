<?php
/**
 * Template Name: Legal notices
 */
get_header();
$legal_notices_subtitle = get_field('legal_notices_subtitle');
$legal_notices_title = get_field('legal_notices_title');
$general_conditions = get_field('general_conditions');

?>
<div class="legal_notices ">
    <div class="arrow_next_block legal_notices_image"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="legal_notices_title">
                    <?php
                    $counts = 1;
                    ?>
                    <?php if ( ! empty( $legal_notices_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $legal_notices_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $legal_notices_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $legal_notices_title ); ?></p>
                    <?php endif; ?>
                </div>
                    <div class="number_items">
                    <?php foreach ($general_conditions as $general_text): ?>
                    <div class="row">
                        <div class="col-md-1">
                            <h2 class="count"><?php echo $counts++;?></h2>
                        </div>
                        <div class="col-md-11">
                            <div class="text">
                            <h3><?php echo wp_kses_post( $general_text['general_conditions_title'] ); ?></h3>
                            <?php echo wp_kses_post( $general_text['general_conditions_text'] ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
get_footer();
?>