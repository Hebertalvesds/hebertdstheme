<?php get_header(); ?>
<?php
    $class = remove_accents(wp_title("", false, ""));
?>
<div class="row pr-20-lg pl-20-lg page-<?php echo $class ?>" style="margin-left: -8px; margin-right: -8px;">
    <div class="cell-sm-12 cell-md-8 cell-lg-7 p-0">
        <div class="remark m-2 bg-white border-radius-2 text-leader">
            <?php echo category_description()?>
        </div>
        <?php if (!is_null(previous_posts_link())) : ?>
            <div class="pagination p-3 mb-0">
                <?php echo previous_posts_link() ?>
            </div>
        <?php endif; ?>
        <?php while(have_posts()) : the_post();?>
            <div class="card p-3 m-2">
                <div class="d-block-inline mb-1">
                    <?php the_tags("<span class='button mini border-radius bg-gray fg-dark text-bold border-none d-block-inline'>","","</span>"); ?>
                </div>                
                <div class="fg-gray"><?php the_date() ?></div>
                <h3 class="fg-dark font-roboto text-bold"><?php the_title() ?></h3>
                <div class="d-flex flex-row">
                    <div class="cell-fs-11 font-roboto">
                        <?php the_excerpt() ?>                        
                        <a class="button small border-radius-2 mt-2 bg-theme fg-white bg-theme-hover " href="<?php the_permalink()?>">Leia Mais</a>
                    </div>
                    <div class="cell-fs-1 d-flex flex-justify-end flex-align-end flex-column">
                        <?php if (has_images_by_post_id($post)) : ?>
                            <span class="icon ico-image pos-relative fixed-bottom"></span>
                        <?php endif ?>
                        <span class="icon ico-comment pos-relative fixed-bottom">
                            <span data-disqus-url="<?php the_permalink();?>" class="disqus-comment-count badge" style="top: 8px; right: 8px;"></span>
                        </span>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
        <div class="pagination p-3">
            <?php echo next_posts_link() ?>
        </div>
    </div>
    <div class="cell-sm-12 cell-md-4 cell-lg-5 p-0 d-none d-block-md pos-absolute pos-top pos-relative-md" id="sidebar-right">
        <div class="card m-2 p-3">
            <?php dynamic_sidebar('sidebarright_widgets') ?>
        </div>
    </div>
</div>
<?php get_footer()?>