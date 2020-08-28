<?php
	/*Template Name: Contact Page*/
	get_header();
?>


<section id="contact-hero" class="animated reveal">
    <h1 class="animated reveal">Let it out!</h1>
    <p class="animated reveal">Have any questions, complaints or requests? Contact us using any of the means below and our response team will get back to you as soon as possible.</p>
</section>

<div id="space-50"></div>

<section id="contacts">
    <a href="mailto:info@madueke.com" target="_blank" class="contact email animated reveal">
	    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/contact/mail.svg">
        <div class="text">
            <h1  >Send us an<br>Email</h1>
            <p class="animated reveal">info@madueke.com</p>
        </div>
    </a>
    <a href="tel:+1(973)536-2528" target="_blank" class="contact phone animated reveal">
	    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/contact/phone.svg">
        <div class="text">
            <h1 class="animated reveal">Call us on<br>Phone</h1>
            <p class="animated reveal">+1 (973) 536-2528</p>
        </div>
    </a>

    <a href="https://m.me/prayermadueke" target="_blank" class="contact messenger animated reveal">
        <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/contact/messenger.svg">
        <div class="text">
            <h1 class="animated reveal">Messenger<br>Live Chat</h1>
            <p class="animated reveal">m.me/prayermadueke</p>
        </div>
    </a>
    <a href="https://wa.link/461zux" target="_blank" class="contact whatsapp animated reveal">
        <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/contact/whatsapp.svg">
        <div class="text">
            <h1 class="animated reveal">WhatsApp<br>Live Chat</h1>
            
            <p class="animated reveal">+1 (973) 536-2528</p>
        </div>
    </a>
</section>

<div id="space-50"></div>

<?php get_footer(); ?>