<?php

/*
 * functions.php
 */

//////////////////////////////////////////////////////////////////////////////
//                 Polylang Custom String Translation
//////////////////////////////////////////////////////////////////////////////

//if ( is_plugin_active('polylang') ) {

    // Top Bar
    pll_register_string('top-bar', '%top-bar-text%', false);
    pll_register_string('top-bar', '%top-bar-register%', false);
    pll_register_string('top-bar', '%top-bar-login%', false);

    // Opt-In Register Section
    pll_register_string('optin', '%optin-headline%', false);
    pll_register_string('optin', '%optin-subline%', false);
    pll_register_string('optin', '%optin-register-cta%', false);

    // Footer
    pll_register_string('footer', '%footer-headline-product%', false);
    pll_register_string('footer', '%footer-headline-company%', false);
    pll_register_string('footer', '%footer-headline-newsletter%', false);
    // --> Footer weiter customizen
    pll_register_string('footer', '%footer-newsletter-text%', false);
    pll_register_string('footer', '%footer-newsletter-input-placeholder%', false);
    pll_register_string('footer', '%footer-newsletter-input-submit%', false);
    pll_register_string('footer', '%footer-copyright%', false);

//}


//////////////////////////////////////////////////////////////////////////////
//                 Custom Menu Registration
//////////////////////////////////////////////////////////////////////////////

function register_strivecdn_menu() {
    register_nav_menu('strivecdn-menu-de',__( 'StriveCDN Menu DE' ));
    register_nav_menu('strivecdn-menu-en',__( 'StriveCDN Menu EN' ));
}
add_action( 'init', 'register_strivecdn_menu' );

?>