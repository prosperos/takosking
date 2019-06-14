<?php
/**
 * Template Name: Constructor
 */
get_header();

$constructor_sub_title = get_field('constructor_sub_title');
$constructor_title = get_field('constructor_title');
?>
<?php
global $woocommerce;
$args = array(
    'number'     => 0,
    'orderby'    => 'title',
    'order'      => 'DESC',
    'hide_empty' => 1,
    'include'    => '',
    'relation' => 'AND',
    array(
        'terms' => array('cheese-crust','big-takos-double-dose','standart-takos','students-menu'),
    )
);
$product_categories_js = get_terms( 'product_cat', $args );
$count = count($product_categories_js);
if ( $count > 0 ){
    $ingredient_categories = [];
    $ingredients = [];
    $products_js = [];
    foreach ( $product_categories_js as $product_category ) {
        if ($product_category->term_id == 24 || $product_category->term_id == 25 || $product_category->term_id == 26 || $product_category->term_id == 27 || $product_category->term_id == 32) {

            $type = get_term_meta($product_category->term_id, 'type', true);
            $max_amount_from_product_property = get_term_meta($product_category->term_id, 'max_amount_from_product_property', true);
            $max_amount_from_product_property = get_field('max_amount_from_product_property');

            $ingredient_categories[] = [['name' => $product_category->name, 'id' => $product_category->term_id , 'type' => $type, 'max_amount_from_product_property'  => $max_amount_from_product_property],];
            $args = array(
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $product_category->slug,
                        'order' => 'DESC',
                    )
                ),
                'post_type' => 'product',
                'order' => 'DESC',
            );
            $products = new WP_Query($args);
            while ( $products->have_posts() ) {
                $products->the_post();
                $id = get_the_ID();
                $ingredients = ['id' => $id ,'ingridient_category_id' => $product_category->term_id, 'name' => get_the_title(), 'images' => get_the_post_thumbnail_url($products->ID, 'full')];
            }

        }
        if ($product_category->term_id == 31 || $product_category->term_id == 30 || $product_category->term_id == 29 || $product_category->term_id == 33) {
            $args2 = array(
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $product_category->slug,
                        'order' => 'DESC',
                    )
                ),
                'post_type' => 'product',
                'order' => 'DESC',
            );
            $products_product = new WP_Query($args2);
            while ( $products_product->have_posts() ) {
                $products_product->the_post();
                $id = get_the_ID();
                $amount_meat = get_field('amount_meat');
                $products_js[] = ['id' => $id , 'max_meats_amount' => $amount_meat ];

            }
        }
        //var_dump($products_js,3333);
    }
    var_dump($ingredient_categories);

}

if ( $count > 0 ){
    echo '<ol>';
    foreach ( $product_categories as $product_category ) {
        if ($product_category->term_id == 24 || $product_category->term_id == 25 || $product_category->term_id == 26 || $product_category->term_id == 27 || $product_category->term_id == 32) {
            echo '<li><span>' . $product_category->name . '</span>';
            $args = array(
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $product_category->slug,
                        'order' => 'DESC',
                    )
                ),
                'post_type' => 'product',
                'order' => 'DESC',
            );
            $products = new WP_Query($args);
            echo "<ul  class='wpapper_ingridients'>";
            while ( $products->have_posts() ) {
                $products->the_post();
                $id = get_the_ID(); ?>
                <li class="products ingridients_item" data-price="" data-ingridient-id="<?php echo $id ?>" >
                    <div class="success_img" style="background-image: url(<?php echo get_the_post_thumbnail_url($products->ID, 'full'); ?>)"></div>
                    <div class="select_product">
                        <span class="takos_title"> <?php the_title(); ?></span>
                        <div class="add_ingridient">+</div>
                        <div class="increment_ingridient">+</div>
                        <div class="decrement_ingridient">-</div>
                        <div class="remove_ingridient">X</div>
                        <div class="ingridients_amount">0</div>
                    </div>
                    <div class="content_wpapper">
                        <?php the_content(); ?>
                    </div>
                </li>
                <?php
            }
            echo "</ul></li>";
        }
    }
    echo '</ol>';
}
?>



<script>
    window.constructor_data = {
        ingredient_categories: [{
            <?php echo json_encode($ingredient_categories); ?>
        }],
        ingredients: [<?php echo json_encode($ingredients); ?>],
        products: [<?php echo json_encode($products_js); ?>]
    }


    //window.constructor_data = {
    //    ingredient_categories: [
    //        {name: '<?php //echo $product_category->name ?>//', id: <?php //echo $id;?>//, type: 'checkbox', max_amount_from_product_property: <?php //echo $max_amount_from_product_property?>//},
    //        {name: 'Sauces', id: 2, type: 'radio'},
    //        {name: 'Extras', id: 3, type: 'checkbox'},
    //        {name: 'Cheese crust', id: 4, type: 'checkbox'}
    //    ],
    //    ingredients: [{id: 1, ingridient_category_id: 1, name: 'MINCED MEAT'}],
    //    products: [{id: 1, max_meats_amount: 3}]
    //}
</script>
<a class="arrow_next_block is-animated" href="#"><span></span></a>
<div class="takos_constructor" id="rootwizard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="header_block_constructor">
                    <?php if ( ! empty( $constructor_sub_title ) ):?>
                        <p class="caption_big"><?php echo wp_kses_post( $constructor_sub_title ); ?></p>
                    <?php endif; ?>
                    <?php if ( ! empty( $constructor_title ) ):?>
                        <p class="title" ><?php echo  $constructor_title ; ?></p>
                    <?php endif; ?>
                    <div>
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container">
                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                        <li><a href="#tab1" data-toggle="tab">STEP 1:<span> SIZE</span><span class="arrow"></span></a></li>
                                        <li><a href="#tab2" data-toggle="tab">STEP 2:<span> INGRIDIENTS</span><span class="arrow"></span></a></li>
                                        <li><a href="#tab3" data-toggle="tab">STEP 3:<span> ORDER DETAILS</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="constructor_desc">
                    <div class="pizza"></div>
                </div>
            </div>
            <div class="col-3">
                <div class="tab-content">
                    <div class="ingridients tab-pane" id="tab1">
                         <h3><?php echo _e('CHOOSE TACOS', 'takosking')?></h3>
                        <?php global $woocommerce;
                            $args = array(
                                'number'     => 0,
                                'orderby'    => 'title',
                                'order'      => 'DESC',
                                'hide_empty' => 1,
                                'include'    => '',
                                'relation' => 'AND',
                                array(
                                    'terms' => array('cheese-crust','big-takos-double-dose','standart-takos','students-menu'),
                                )
                            );
                            $product_categories = get_terms( 'product_cat', $args );
                            $count = count($product_categories);
                            if ( $count > 0 ){
                                echo '<ul>';
                                foreach ( $product_categories as $product_category ) {
                                    if ($product_category->term_id == 31 || $product_category->term_id == 30 || $product_category->term_id == 29 || $product_category->term_id == 33) {
                                        echo '<li>' . $product_category->name ;
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            'relation' => 'AND',
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => $product_category->slug,
                                            )
                                        ),
                                        'post_type' => 'product',
                                        'order' => 'ASC',
                                        'orderby'  => [ 'meta_value_num'=>'DESC' ],
                                    );
                                    $products = new WP_Query($args);
                                    echo "<ul  class=\"wpapper_products\">";
                                    while ( $products->have_posts() ) {
                                        $products->the_post();
                                        $amount_meat = get_field('amount_meat');
                                        $id = get_the_ID();
                                        $price = get_post_meta(get_the_ID(), '_price', true); ?>
                                            <li class="products product_item" data-product-id="<?php echo $id;?>" data-max-ingrients-amount="<?php if (!empty($amount_meat)) echo $amount_meat;?>" data-price="<?php echo substr(strip_tags(wc_price($price)),6)?>">
                                                <img src="<?php echo get_the_post_thumbnail_url($products->ID, 'full'); ?>" class="takos_img" alt="">
                                                <div class="select_product">
                                                    <div class="wrapper_price">
                                                        <span class="takos_title"><?php the_title();?></span>
                                                        <div class="price"><?php echo wc_price( $price );?></div>
                                                    </div>
                                                    <div class="content_wpapper">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                                <span class="choose_product_button" ><?php echo wc_price( $price ); ?></span>
                                            </li>
                                        <?php }
                                        echo "</ul></li>";
                                    }
                                }
                                echo '</ul>';
                            }
                         ?>
                        <div class="total_price_fixed">
                            <span class="total_price">
                            <?php global $woocommerce;
                            echo _e('<span class="full_price">FULL PRICE: </span>', 'takosking'). '<span class="total">' . $woocommerce->cart->total .'</span>'. '&euro;'; ?>
                            </span>
                            <ul class="pager wizard next-step">
                                <li class="next disabled">
                                    <a href="#" class="our_menu_left main_btn is-animated next-step">
                                        <div class="our_menu_link clearfix">
                                            <span class="our_menu_text"><?php echo _e('CHOOSE INGREDIENTS', 'takosking') ?></span>
                                            <span class="arrow"><span class="arrow_white"></span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ingridients2 tab-pane" id="tab2">
                        <h3 ><?php echo _e('CHOOSE INGRIDIENTS', 'takosking')?> </h3>

                        <ul class="pager wizard back_btn_black">
                            <li class="previous">
                                <a href="#" class="our_menu_left main_btn is-animated">
                                    <div class="our_menu_link clearfix">
                                        <span class="arrow"><span class="arrow_white"></span></span>
                                        <span class="our_menu_text"><?php echo _e('BACK', 'takosking') ?></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <?php
                            $args = array(
                                'number'     => 0,
                                'orderby'    => 'title',
                                'order'      => 'DESC',
                                'hide_empty' => 1,
                                'include'    => '',
                                'relation' => 'AND',
                                array(
                                    'terms' => array('cheese-crust','big-takos-double-dose','standart-takos','students-menu'),
                                )
                            );
                            $product_categories = get_terms( 'product_cat', $args );
                            $count = count($product_categories);
                            if ( $count > 0 ){
                                echo '<ol>';
                                foreach ( $product_categories as $product_category ) {
                                    if ($product_category->term_id == 24 || $product_category->term_id == 25 || $product_category->term_id == 26 || $product_category->term_id == 27 || $product_category->term_id == 32) {
                                        echo '<li><span>' . $product_category->name . '</span>';
                                        $args = array(
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field' => 'slug',
                                                    'terms' => $product_category->slug,
                                                    'order' => 'DESC',
                                                )
                                            ),
                                            'post_type' => 'product',
                                            'order' => 'DESC',
                                        );
                                        $products = new WP_Query($args);
                                        echo "<ul  class='wpapper_ingridients'>";
                                        while ( $products->have_posts() ) {
                                            $products->the_post();
                                            $id = get_the_ID(); ?>
                                            <li class="products ingridients_item" data-price="" data-ingridient-id="<?php echo $id ?>" >
                                                <div class="success_img" style="background-image: url(<?php echo get_the_post_thumbnail_url($products->ID, 'full'); ?>)"></div>
                                                <div class="select_product">
                                                    <span class="takos_title"> <?php the_title(); ?></span>
                                                    <div class="add_ingridient">+</div>
                                                    <div class="increment_ingridient">+</div>
                                                    <div class="decrement_ingridient">-</div>
                                                    <div class="remove_ingridient">X</div>
                                                    <div class="ingridients_amount">0</div>
                                                </div>
                                                <div class="content_wpapper">
                                                    <?php the_content(); ?>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        echo "</ul></li>";
                                    }
                                }
                                echo '</ol>';
                            }
                        ?>
                        <div class="total_price_fixed">
                        <span class="total_price">
                        <?php global $woocommerce;
                        echo _e('<span class="full_price">FULL PRICE: </span>', 'takosking'). '<span class="total">' . $woocommerce->cart->total .'</span>'. '&euro;'; ?>
                        </span>
                            <ul class="pager wizard">
                                <li class="next">
                                    <a href="#" class="our_menu_left main_btn is-animated">
                                        <div class="our_menu_link clearfix">
                                            <span class="our_menu_text"><?php echo _e('PLACE AN ORDER', 'takosking') ?></span>
                                            <span class="arrow"><span class="arrow_white"></span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="pager wizard">
                            <li class="previous"><a style="color: white" href="#">Previous</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <div class="ingridients3 tab-pane" id="tab3">
                        <h3 ><?php echo _e('CHOOSE INGRIDIENTS', 'takosking')?> </h3>
                        <div class="cart-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
wp_footer();
?>
