<?php
	/*Template Name: Woo Page*/
	get_header();
?>

<h1 class="section-title animated reveal"><?php the_title(); ?></h1>
<section id="content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</section>

<?php get_footer(); ?>

