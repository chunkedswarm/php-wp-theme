<?php
$template_root = get_template_directory_uri();
?>

<div class="bgcolor-mid-blue section-optin">
    <div class="container w-container">
        <h1 class="align-center color-white"><?php echo pll__('%optin-headline%'); ?></h1>
        <h2 class="align-center color-light-blue"><?php echo pll__('%optin-subline%'); ?></h2>
        <div>
            <form action="https://app.strivecdn.com/#/signup" class="optin-register-wrapper>
                <input class="input-text w-input" data-name="email" id="email-5" maxlength="256" name="email" placeholder="Emailadresse" required="required" type="email">
                <div class="optin-button-wrapper">
                    <input class="button w-button" type="submit" value="<?php echo pll__('%optin-register-cta%'); ?>">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <div class="w-container">
        <div class='mailmunch-forms-widget-508868'></div>
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
                <h4><?php echo pll__('%footer-headline-newsletter%'); ?></h4>
                <div><?php echo pll__('%footer-newsletter-text%'); ?></div>
                <div class="v-space-small"></div>
                <div>
                    <form class="footer-newsletter-form" redirect="/redirect/newsletter">
                        <input class="input-text w-input" maxlength="256" name="email" placeholder="<?php echo pll__('%footer-newsletter-input-placeholder%'); ?>" required="required" type="email">
                        <div class="v-space-very-small"></div>
                        <input class="button button-full-width w-button" type="submit" value="<?php echo pll__('%footer-newsletter-input-submit%'); ?>">
                    </form>
                </div>
            </div>
        </div>
        <div>
            <div class="align-center color-light-grey"><?php echo pll__('%footer-copyright%'); ?></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $template_root;?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php wp_footer(); ?>
</body>
</html>