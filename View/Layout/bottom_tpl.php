<script src="Assets/addons/jquery/jquery-3.4.1.min.js"></script>
<script src="Assets/js/script.js?mMenu"></script>
<script src="Assets/addons/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="Assets/addons/fancybox/jquery.fancybox.min.js"></script>
<script src="Assets/addons/simplyscroll/jquery.simplyscroll.min.js"></script>

<script><?=$plugin_js?></script>

<?php if($source=='contact' || $source=='registered'): ?>
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit&hl=<?=$lang?>" defer></script>
    <script>
        if($('#recaptcha').length){
            var recaptcha;
            var myCallBack = function() {
                recaptcha = grecaptcha.render('recaptcha', {
                    'sitekey' : '6LfzH3YUAAAAACpJhQk9MyMXyU7RUvLCpQ6RFtwB',
                    'theme' : 'light',
                    'callback': 'verifyCapt',
                });
            };
            var verifyCapt = function( response ) {
                console.log( 'g-recaptcha-response: ' + response );
            };
        }
    </script>
<?php endif ?>

<?php if($template=='product_detail'): ?>
	<script src="Assets/addons/magiczoomplus/magiczoomplus.js"></script>
	<script>
        $(".owl_carousel_detail").owlCarousel({
            autoplayHoverPause:1,
            loop:0,
            margin:10,
            nav:0,
            dots:1,
            lazyLoad:1,
            autoplay:1,
            setTimeout:3000,
            smartSpeed:1500,
            fluidSpeed:1500,
            items:5
        });
    </script>
<?php endif ?>
