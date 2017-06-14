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
            <?php the_field('sub_headline'); ?>
            <?php the_content(); ?>

        </div>

        <!-- SIDE BAR CONTAINER -->

        <div class="sidebar-container">
            <?php ?>
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