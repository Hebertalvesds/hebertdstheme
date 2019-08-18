<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Hebertds
 * @since 1.0.0
 */
?>
<nav id="navigation-left" class="navigation">
    <div class="bar" id="navigation-bar">
        <button class="menu-toggle" id="toggle">
            <i class="line"></i>
            <i class="line"></i>
            <i class="line"></i>
        </button>
        <div class="social">
            <i class="fab fa-behance"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
        </div>
    </div>
    <div class="content" id="navigation-content">
        <?php get_template_part('template-parts/header/site', 'logo') ?>
        <?php wp_nav_menu('') ?>
        <div class="col-sm-12 pos-absolute fixed-bottom">
            <div class="information right col-sm-12 fg-white">
                <p>
                    
                </p>
            </div>
        </div>
    </div>
</nav>