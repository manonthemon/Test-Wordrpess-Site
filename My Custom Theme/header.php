<!doctype html>
<html>
        <head>
            <meta charset = "utf-8">
            <title>My Test Theme</title>
            <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_nav_menu(array('theme_location'=>'primary' )); ?>