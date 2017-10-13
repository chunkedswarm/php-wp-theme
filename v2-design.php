<?php
/*
Template Name: Design V2
*/
?>
<?php

$template_root = get_template_directory_uri();
get_header();
?>
<link href="<?php echo $template_root;?>/css/webflow/strive-redesign-proposals.webflow.css" rel="stylesheet" type="text/css">

<?php the_content(); ?>

<?php wp_footer(); ?>
<script src="<?php echo $template_root; ?>/js/webflow.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</body>
</html>
