<?php

require_once("settings.php");

//To enqueue the styles for the theme
function baseTheme_enqueue()
{
    $theme_directory = get_template_directory_uri();
    wp_enqueue_style("myStyle", $theme_directory . "/style.css");
    wp_enqueue_script("app", $theme_directory . "/app.js");

   
    wp_localize_script("app", "myVariables", "");
}

add_action('wp_enqueue_scripts', 'baseTheme_enqueue');

//This create the Menus tab in WP
function baseTheme_init()
{
    $menu = array();
    register_nav_menus($menu);
}

add_action('after_setup_theme', 'baseTheme_init');

