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
$recents = wp_get_recent_posts(array(
    'numberposts' => 8,
    'post_status' => 'publish'
), OBJECT);
?>
<div class="">
    <?php dynamic_sidebar('widget_top') ?>
</div>
<div class="row">
    <div class="cell-sm-12 cell-md-8 cell-lg-9 p-0">
        <div class="muuri">
        <?php foreach ($recents as $key=>$post): ?>
            <?php
                $category_img = "";
                $category = get_the_category($post->ID)[0];
            ?>
            <?php
                $image = get_background_image_header($post->post_content);
                $has_image = ($image != "") ? "featured-image " : "";
            ?>
            <div class="item cell-sm-6 cell-md-4 cell-lg-4 cell-xl-3 p-0">
                <div class="item-content">
                    <a class="post-relative card text d-block p-3 <?php echo $has_image?>" href="<?php echo get_the_permalink($post->ID);?>"
                    style="<?php echo $image;?>">
                        <span class="title pos-relative text-light fg-dark">
                            <?php echo $post->post_title; ?>
                        </span>
                        <span class="pos-relative category fg-dark">
                            <?php echo $category->name; ?><br>
                        </span>
                        <span class="pos-absolute pos-bottom-right mr-3 mb-3 category fg-dark ">
                            <span class="mif-calendar"></span>&nbsp;
                            <?php echo get_the_date("d M Y", $post->ID); ?>
                        </span>
                    </a>
                </div>
            </div>
        <?php endforeach?>
        </div>
    </div>
    <div class="cell-sm-12 cell-md-4 cell-lg-3 p-0 d-none d-block-md pos-absolute pos-top pos-relative-md" id="sidebar-right">
        <div class="card m-2 p-3">
            <?php dynamic_sidebar('sidebarright_widgets') ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>