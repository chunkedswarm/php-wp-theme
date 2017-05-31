<?php
$template_root = get_bloginfo('template_directory');
?>

<!DOCTYPE html>
<!--  Last Published: Tue May 30 2017 21:52:42 GMT+0000 (UTC)  -->
<html data-wf-page="58bf15c4383ef761786b5b37" data-wf-site="58bf15c4383ef761786b5b36" lang="de">
<head>
    <meta charset="utf-8">
    <title>Next-gen P2P Live-Streaming - 98% less traffic - Join us!</title>
    <meta content="StriveCDN is a leading P2P-based Live-Streaming provider. Based on ChunkedSwarm, the leading P2P distribution technology, StriveCDN sets new standards for OTT and Live Event Streaming!" name="description">
    <meta content="Next-gen P2P Live-Streaming - 98% less traffic - Join us!" property="og:title">
    <meta content="StriveCDN is a leading P2P-based Live-Streaming provider. Based on ChunkedSwarm, the leading P2P distribution technology, StriveCDN sets new standards for OTT and Live Event Streaming!" property="og:description">
    <meta content="summary" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo $template_root;?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/strivecdn.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]
            }
        });
    </script>
    <script src="<?php echo $template_root;?>/js/modernizr.js" type="text/javascript"></script>
    <link href="<?php echo $template_root;?>/images/Strive_Logo_Favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $template_root;?>/images/Strive_Logo_Webclip.png" rel="apple-touch-icon">
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-93977809-1', 'auto');
        ga('send', 'pageview');
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <style>
        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover {
            width: 30px;
            height: 30px;
            border-radius: 100px;
            top: 2px;
            padding-top: 3px;
            margin-top: -.8em;
            text-align: center;
            line-height: 1.6em;
            background: #08b624;
            border: 1px solid #0c9622;
            color: white;
        }
        #slider-number-of-viewers {
            margin: 10px 10px;
        }
        #slider-stream-duration {
            margin: 10px 10px;
        }
        #slider-stream-days {
            margin: 10px 10px;
        }
        #slider-p2p-ratio {
            margin: 10px 10px;
        }
    </style>
    <!--
  <style>
    @media screen and (min-width: 1400px) {
      .w-container {
        max-width: 1300px;
      }
    }
  </style>
   -->
    <?php wp_head();?>
</head>
<body class="body">
<div class="top-bar">
    <div class="top-bar-wrapper">
        <div class="no-mobile topbar-col">
            <div class="topbar-register-wrapper">
                <div class="top-bar-text">Noch kein Konto?</div><a class="button small top-bar-button w-button" href="https://app.strivecdn.com/#/signup" target="_blank">Registrieren</a>
            </div>
        </div>
        <div class="no-mobile topbar-col">
            <div class="div-block"><img class="optin-login-icon" height="16" src="<?php echo $template_root;?>/images/ligature-symbols_2-11-0_login_257_0_001b4b_none.png" width="16"><a href="https://app.strivecdn.com/#/signin" target="_blank">Jetzt einloggen</a>
            </div>
        </div>
        <div class="lang-selector">
            <div class="w-dropdown" data-delay="0">
                <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="text-block">Deutsch</div>
                    <div class="w-icon-dropdown-toggle"></div>
                </div>
                <nav class="dropdown-list w-dropdown-list"><a class="top-bar-dropdown-item w-dropdown-link" href="#">Deutsch</a><a class="top-bar-dropdown-item w-dropdown-link" id="menu-english">English</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="index-navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <div class="navbar w-container">
        <a class="brand w-nav-brand" href="index.html"><img class="index-navbar-brand-img" src="<?php echo $template_root;?>/images/Strive_Logo_v3.png">
        </a>
        <nav class="navbar-mobile w-nav-menu" role="navigation"><a class="index-navbar-link index-navbar-link-text w-nav-link" href="features.html">Produkte</a><a class="index-navbar-link index-navbar-link-text w-nav-link" href="demo.html">Preise</a><a class="index-navbar-link index-navbar-link-text w-nav-link" href="features.html">Features</a><a class="index-navbar-link index-navbar-link-text w-nav-link" href="preise.html">Partner</a><a class="index-navbar-link index-navbar-link-text w-nav-link" href="about.html">Über uns</a><a class="index-navbar-link index-navbar-link-text invisible w-nav-link" href="#">Blog</a>
        </nav>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>