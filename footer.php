<?php
$template_root = get_template_directory_uri();
?>

<div class="bgcolor-mid-blue section-optin">
    <div class="container w-container">
        <?php
        // Show opt-in form depending on current language
        $lang = pll_current_language('slug');

        if ( $lang === 'de') {
            echo "<div class='mailmunch-forms-widget-508824'></div>";
        }
        // TODO: add more languages
        ?>
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
                $lang = pll_current_language('slug');

                if ( $lang === 'de') {
                    echo "<div class='mailmunch-forms-widget-508824'></div>";
                }
                // TODO: add more languages
                ?>
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