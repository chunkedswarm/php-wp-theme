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
            <h1 class="section-title">StriveCDN Blog</h1>

            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- POST TEMPLATE -->

                <div class="blogpost-card">

                    <a class="w-inline-block" href="<?php echo get_permalink(); ?>">
                        <div class="blogpost-image-container" style="background-image: url(<?php the_field('hero_image'); ?>); height: 20em;"></div>
                    </a>

                    <a class="w-inline-block" href="<?php echo get_permalink(); ?>">
                        <h2 class="paragraph-headline"><?php the_title(); ?></h2>
                    </a>

                    <div class="v-space-very-small"></div>

                    <div class="justify-text"><?php the_field('sub_headline'); ?></div>

                    <div class="align-right">
                        <a class="button w-button" href="<?php echo get_permalink(); ?>">Read more</a>
                    </div>

                    <div class="v-space-very-small"></div>

                    <div class="blogpost-meta-wrapper">
                        <div class="blogpost-meta-item-wrapper-left">
                            <img class="blogpost-meta-icon-left"
                                 src="<?php echo $template_root;?>/images/blogpost-user.png">
                            <div><?php the_author(); ?></div>
                        </div>
                        <div class="blogpost-meta-item-wrapper-right">
                            <div><?php the_date(); ?></div>
                            <img class="blogpost-meta-icon-right"
                                 src="<?php echo $template_root;?>/images/blogpost-time.png">
                        </div>
                    </div>
                </div>

                <!-- END POST TEMPLATE -->

            <?php endwhile;
            else : ?>


                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e(''); ?></p>


                <!-- REALLY stop The Loop. -->
            <?php endif; ?>

        </div>

        <!-- SIDE BAR CONTAINER -->

        <div class="sidebar-container">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
