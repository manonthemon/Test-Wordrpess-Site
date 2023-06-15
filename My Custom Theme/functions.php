<?php

function myTestTheme_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/mytesttheme.css', array(), '1.0.0', 'all');
}
wp_dequeue_script('customjs', get_template_directory_uri(), '/js/mytesttheme.js', array(), '1.0.0', true);

add_action('wp_enqueue_scripts(  )', 'myTestTheme_script_enqueue');