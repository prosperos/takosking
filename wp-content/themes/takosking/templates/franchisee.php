<?php
/**
 * Template Name: Franchisee
 */
get_header();
$slider_images = get_field('slider_images');
$franchisee_subtitle = get_field('franchisee_subtitle');
$franchisee_title = get_field('franchisee_title');
$franchisee_text = get_field('franchisee_text');
$history_sybtitle = get_field('history_sybtitle');
$history_title = get_field('history_title');
$history_text = get_field('history_text');

$concept_sybtitle = get_field('concept_sybtitle');
$concept_title = get_field('concept_title');
$concept_images = get_field('concept_images');
$concept_text = get_field('concept_text');


$development_subtitle = get_field('development_subtitle');
$development_title = get_field('development_title');
$development_text = get_field('development_text');
$development_tubs = get_field('development_tubs');

$join_us_now_subtitle = get_field('join_us_now_subtitle');
$join_us_now_title = get_field('join_us_now_title');
$join_us_now_text = get_field('join_us_now_text');


?>

<!--BECOME A FRANCHISEE-->
<div class="frachise section">
    <div class="smoke_frachise"></div>
    <div class="container">
        <div class="row">
            <div class=" offset-5"></div>
            <div class="col-xs-6 col-md-12 col-lg-6">
                <div class="restaurant_text animated fadeInUp delay-2s">
                    <?php if ( ! empty( $franchisee_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $franchisee_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $franchisee_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $franchisee_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-6">
                <div class="swiper-container franchisee_slider animated fadeInUp delay-2s">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider_images as $item_image): ?>
                            <div class="swiper-slide">
                                <div class="item_image" style="background-image: url(<?php echo esc_attr( $item_image['image_slide'] ); ?>)"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-6">
                <div class="animated fadeInUp delay-2s">
                    <p class="info description_opacity">
                    <?php if ( ! empty( $franchisee_text ) ): ?>
                        <?php echo $franchisee_text; ?>
                    <?php endif; ?>
                    </p>
                    <a href="#" class="our_menu_left main_btn is-animated">
                        <div class="our_menu_link clearfix">
                            <span class="our_menu_text"><?php echo _e('REGISTRATION', 'takosking') ?></span>
                            <span class="arrow"><span class="arrow_white"></span></span>
                        </div>
                    </a>
                </div>
            </div>
            <a class="arrow_next_block" href="#"><span></span></a>
        </div>
    </div>
</div>
<!--HISTORY-->
<div class="history second section">
    <div class="background_history is-animated" ></div>
    <div class="smoke_history is-animated"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_history_block is-animated">
                    <?php if ( ! empty( $history_sybtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $history_sybtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $history_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $history_title ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="history_text is-animated">
                    <?php if ( ! empty( $history_text ) ): ?>
                        <p class="info "><?php echo $history_text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONCEPT -->
<div class="restaurant concept third section">
    <div class="restaurant_smoke is-animated"></div>
    <div class="container">
        <div class="row">
            <div class="col-5 none"></div>
            <div class="col-12 col-md-7">
                <div class="restaurant_text is-animated" >
                    <?php if ( ! empty( $concept_sybtitle ) ): ?>
                        <h4 class="caption_big" ><?php echo esc_html( $concept_sybtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $concept_title ) ): ?>
                        <p class="title " ><?php echo wp_kses_post( $concept_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-lg-7 offset_js">
                <div class="swiper-container styling_container is-animated">
                    <div class="swiper-wrapper">
                        <?php foreach ($concept_images as $item_image): ?>
                            <div class="swiper-slide">
                                <div class="item_image" style="background-image: url(<?php echo esc_attr( $item_image['concept_image'] ); ?>)"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="restaurant_wrapp is-animated">
                    <?php if ( ! empty( $concept_text ) ): ?>
                        <p class="info description_opacity"><?php echo wp_kses_post( $concept_text ); ?></p>
                    <?php endif; ?>
                    <a href="#ourmenu" class="our_menu main_btn">
                        <span class="look_at_map"> <?php echo _e('JOIN US', 'takosking') ?></span>
                        <span class="arrow"><span class="arrow_white"></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- DEVELOPMENT OF FRANCHISE -->
<div class="development fourth section ">
    <div class="development_smoke is-animated"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="is-animated">
                    <?php if ( ! empty( $development_subtitle ) ): ?>
                        <h4 class="caption_big"><?php echo esc_html( $development_subtitle ); ?></h4>
                    <?php endif; ?>
                    <?php if ( ! empty( $development_title ) ): ?>
                        <p class="title"><?php echo wp_kses_post( $development_title ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $development_text ) ): ?>
                        <p class="info description_opacity"><?php echo $development_text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbed is-animated">
                    <?php
                    $counts = 1;
                    $counts_id = 1;
                        if (!empty($development_tubs)){
                        foreach ($development_tubs as $items ) {
                    ?>
                        <input type="radio" name="tabs" id="tab-nav-<?php echo $counts_id++;?>" <?php if ($counts == 1) echo ' checked';?> >
                        <label for="tab-nav-<?php echo $counts++;?>"><?php echo $items['tub_name'];?></label>
                        <?php
                    }
                    }
                    ?>
                    <div class="tabs">
                        <?php
                        $counts = 1;
                        $counts_id = 1;
                        if (!empty($development_tubs)){
                            foreach ($development_tubs as $items ) {
                                ?>
                                <div><?php echo $items['tub_text'];?></div>
                                    <?php
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-panel show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">

                            <?php
                            $target_id = 1;$heading_id = 1;$accordion_id = 1;$heading_tab = 1;$content_tab = 1;$show =1;$active=1;
                            if (!empty($development_tubs)){
                                foreach ($development_tubs as $items ) {
                                    ?>
                                    <div class="card <?php if ($active == 1) echo ' active';$active++;?>">
                                        <div class="card-header" id="accordion-tab-1-heading-<?php echo $heading_id++;?>">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-<?php echo $accordion_id++;?>" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><?php echo $items['tub_name'];?></button>
                                            </h5>
                                        </div>
                                        <div class="collapse <?php if ($show == 1) echo ' show';$show++;?> " id="accordion-tab-1-content-<?php echo $content_tab++;?>" aria-labelledby="accordion-tab-1-heading-<?php echo $heading_tab++;?>" data-parent="#accordion-tab-1">
                                            <div class="card-body">
                                                <p><?php echo $items['tub_text'];?></p>
                                            </div>
                                        </div>
                                    </div>
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
<div class="join_us_frenchisee section">
    <div class="background_join_us"></div>
    <div class="background_smog"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="frenchice_join_us">
                <?php if ( ! empty( $join_us_now_subtitle ) ): ?>
                    <h4 class="caption_big"><?php echo esc_html( $join_us_now_subtitle ); ?></h4>
                <?php endif; ?>
                <?php if ( ! empty( $join_us_now_title ) ): ?>
                    <h2 class="title"><?php echo wp_kses_post( $join_us_now_title ); ?></h2>
                <?php endif; ?>
                <?php if ( ! empty( $join_us_now_text ) ): ?>
                    <p class="info description_opacity"><?php echo $join_us_now_text; ?></p>
                <?php endif; ?>
                <a href="#" class="our_menu_left main_btn is-animated">
                    <div class="our_menu_link clearfix">
                        <span class="our_menu_text"><?php echo _e('REGISTRATION', 'takosking') ?></span>
                        <span class="arrow"><span class="arrow_white"></span></span>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>