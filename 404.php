<?php
/*
Template Name: 404 - Nicht gefunden
*/
?>
<?php get_header(); ?>
    <div>
        <div class="_404-container w-container"><img class="_404-image"
                                                     src="<?php echo get_template_directory_uri();?>/images/not-found.png">
            <h1 class="_404-h1">Seite nicht gefunden</h1>
            <div>Die angeforderte Ressource wurde leider nicht gefunden.</div>
        </div>
    </div>
<?php get_footer(); ?>