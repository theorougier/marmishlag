<?php get_header(); ?>

    <h2 class="text-center my-3">Toutes nos bonnes recettes</h1>
    <?php $loop = new WP_Query( array( 'post_type' => 'Recettes', 'posts_per_page' => '10' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php
                        $post_thumbnail_id = $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $img_ar =  wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                        ?>
            <article class="col-12 col-md-6 col-lg-3 card">
              <a href="<?php the_permalink() ?>">
                <img class="card-img" src="<?php echo $img_ar[0] ?>"/>
                <div class="card-img-overlay">
                   <h3 class="card-header"><?php the_title() ?></h1>
                   <div class="card-body">
                       <div class="card-text"><?php echo get_the_excerpt() ?></div>
                   </div>
               </div>
              </a>
           </article>
    <?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>