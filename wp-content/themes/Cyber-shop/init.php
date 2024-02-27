<?php

require_once("settings.php");

//This create the Menus tab in WP
function baseTheme_init()
{
    $menu = array();
    register_nav_menus($menu);
}

add_action('after_setup_theme', 'baseTheme_init');