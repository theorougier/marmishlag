<?php get_header(); ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'Recettes', 'posts_per_page' => '10' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <article class="col-3">
               <h2><?php the_title() ?></h1>
               <?php
                $post_thumbnail_id = $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                $img_ar =  wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                ?>
               <img src="<?php echo $img_ar[0] ?>"/>
               <?php echo get_the_excerpt() ?>
           </article>
    <?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>