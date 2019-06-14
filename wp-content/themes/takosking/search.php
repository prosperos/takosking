<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package takosking
 */

get_header();
?>

    <form role="search" method="get" class="input-group" action="<?php echo home_url( '/' ) ?>" >
        <input type="text" class="form-control" value="<?php echo get_search_query() ?>" name="s" id="s" />
        <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

<?php
get_footer();
