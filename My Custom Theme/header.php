<!doctype html>
<html>
        <head>
            <meta charset = "utf-8">
            <title>My Test Theme</title>
            <?php wp_head(); ?>
</head>

<?php 
if( is_front_page()):
    $my_classes = array('my-class-1' , 'my-other-class');
else:
    $my_classes = array('not-my-class' );
endif;
?>

<body <?php body_class($my_classes ); ?>>

<?php wp_nav_menu(array('theme_location'=>'primary' )); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?> "width="<?php echo get_custom_header()->width; ?>" alt="" />