<?php get_header(); ?>

<section style="text-align: center; padding: 6rem 2rem;">
    <h1 class="pb-lr">This is just an example of single post.</h1>
    <h1 class="pb-lr">PAGE TITLE:</h1>
    <?php while(have_posts()) : the_post(); ?>
    <h1 class="pb-lr"><?php the_title(); ?></h1>
    <h2>Price of the course: $<?php the_field('price');?></h2>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>