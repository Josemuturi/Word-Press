<?php
/**
 * Hello Elementor Child Theme Functions
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue child theme styles
 */
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_uri(),
        [ 'hello-elementor-style' ],
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );

/**
 * Enqueue Google Fonts — DM Sans and Inter
 */
function hello_elementor_child_google_fonts() {
    wp_enqueue_style(
        'hello-elementor-child-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_google_fonts' );

/**
 * Fix WPForms email From address to use a verified domain sender
 * Prevents SMTP rejection when the From email doesn't match hosting domain.
 *
 * @param array $email WPForms email notification arguments.
 * @return array
 */
function hello_elementor_child_fix_wpforms_from_email( $email ) {
    if ( isset( $email['from_address'] ) ) {
        $email['from_address'] = get_bloginfo( 'admin_email' );
        $email['from_name']    = get_bloginfo( 'name' );
    }
    return $email;
}
add_filter( 'wpforms_emails_send_email_data', 'hello_elementor_child_fix_wpforms_from_email' );

/**
 * Remove query strings from static resources for cleaner URLs.
 * (Debug/development helper removed — clean production version only)
 */
function hello_elementor_child_remove_query_strings( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
// Disabled in production — enable only for local debugging
// add_filter( 'style_loader_src', 'hello_elementor_child_remove_query_strings', 10, 2 );
// add_filter( 'script_loader_src', 'hello_elementor_child_remove_query_strings', 10, 2 );
