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

                    <?php echo the_field('hero_image'); ?>

                    <div class="blogpost-card">
                        <a class="w-inline-block" href="#">
                            <div class="blogpost-image-container"></div>
                        </a>
                        <div class="v-space-very-small"></div>
                        <a class="w-inline-block" href="#"><h2 class="paragraph-headline"><?php the_title(); ?></h2></a>
                        <div class="blogpost-meta-wrapper">
                            <div class="blogpost-meta-item-wrapper-left">
                                <img class="blogpost-meta-icon-left"
                                     src="<?php echo $template_root;?>/images/blogpost-user.png">
                                <div>Alexander Schäfer</div>
                            </div>
                            <div class="blogpost-meta-item-wrapper-right">
                                <div>13.06.2017</div>
                                <img class="blogpost-meta-icon-right"
                                     src="<?php echo $template_root;?>/images/blogpost-time.png">
                            </div>
                        </div>
                        <div class="v-space-very-small"></div>
                        <!--<div class="w-richtext">
                            <h4>How to customize formatting for each rich text</h4>
                            <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a
                                class is added to the rich text element using the "When inside of" nested selector system.</p>
                        </div>-->
                        <?php the_content(); ?>
                        <div class="align-right"><a class="button w-button" href="#">Weiterlesen</a>
                        </div>
                    </div>

                    <!-- END POST TEMPLATE -->

                <?php endwhile;
                else : ?>


                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>


                    <!-- REALLY stop The Loop. -->
                <?php endif; ?>

            </div>

            <!-- SIDE BAR CONTAINER -->

            <div class="sidebar-container">
                <div class="w-richtext">
                    <h2>What’s a Rich Text element?</h2>
                    <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images,
                        and
                        video all in one place instead of having to add and format them individually. Just double-click
                        and
                        easily create content.</p>
                    <h4>Static and dynamic content editing</h4>
                    <p>A rich text element can be used with static or dynamic content. For static content, just drop it
                        into
                        any page and begin editing. For dynamic content, add a rich text field to any collection and
                        then
                        connect a rich text element to that field in the settings panel. Voila!</p>
                    <h4>How to customize formatting for each rich text</h4>
                    <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a
                        class is added to the rich text element using the "When inside of" nested selector system.</p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>