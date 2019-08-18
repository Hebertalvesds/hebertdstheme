<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Hebertds
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <?php wp_enqueue_style('metro', 'https://cdn.metroui.org.ua/v4/css/metro-all.min.css', false, '1.0', 'all'); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
        <script src="https://unpkg.com/web-animations-js@2.3.1/web-animations.min.js"></script>
        <?php wp_enqueue_script('muuri', get_template_directory_uri() . '/assets/js/muuri.js', '', false); ?>
        <?php wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), true); ?>
        <title>
                <?php echo bloginfo('name') ?>
        </title>
    </head>
    <body>
        <div class="container-fluid cell-sm-12 cell-md-12 cell-lg-11 cell-xl-10 cell-xxl-10">
            <?php get_template_part('template-parts/header/site', 'header') ?>
        </div>  
        <div class="container-fluid cell-sm-12 cell-md-12 cell-lg-12 cell-xxl-10 mt-15">
        