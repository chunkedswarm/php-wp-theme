<?php
$template_root = get_bloginfo('template_directory');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $template_root;?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(document).ready(
        function() {
            $("#slider-number-of-viewers").slider({
                min: 0,
                max: values_viewers.length - 1,
                step: 1,
                value: 14,
                create: function() {
                    $("#label-number-of-viewers").text(values_viewers[14]);
                    $("#text-number-of-viewers").text(values_viewers[14]);
                },
                slide: function(event, ui) {
                    $("#label-number-of-viewers").text(values_viewers[ui.value]);
                    $("#text-number-of-viewers").text(values_viewers[ui.value]);
                    updateCostCalculation();
                }
            });
            $("#slider-stream-duration").slider({
                min: 0,
                max: values_duration.length - 1,
                step: 1,
                value: 3,
                create: function() {
                    $("#label-stream-duration").text(values_duration[3]);
                    $("#text-stream-duration").text(values_duration[3]);
                },
                slide: function(event, ui) {
                    $("#label-stream-duration").text(values_duration[ui.value]);
                    $("#text-stream-duration").text(values_duration[ui.value]);
                    updateCostCalculation();
                }
            });
            $("#slider-stream-days").slider({
                min: 0,
                max: values_days.length - 1,
                step: 1,
                value: 0,
                create: function() {
                    $("#label-stream-days").text(values_days[0]);
                    $("#text-stream-days").text(values_days[0]);
                },
                slide: function(event, ui) {
                    $("#label-stream-days").text(values_days[ui.value]);
                    $("#text-stream-days").text(values_days[ui.value]);
                    updateCostCalculation();
                }
            });
            $("#slider-p2p-ratio").slider({
                min: 0,
                max: 95,
                step: 5,
                value: 75,
                create: function() {
                    $("#label-p2p-ratio").text("75%");
                    $("#text-p2p-ratio").text("75%");
                },
                slide: function(event, ui) {
                    $("#label-p2p-ratio").text(ui.value + "%");
                    $("#text-p2p-ratio").text(ui.value + "%");
                    updateCostCalculation();
                }
            });
            $("#checkbox-p2p").click(function(e) {
                if ($("#slider-p2p-ratio").slider("option", "disabled")) {
                    $("#slider-p2p-ratio").slider("option", "disabled", false);
                } else {
                    $("#slider-p2p-ratio").slider("option", "disabled", true);
                }
                $("#wrapper-p2p-ratio").toggleClass("color-white-blue stroke");
                updateCostCalculation();
            });
            updateCostCalculation();
        }
    );
</script>
<?php wp_footer(); ?>
</body>
</html>