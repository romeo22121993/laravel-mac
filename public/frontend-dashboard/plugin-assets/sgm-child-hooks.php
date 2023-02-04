<?php

/**
 * Sigma Pay Hooks (Child)
 */

/**
 * Filter
 * Extend search to find pages
 * @return
 */
function filter_search( $query ) {
    if ( $query->is_search && !is_admin() ) {
        $query->set( 'post_type', array( 'post', 'page', 'product' ) );
    }
    return $query;
}

add_filter( 'pre_get_posts', 'filter_search' );

/**
 * Redirect to my-account if is not user logged in
 */
function sgm_nonlogged_users_redirect() {
    $account_page_id = get_option( 'woocommerce_myaccount_page_id' );
    if ( !is_page( $account_page_id ) && !is_user_logged_in() ) {
        wp_redirect( get_permalink( $account_page_id ) );
        die;
    }
}

add_action( 'template_redirect', 'sgm_nonlogged_users_redirect' );
