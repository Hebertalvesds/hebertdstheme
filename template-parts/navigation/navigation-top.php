<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Hebertds
 * @since 1.0.0
 */
?>
<nav class="menu-container">
    <button type="button" class="menu-toggle">
        <span class="mif-apps mif-4x border-radius-2"></span>
    </button>
    <?php
        wp_nav_menu(array('menu'=>'menu-principal','menu_class'=>'app-menu shadow-1 bg-white border-radius-2 bd-theme'));
    ?>
    
    <button type="button" class="command-toggle pos-absolute put-right d-block d-none-md"
            data-target="#sidebar-right" style="top: 0;">
        <span class="mif-chevron-right mif-4x border-radius-2"></span>
    </button>
    
</nav>