<?php
/*
Template Name: Blog Posts
*/
?>
<?php
$template_root = get_template_directory_uri();
get_header();
?>

<div class="section">
    <div class="container flex-row w-container">

        <!-- BLOG POST CONTAINER -->

        <div class="blog-container">

            <h1 class="section-title"><?php the_title(); ?></h1>
            <div class="blogpost-meta-wrapper">
                <div class="blogpost-meta-item-wrapper-left">
                    <img class="blogpost-meta-icon-left"
                         src="<?php echo $template_root; ?>/images/blogpost-user.png">
                    <div><?php the_author(); ?></div>
                </div>
                <div class="blogpost-meta-item-wrapper-right">
                    <div><?php the_date(); ?></div>
                    <img class="blogpost-meta-icon-right"
                         src="<?php echo $template_root; ?>/images/blogpost-time.png">
                </div>
            </div>
            <div class="v-space-small"></div>
            <div class="blogpost-image-container single" style="background-image: url(<?php the_field('hero_image'); ?>);"></div>
            <div class="v-space-small"></div>
            <div class="sub-headline"><strong><?php the_field('sub_headline'); ?></strong></div>

            <?php the_content(); ?>

        </div>

        <!-- SIDE BAR CONTAINER -->

        <div class="sidebar-container">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
