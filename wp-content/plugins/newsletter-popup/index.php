<?php 
/*
* Plugin Name: Newsletter popup plugin
* Plugin URI: https://yukihigashidani.dk/storyscaping/
* Description: This is a Newsletter popup Plugin based on HTML5, CSS, JS and PHP
* Version: 0.0.1
* Author: Yuki Higashidani & Mette Ann Hansen
* Author: https://yukihigashidani.dk/storyscaping/
* License: GPL2
*/

#Indholdet for newsletter popup form
function newsletter_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">TILMELD DIG VORES NYHEDSBREV</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Tilmeld dig Kogles nyhedsbrev og få 10% på dit første køb. Modtag desuden inspiration til din egen bæredygtige hverdag!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Din emailadresse" name="email" required>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="TILMELD">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #Første parameter er et unikt navn for short-code for newsletter popup form. Den anden parameter er navnet på funktionen - newsletter_popup_form
    add_shortcode('show_popup_newsletter','newsletter_form');

    #Action udfører wp_enqueue_scripts med funktionen register_styles_and_scripts_for_responsive_discount_popup_plugin, så det kan aktiveres
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

#Linker stylesheets og script filer
    function register_styles_and_scripts_for_plugin() 
    {

        
        wp_enqueue_style('CustomStylesheet', plugins_url('newsletter-popup/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('newsletter-popup/js/script.js'), array('jquery'), null, true);
    }
?>