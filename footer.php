<?php
$template_root = get_template_directory_uri();
?>

<div class="bgcolor-mid-blue section-optin">
    <div class="container w-container">
        <h1 class="align-center color-white"><?php echo pll__('optin-headline'); ?></h1>
        <h2 class="align-center color-light-blue">Starten Sie Ihren ersten Stream in weniger als 5 Minuten!</h2>
        <div>
            <form action="https://app.strivecdn.com/#/signup" class="optin-register-wrapper>
                <input class="input-text w-input" data-name="email" id="email-5" maxlength="256" name="email" placeholder="Emailadresse" required="required" type="email">
                <div class="optin-button-wrapper">
                    <input class="button w-button" type="submit" value="Jetzt registrieren!">
                    <div class="optin-login-wrapper">
                        <div class="color-white-blue">Bereits registriert?</div>
                        <div class="topbar-login-wrapper">
                            <img
                                    class="optin-login-icon"
                                    height="16"
                                    src="<?php echo $template_root;?>/images/ligature-symbols_2-11-0_login_256_0_ffffff_none.png"
                                    width="16"><a class="color-white-blue optin-login-link" href="https://app.strivecdn.com/#/signin" target="_blank">Jetzt einloggen</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <div class="w-container">
        <div class="w-row">
            <div class="flex-vertical w-col w-col-4">
                <h4>Produkte</h4><a href="/produkt">StriveCDN DataGrid</a><a class="footer-page-link" href="/produkt">StriveCDN TrafficBoost</a><a class="footer-page-link" href="/preise">Produktvergleich</a><a class="footer-page-link" href="/preise">Traffic Calculator</a><a class="footer-page-link" href="/preise">Preise</a>
            </div>
            <div class="flex-vertical w-col w-col-4">
                <h4>Unternehmen</h4><a class="footer-page-link" href="/about">Über Uns</a><a class="footer-page-link" href="mailto:info@strivecdn.com?subject=Hello!">Kontakt</a><a class="footer-page-link" href="/impressum">Impressum</a>
            </div>
            <div class="flex-vertical w-col w-col-4">
                <h4>Newsletter</h4>
                <div>Jetzt anmelden und immer die neuesten Informationen vom StriveCDN Team erhalten!</div>
                <div class="v-space-small"></div>
                <div>
                    <form class="footer-newsletter-form" redirect="/redirect/newsletter">
                        <input class="input-text w-input" data-name="Email 4" id="email-4" maxlength="256" name="email" placeholder="Emailadresse..." required="required" type="email">
                        <div class="v-space-very-small"></div>
                        <input class="button button-full-width w-button" type="submit" value="Jetzt anmelden!">
                    </form>
                </div>
            </div>
        </div>
        <div>
            <div class="align-center color-light-grey">© 2017 Strive Media GmbH - Alle Rechte vorbehalten</div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $template_root;?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php wp_footer(); ?>
</body>
</html>