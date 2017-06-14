<?php
$template_root = get_template_directory_uri();
?>

<div class="bgcolor-mid-blue section-optin">
    <div class="container w-container">
        <h1 class="align-center color-white"><?php echo pll__('%optin-headline%'); ?></h1>
        <h2 class="align-center color-light-blue"><?php echo pll__('%optin-subline%'); ?></h2>
        <div class="v-space-small"></div>
        <div class="align-center">
            <a target="_blank" class="button w-button" href="https://app.strivecdn.com/#/signup">
                <?php echo pll__('%optin-register-cta%'); ?>
            </a>
        </div>
    </div>
</div>

<div class="footer">
    <div class="w-container">
        <div class="w-row">
            <div class="flex-vertical w-col w-col-4">
                <h4><?php echo pll__('%footer-headline-product%'); ?></h4>
                <a href="/produkt">StriveCDN DataGrid</a><a class="footer-page-link" href="/produkt">StriveCDN TrafficBoost</a><a class="footer-page-link" href="/preise">Produktvergleich</a><a class="footer-page-link" href="/preise">Traffic Calculator</a><a class="footer-page-link" href="/preise">Preise</a>
            </div>
            <div class="flex-vertical w-col w-col-4">
                <h4><?php echo pll__('%footer-headline-company%'); ?></h4>
                <a class="footer-page-link" href="/about">Über Uns</a><a class="footer-page-link" href="mailto:info@strivecdn.com?subject=Hello!">Kontakt</a><a class="footer-page-link" href="/impressum">Impressum</a>
            </div>
            <div class="flex-vertical w-col w-col-4">
                <?php
                // Show opt-in form depending on current language
                $polylang_language = pll_current_language('slug');
                ?>
                <?php if ($polylang_language === 'de'): ?>
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background-color:transparent; clear:left; }
                        form {padding: 0px;}
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                        <form action="//strivecdn.us15.list-manage.com/subscribe/post?u=02ed6a6e43772f62f20d35008&amp;id=a9f47a9457" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <h4>Subscribe to our mailing list</h4>
                                <!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
                                <div class="mc-field-group">
                                    <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                    </label> -->
                                    <input type="email" value="" name="EMAIL" class="required email input-text w-input" id="mce-EMAIL" placeholder="Emailadresse...">
                                </div>
                                <div class="mc-field-group">
                                    <!-- <label for="mce-FNAME">First Name </label> -->
                                    <input type="text" value="" name="FNAME" class="input-text w-input" id="mce-FNAME" placeholder="Vorname...">
                                </div>
                                <div class="mc-field-group">
                                    <!-- <label for="mce-LNAME">Last Name </label> -->
                                    <input type="text" value="" name="LNAME" class="input-text w-input" id="mce-LNAME" placeholder="Nachname...">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_02ed6a6e43772f62f20d35008_a9f47a9457" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Jetzt eintragen!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->
                <?php endif; ?>
            </div>
        </div>
        <div>
            <div class="align-center color-light-grey"><?php echo pll__('%footer-copyright%'); ?></div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo $template_root;?>/js/webflow.js" type="text/javascript"></script>
</body>
</html>
