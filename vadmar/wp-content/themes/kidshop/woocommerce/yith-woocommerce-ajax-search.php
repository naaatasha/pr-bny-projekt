<?php
/**
 * YITH WooCommerce Ajax Search template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Ajax Search
 * @version 1.0.0
 */

if ( !defined( 'YITH_WCAS' ) ) { exit; } // Exit if accessed directly


wp_enqueue_script( 'yith_wcas_jquery-autocomplete' );
wp_enqueue_script( 'yith_wcas_frontend' );

?>

<div class="yith-ajaxsearchform-container widget widget_search_mini">

    <form role="search" method="get" id="yith-ajaxsearchform" action="<?php echo esc_url( home_url( '/'  ) ) ?>"  class="search_mini">
        <div class="input-search-container search-navigation">
            <input type="search"
                   value="<?php echo get_search_query() ?>"
                   name="s"
                   id="search_mini"
                   class="yith-s"
                   placeholder="<?php echo get_option( 'yith_wcas_search_input_label' ) ?>"
                   data-append-to=".search-navigation"
                   data-loader-icon="<?php echo str_replace( '"', '', apply_filters( 'yith_wcas_ajax_search_icon', '' ) ) ?>"
                   data-min-chars="<?php echo get_option( 'yith_wcas_min_chars' ); ?>" />

            <input type="submit" id="mini-search-submit" value="" />
        </div>
        <div class="other-options-container">
            <?php
            if ( get_option( 'yith_wcas_show_search_list' ) == 'yes' ):

                $selected_search = ( isset( $_REQUEST['post_type'] ) ) ? $_REQUEST['post_type'] : ''; ?>

                <select class="yit_wcas_post_type selectbox" id="yit_wcas_post_type" name="post_type">
                    <option value="product" <?php selected( 'product', $selected_search ) ?>><?php _e( 'Products', 'yit' ) ?></option>
                    <option value="any" <?php selected( 'any', $selected_search ) ?>><?php _e( 'All', 'yit' ) ?></option>
                </select>

            <?php else: ?>
                <input type="hidden" name="post_type" class="yit_wcas_post_type" id="yit_wcas_post_type" value="product" />
            <?php endif; ?>

            <?php
            if ( get_option( 'yith_wcas_show_category_list' ) == 'yes' ):

                $product_categories = yith_wcas_get_shop_categories( get_option( 'yith_wcas_show_category_list_all' ) == 'all' );

                $selected_category = ( isset( $_REQUEST['product_cat'] ) ) ? $_REQUEST['product_cat'] : '';

                if ( !empty( $product_categories ) ) : ?>
                    <select class="search_categories selectbox" id="search_categories" name="product_cat">
                        <option value="" <?php selected( '', $selected_category ) ?>><?php _e( 'All', 'yit' ) ?></option>
                        <?php foreach ( $product_categories as $cat ): ?>
                            <option value="<?php echo $cat->slug ?>" <?php selected( $cat->slug, $selected_category ) ?>><?php echo $cat->name ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endif ?>

            <?php endif ?>
        </div>
    </form>

</div>
