<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Atrello
 * @since 1.0.0
 */
?>
<div class="app-header pl-4 pr-4">
    <a class="brand text-bold" href="<?php get_site_url() ?>">
        <?php bloginfo('name') ?>
    </a>
    <div class="app-commands">
        <?php
            get_template_part('template-parts/navigation/navigation', 'top');
        ?>
    </div>
</div>