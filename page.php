<?php get_header(); ?>

<section id="page-title"><h1 class="animated reveal"><?php the_title(); ?></h1></section>


<section id="content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</section>

<?php get_footer(); ?>