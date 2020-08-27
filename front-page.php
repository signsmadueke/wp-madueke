<?php
	get_header();
?>

<!-- <section id="adverts">
    <div class="advert bg-1">
        <div class="details">
            <div class="text">
                <h1>Prayers for Deliverance Bundle</h1>
                <p>We must exercise our faith to walk in the fullness of His protection. Now is the time to stand firm on God's Word and start protecting yourself and your family today!</p>
            </div>
            <a class="button btn-link">
                <span>Get this today</span>
            </a>
        </div>
    </div>

    <div class="advert bg-2">
        <div class="details">
            <div class="text">
                <h1>Prayers for Deliverance Bundle</h1>
                <p>We must exercise our faith to walk in the fullness of His protection. Now is the time to stand firm on God's Word and start protecting yourself and your family today!</p>
            </div>
            <a class="button btn-link">
                <span>Get this today</span>
            </a>
        </div>
    </div>
</section> -->

<div id="space-50"></div>

<h1 class="lined-heading">eBook Bundles</h1>
<?php echo do_shortcode('[products limit="9" columns="3" category="eBook Bundles" cat_operator="AND"]'); ?>

<div id="space-50"></div>

<h1 class="lined-heading">eBooks</h1>
<?php echo do_shortcode('[products limit="9" columns="3" category="eBooks" cat_operator="AND"]'); ?>




<div id="space"></div>
<!-- 
<section id="devotional-subscription" class="animated reveal">
    <div class="text">
        <h1>Stay Inspired. Subscribe!</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>

    <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=33ca07b1a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-inputs">
            <div class="mc-field-group">
                <input type="email" autocomplete="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                <label for="mce-EMAIL">Email Address</label>
            </div>
            <input type="submit" value="Sign me up" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div for="mce-EMAIL" class="mce_inline_error" style="display:none;"></div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value=""></div>
    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>
 -->

<?php get_footer(); ?>