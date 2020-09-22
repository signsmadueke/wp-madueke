<?php
	get_header();
?>

<!-- <section id="adverts" data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "autoPlay": "5000", "pauseAutoPlayOnHover": false, "dragThreshold": "10", "bgLazyLoad": true }'>
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

<?php get_footer(); ?>

<!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->

<!-- <script>
    $('#adverts').flickity({
        "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "autoPlay": "5000", "pauseAutoPlayOnHover": false, "dragThreshold": "10", "bgLazyLoad": true
    });
</script> -->