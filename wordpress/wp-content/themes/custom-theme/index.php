<?php get_header(); ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'Recettes', 'posts_per_page' => '10' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <h1><?php the_title() ?></h1>
           <?php the_content() ?>
    <?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>