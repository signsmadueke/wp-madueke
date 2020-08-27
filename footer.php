<section id="trust">
    <script language="JavaScript" type="text/javascript">
	    TrustLogo("https://sectigo.com/images/seals/sectigo_trust_seal_sm_2x.png", "SECDV", "none");
    </script>
</section>
<footer id="footer">
    <ul>
        <li>
            <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a>
        </li>
        <li>
            <a href="<?php echo get_home_url(); ?>/contact">Contact</a>
        </li>
    </ul>
    
    <p class="copyright">&copy; 2020 Prayer Madueke. All rights reserved.</p>
    
    <div id="social">
        <p>Connect with me</p>
        <span></span>
        <ul>
			<li>
                <a href="https://facebook.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/facebook.svg" height="15px" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://instagram.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/instagram.svg" height="15px" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/twitter.svg" height="15px" alt="Twitter">
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- <script src="//code.tidio.co/cvaez7z6kxqicsb0vraidxlffyunqzvu.js" async></script> -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v8.0'
        });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="312645492269355"
    theme_color="#222222"
    logged_in_greeting="Hi there 👋 If you need any assistance, I'm always here."
    logged_out_greeting="Hi there 👋 If you need any assistance, I'm always here.">
</div>
<?php wp_footer(); ?>
</body>

</html>