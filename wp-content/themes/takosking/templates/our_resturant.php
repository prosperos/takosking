<?php
/**
 * Template Name: Our Resturant
 */
get_header();
?>
<div class="maps_restorant ">
    <div class="arrow_next_block maps_restorant_image"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maps_our_restorants">
                    <h4 class="caption_big">SPECIAL INDUCTION COOKING AT TACOS KING</h4>
                    <p class="title">OUR RESTAURANTS
                        <?php echo get_facebook_page_likes('750426025300841');?></p>
                </div>
                <!--<div class="fb-page"  data-href="https://www.facebook.com/TakosKingAubervilliers/" data-tabs="timeline" data-width="" data-height="70" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TakosKingAubervilliers/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TakosKingAubervilliers/">Takos King</a></blockquote></div>-->
                <div class="followers">687 followers in</div>
                <?php echo do_shortcode('[wpsl]');  ?>
            </div>
        </div>
    </div>

</div>

<?php
get_footer();
?>