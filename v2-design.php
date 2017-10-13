<?php
/*
Template Name: Design V2
*/
?>
<?php
$template_root = get_template_directory_uri();
?>

<!DOCTYPE html>
<!--  Last Published: Tue Jun 13 2017 12:02:09 GMT+0000 (UTC)  -->
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title><?php wp_title(); ?></title>
    <!-- Load favicon and webclip -->
    <link href="<?php echo $template_root;?>/images/Strive_Logo_Favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $template_root;?>/images/Strive_Logo_Webclip.png" rel="apple-touch-icon">

    <!-- Load CSS files -->
    <link href="<?php echo $template_root;?>/css/webflow/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/webflow/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/webflow/strive-redesign-proposals.webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/custom_css.css" rel="stylesheet" type="text/css">

    <!-- Load Webfont -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]
            }
        });
    </script>

    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    <!-- Start of HubSpot Embed Code -->
    <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3385585.js"></script> -->
    <!-- End of HubSpot Embed Code -->

    <!-- Load wordpress head -->
    <?php wp_head(); ?>

</head>

<body class="body">

<?php the_content(); ?>

<?php wp_footer(); ?>
<script src="<?php echo $template_root; ?>/js/webflow.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</body>
</html>
