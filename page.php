<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hebertds
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<?php get_template_part('template-parts/navigation/navigation', 'left') ?>
<div class="panel">
    <div class="col-sm-12">
        <?php
            while(have_posts()) {
                the_post();
                the_content();
            }
        ?>
    </div>
</div>
<?php get_footer(); ?>