<?php get_header(); ?>
<?php 
$args = array('tag'=> substr($wp->request,4),
              'showpostss'=>32);

?>
<?php query_posts($args) ?>
<div class="row pr-20-lg pl-20-lg" style="margin-left: -8px; margin-right: -8px;">
    <div class="cell-sm-12 cell-md-12 cell-lg-12 p-0">
        <div class="m-2 text-leader">
            <h3 class="display3 d-block"><?php wp_title("")?></h3>
        </div>
        <?php if (!is_null(previous_posts_link())) : ?>
            <div class="pagination p-3 mb-0">
                <?php echo previous_posts_link() ?>
            </div>
        <?php endif; ?>
        <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="breadcrumbs m-2 p-3 border-radius-2">','</p>' );
        }       
        ?>
        <div class="muuri">
            <?php while(have_posts()) : the_post();?>
                <div class="item cell-fs-6 cell-sm-6 cell-md-4 cell-lg-4 cell-xl-3 p-0">
                    <a class="border-radius-2 border-solid bg-theme item-content d-block p-3 m-2" href="<?php the_permalink()?>">
                        <div class="fg-gray text-small"><?php the_date() ?></div>
                        <span class="text-bold fg-white"><?php the_title()?></span>
                        <div class="d-flex flex-row">
                            <?php if (has_images_by_post_id($post)) : ?>
                            <div class="cell-fs-1 d-flex flex-justify-end flex-align-end flex-column">
                                <span class="icon ico-image pos-relative fixed-bottom"></span>
                            </div>
                            <?php endif ?>
                            <div class="cell-fs-1 d-flex flex-justify-end flex-align-end flex-column">
                                <span class="icon ico-comment pos-relative fixed-bottom">
                                    <span data-disqus-url="<?php the_permalink();?>" class="disqus-comment-count badge" style="top: 8px; right: 8px;"></span>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;?>
        </div>
        <div class="pagination p-3">
            <?php echo next_posts_link() ?>
        </div>
    </div>
</div>
<?php get_footer()?>