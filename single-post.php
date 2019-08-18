<?php
$hasImgHeader = has_image_header($post);
if ($hasImgHeader) {
    header_post_image_css();   
}
get_header(); ?>
<div class="container-fluid p-0 m-0 d-flex flex-justify-center flex-align-center flex-column">
    <div class="cell-sm-10 p-5 p-20-lg bg-white wp_single_post pos-relative">
        <span class="fg-gray">
            <?php echo  get_the_date(null, $post)?>
        </span>
        <h2>
            <?php echo ($hasImgHeader) ? "" : the_title(); ?>
        </h2>
        <div class="post-content">
            <?php echo $post->post_content; ?>
        </div>
        <div class="pos-relative mt-20">
            <div class="pos-absolute pos-bottom-left">
                <?php next_post_link('%link','<span class="mif-chevron-left button large bg-theme fg-white bg-theme-hover rounded"></span>', true) ?>
            </div>
            <div class="pos-absolute pos-bottom-right">
                <?php previous_post_link('%link','<span class="mif-chevron-right button large bg-theme fg-white bg-theme-hover rounded"></span>', true) ?>
            </div>
        </div>
        <hr class="m-5">
        <?php comments_template();?>
    </div>
</div>
<?php get_footer(); ?>