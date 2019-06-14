<?php
/**
 * Template Name: Mobile App
 */
get_header();
$mobile_app_subtitle = get_field('mobile_app_subtitle');
$mobile_app_title = get_field('mobile_app_title');
$mobile_app_description = get_field('mobile_app_description');
$mobile_app_image = get_field('mobile_app_image');
?>
<!--MOBILE APP-->
<div class="modile_app mobile_page section">

    <div class="mobile_smock"></div>
    <div class="mobile_smock_right"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-5">
                <div class="our_menu_text">
                    <?php if ( ! empty( $mobile_app_subtitle ) ): ?>
                        <p class="caption_big"><?php echo esc_html( $mobile_app_subtitle ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $mobile_app_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $mobile_app_title ); ?></p>
                    <?php endif; ?>
                    <img src="<?php echo esc_url( $mobile_app_image )?>" class="vis" alt="">
                    <div class="content_with_btn">
                        <?php if ( ! empty( $mobile_app_description ) ): ?>
                            <p class="info description_opacity"><?php echo wp_kses_post( $mobile_app_description ); ?></p>
                        <?php endif; ?>
                        <div class="mobile_app_btn">
                            <a class="main_btn google_app" href="#">
                                <span class="learn_more"> <?php echo _e('<span> </span> GOOGLE PLAY', 'takosking') ?></span>
                                <span class="arrow"><span class="arrow_white"></span></span>
                            </a>
                            <a class="main_btn app_store" href="#">
                                <span class="learn_more"> <?php echo _e('<span>APP </span>STORE', 'takosking') ?></span>
                                <span class="arrow"><span class="arrow_white"></span></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-7 col-xl-7 none">
                <img src="<?php echo esc_url( $mobile_app_image )?>" class="ingridient_app" alt="">
            </div>
        </div>
    </div>
    <a class="arrow_next_block animated fadeInUp delay-2s" href="#"><span></span></a>
</div>
<!--MAIN FEATURES-->
<?php

$slider_images = get_field('slider_images');
$main_features_sub_title = get_field('main_features_sub_title');
$main_featurestitle = get_field('main_featurestitle');
$main_features_items = get_field('main_features_items');
$app_gallery_slider_images = get_field('app_gallery_slider_images');
$app_gallery_title = get_field('app_gallery_title');
$app_gallery_subtitle = get_field('app_gallery_subtitle');
?>
<div class="main_features section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 hidden-lg-down">
                        <div class="mobile_border"></div>
                        <div class="owl-carousel owlExample">
                            <?php $id_bookmark =1; foreach ($slider_images as $image){ ?>
                                <div class="item" id="bookmark<?php echo $id_bookmark++; ?>">
                                    <div class="image_item_vertical"><img src="<?php echo esc_url( $image['image'] )?>" alt=""></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="main_features_text">
                            <?php if ( ! empty( $main_features_sub_title ) ): ?>
                                <p class="caption_big"><?php echo wp_kses_post($main_features_sub_title  ); ?></p>
                            <?php endif; ?>
                            <?php if ( ! empty( $main_featurestitle ) ): ?>
                                <p class="title"><?php echo wp_kses_post( $main_featurestitle ); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="bookmarks">
                            <div class="test">
                        <?php
                        $count = 0;
                        if (!empty($main_features_items)){
                            foreach ($main_features_items as $image ) {
                                ?>
                                <a class="bookmark<?php if ($count == 0) echo ' active';?>" data="<?php echo $count++;?>">
                                    <div class="icons_features"><?php echo  $image['icon'] ; ?></div>
                                    <div class="description">
                                        <h2 class="title2"><?php echo wp_kses_post( $image['title'] ); ?></h2>
                                        <p class="info"><?php echo wp_kses_post( $image['description'] ); ?></p>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="app_gallery section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_features_text">
                    <?php if ( ! empty( $app_gallery_title ) ): ?>
                        <p class="caption_big"><?php echo wp_kses_post($app_gallery_title  ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $app_gallery_subtitle ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $app_gallery_subtitle ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="carousel">
                    <div class="border_phone"></div>
                    <?php foreach ($app_gallery_slider_images as $image ) {?>
                        <img src="<?php echo esc_url( $image['one_imagee'] ); ?>" alt="">
                    <?php }?>
                </div>
                <div id="carrousel">
                    <div class="shadow_left"></div>
                    <div class="border_phone"></div>
                    <div class="shadow_right"></div>
                    <div class="owl-carousel owl-theme2">
                        <?php foreach ($app_gallery_slider_images as $image ) {?>
                            <img src="<?php echo esc_url( $image['one_imagee'] ); ?>" alt="">
                        <?php }?>
                    </div>
                </div>
                <a id="prev" class="nav_button prev_button link pull-left" title="prev"><span class="circle"><span class="arrow_left"></span></span></a>
                <a id="next" class="nav_button next_button link pull-right" title="next"><span class="circle"><span class="arrow_right"></span></span></a>
            </div>
        </div>
    </div>
</div>
<?php

$join_us_subtitle = get_field('join_us_subtitle');
$join_us_title = get_field('join_us_title');
$join_us_btn_link_google = get_field('join_us_btn_link_google');
$join_us_btn_link_store = get_field('join_us_btn_link_store');
?>
<div class="join_up_now modile_app mobile_page section fp-auto-height">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content our_menu_text ">
                    <div class="main_features_text">
                        <?php if ( ! empty( $join_us_subtitle ) ): ?>
                            <p class="info"><?php echo wp_kses_post($join_us_subtitle  ); ?></p>
                        <?php endif; ?>
                        <?php if ( ! empty( $join_us_title ) ): ?>
                            <p class="title"><?php echo wp_kses_post( $join_us_title ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mobile_app_btn ">
                        <a class="main_btn google_app" href="<?php echo esc_url($join_us_btn_link_google);?>">
                            <span class="learn_more"> <?php echo _e('<span> </span> GOOGLE PLAY', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </a>
                        <a class="main_btn app_store" href="<?php echo esc_url($join_us_btn_link_store);?>">
                            <span class="learn_more"> <?php echo _e('<span>APP </span>STORE', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>


