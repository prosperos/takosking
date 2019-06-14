<?php
/**
 * Template Name: Home
 */
get_header();


$banner_description = get_field('banner_description');
$banner_subtitle = get_field('banner_subtitle');
$banner_title = get_field('banner_title');
$background_image = get_field('background_image');
//$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') );

$about_us_subtitle = get_field('about_us_subtitle');
$about_us_title = get_field('about_us_title');
$about_us_info = get_field('about_us_info');
$join_us_btn_text_first = get_field('join_us_btn_text_first');
$join_us_btn_link_first = get_field('join_us_btn_link_first');
$right_image = get_field('right_image');

$restaurant_subtitle = get_field('restaurant_subtitle');
$restaurant_title = get_field('restaurant_title');
$restaurant_descrition = get_field('restaurant_descrition');
$restaurant_images = get_field('restaurant_images');

$next_restaurant_sub_title = get_field('next_restaurant_sub_title');
$next_restaurant_title = get_field('next_restaurant_title');
$next_restaurant_items = get_field('next_restaurant_items');

$our_menu_subtitle = get_field('our_menu_subtitle');
$our_menu_title = get_field('our_menu_title');
$our_menu_subtitle_description = get_field('our_menu_subtitle_description');
$our_menu_subtitle_image = get_field('our_menu_subtitle_image');
$our_menu_right_image = get_field('our_menu_right_image');
$our_menu_right_image_mobile = get_field('our_menu_right_image_mobile');
$our_menu_right_title = get_field('our_menu_right_title');
$our_menu_description = get_field('our_menu_description');

$mobile_app_subtitle = get_field('mobile_app_subtitle');
$mobile_app_title = get_field('mobile_app_title');
$mobile_app_description = get_field('mobile_app_description');
$mobile_app_image = get_field('mobile_app_image');
$facebook_instagram_news_subtitle = get_field('facebook_instagram_news_subtitle');
$facebook_instagram_news_title = get_field('facebook_instagram_news_title');

?>
<!-- main banner -->
<div class="header_block section" style="background-image: url(<?php echo esc_url( $background_image );?>)">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner_wrapper ">
                    <div class="header-block__content animated fadeInUp delay-2s">
                        <?php if ( ! empty( $banner_subtitle ) ):?>
                            <p class="caption_big "><?php echo wp_kses_post( $banner_subtitle ); ?></p>
                        <?php endif; ?>
                        <?php if ( ! empty( $banner_title ) ):?>
                            <p class="title " ><?php echo  $banner_title ; ?></p>
                        <?php endif; ?>
                        <?php if ( ! empty( $banner_description ) ):?>
                            <p class="description_opacity "><?php echo wp_kses_post( $banner_description ); ?></p>
                        <?php endif; ?>

                        <a class="arrow_next_block is-animated" href="#"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--About us block-->
<div class="about_us_wrapper second section">
    <div class="about_us_bug_image is-animated " style="background-image: url(<?php echo esc_attr( $right_image ); ?>)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about_us_text is-animated">
                    <?php if ( ! empty( $about_us_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $about_us_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $about_us_title ) ): ?>
                        <p class="title"><?php echo esc_html( $about_us_title ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="about_us__wrapp is-animated">

                    <?php if ( ! empty( $about_us_info ) ): ?>
                        <p class="info "><?php echo wp_kses_post( $about_us_info ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $join_us_btn_text_first ) ): ?>
                        <a class="main_btn underlide_link " href="<?php echo esc_attr( $join_us_btn_link_first ); ?>"><?php echo wp_kses_post( $join_us_btn_text_first ); ?></a>
                    <?php endif; ?>
                    <a href="#" class="our_menu_left main_btn">
                        <div class="our_menu_link clearfix">
                            <span class="our_menu_text"><?php echo _e('OUR MENU', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="smoke_small is-animated"></div>
</div>
<!-- LAST RESTAURANT OPENED BLOCK -->
<div class="restaurant third section">
    <div class="restaurant_smoke is-animated"></div>
    <div class="container">
        <div class="row">
            <div class="col-5 none"></div>
            <div class="col-12 col-md-7">
                <div class="restaurant_text is-animated">
                <?php if ( ! empty( $restaurant_subtitle ) ): ?>
                    <h4 class="caption_big"><?php echo esc_html( $restaurant_subtitle ); ?></h4>
                <?php endif; ?>
                <?php if ( ! empty( $restaurant_title ) ): ?>
                    <p class="title"><?php echo wp_kses_post( $restaurant_title ); ?></p>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-lg-7 offset_js">
                <div class="swiper-container styling_container is-animated ">
                    <div class="swiper-wrapper">
                        <?php foreach ($restaurant_images as $item_image): ?>
                        <div class="swiper-slide">
                            <div class="item_image" style="background-image: url(<?php echo esc_attr( $item_image['images'] ); ?>)"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="restaurant_wrapp is-animated ">
                    <?php if ( ! empty( $restaurant_descrition ) ): ?>
                        <p class="info description_opacity"><?php echo wp_kses_post( $restaurant_descrition ); ?></p>
                    <?php endif; ?>
                    <a href="#ourmenu" class="our_menu main_btn">
                        <span class="look_at_map"> <?php echo _e('<span class="orange">LOOK</span> AT MAP', 'takosking') ?></span>
                        <span class="arrow"><span class="arrow_white"></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--NEXT RESTAURANT BLOCK-->
<div class="new_restaurant fourth section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="restaurant_text is-animated">
                    <?php if ( ! empty( $next_restaurant_sub_title ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $next_restaurant_sub_title ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $next_restaurant_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $next_restaurant_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper-container restaurant_items_wrapper is-animated">
                    <div class="swiper-wrapper">
                    <?php foreach ($next_restaurant_items as $item): ?>
                    <div class="swiper-slide">
                        <div class="restaurant_item ">
                            <div class=" orange_bg"><div class="image_bg" style="background-image: url(<?php echo esc_attr( $item['next_restaurant_image'] ); ?>)"></div></div>
                            <div class="description_wrapp">
                                <?php if ( ! empty( $item['next_restaurant_name'] ) ): ?>
                                    <h3 class="name"><?php echo wp_kses_post( $item['next_restaurant_name'] ); ?></h3>
                                <?php endif; ?>

                                <?php if ( ! empty( $item['next_restaurant_leave_days'] ) ): ?>
                                    <p class="date_open"><?php echo _e('Will open in:', 'takosking') ?> <span class="days"><?php echo esc_html( $item['next_restaurant_leave_days'] );?></span>  <?php echo _e('<small>days</small>', 'takosking') ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="swiper-paginations on_restorant"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--OUR MENU-->
<div id="our_menu" class="our_menu_block five section">
    <div class="container">
        <div class="row">
            <div class=" col-xl-4 col-lg-4 col-12">
                <div class="our_menu_text is-animated">
                    <?php if ( ! empty( $our_menu_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $our_menu_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $our_menu_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $our_menu_title ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $our_menu_subtitle_description ) ): ?>
                        <p class="info description_opacity"><?php echo wp_kses_post( $our_menu_subtitle_description ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $our_menu_subtitle_image ) ): ?>
                        <div style="background-image: url(<?php echo esc_html( $our_menu_subtitle_image ); ?>)" class="menu_detail" ></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class=" col-xl-8 col-lg-8 col-12">
                <div class="our_menu_product is-animated">
                    <?php if ( ! empty( $our_menu_right_image ) ): ?>
                        <div class="complite_product" style="background-image: url(<?php echo esc_html( $our_menu_right_image ); ?>)"></div>
                    <?php endif; ?>
                    <?php if ( ! empty( $our_menu_right_image_mobile ) ): ?>
                        <div class="complite_product_mobile" style="background-image: url(<?php echo esc_html( $our_menu_right_image_mobile ); ?>)"></div>
                    <?php endif; ?>
                    <?php if ( ! empty( $our_menu_right_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $our_menu_right_title ); ?></p>
                    <?php endif; ?>
                    <div class="wrap_bottom_text">
                    <?php if ( ! empty( $our_menu_description ) ): ?>
                        <p class="info"><?php echo wp_kses_post( $our_menu_description ); ?></p>
                    <?php endif; ?>
                    <a class="main_btn" href="#">
                        <span class="constructor_takos"><?php echo _e('TAKOS CONSTRUCTOR', 'takosking') ?></span>
                        <span class="arrow"><span class="arrow_white"></span></span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MOBILE APP-->
<div class="modile_app six section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-xl-5">
                <div class="our_menu_text">
                    <div class="is-animated">
                        <?php if ( ! empty( $mobile_app_subtitle ) ): ?>
                            <h4 class="caption_big"><?php echo esc_html( $mobile_app_subtitle ); ?></h4>
                        <?php endif; ?>
                        <?php if ( ! empty( $mobile_app_title ) ): ?>
                            <p class="title"><?php echo wp_kses_post( $mobile_app_title ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="smaller_text_mobile is-animated">
                        <img src="<?php echo esc_url( $mobile_app_image )?>" class="vis d-md-none" alt="">
                        <?php if ( ! empty( $mobile_app_description ) ): ?>
                            <p class="info description_opacity"><?php echo wp_kses_post( $mobile_app_description ); ?></p>
                        <?php endif; ?>

                        <a class="main_btn" href="#">
                            <span class="learn_more"> <?php echo _e('<span>LEARN</span> MORE', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-7 col-xl-7 none">
                <img src="<?php echo esc_url( $mobile_app_image )?>" class="ingridient_app is-animated" alt="">
            </div>
        </div>

    </div>

</div>

<!--WHAT PEOPLE SAY-->
<div class="what_people_say seven section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our_menu_text">
                    <?php if ( ! empty( $facebook_instagram_news_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $facebook_instagram_news_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $facebook_instagram_news_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $facebook_instagram_news_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="facebook">
                    <?php echo do_shortcode('[custom-facebook-feed class="slideshow" num=10]') ?>
                    <div class="swiper-pagination-facebook"></div>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="instagram">
                    <?php echo do_shortcode('[instagram-feed]') ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="follow_us_instagram">
                    <a class="main_btn" href="https://www.instagram.com/takosking/">
                        <span class="learn_more"> <span>FOLLOW US </span>ON INSTAGRAM</span>
                        <span class="arrow"><span class="arrow_white"></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>

<?php
//get_footer();
?>