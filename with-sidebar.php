<?php
/*
Template Name: Content mit Sidebar
*/
?>
<?php
$template_root = get_template_directory_uri();
get_header();
?>

<div class="section">
    <div class="container flex-row w-container">

        <?php the_content(); ?>

        </div>

        <!-- SIDE BAR CONTAINER -->

        <div class="sidebar-container">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
