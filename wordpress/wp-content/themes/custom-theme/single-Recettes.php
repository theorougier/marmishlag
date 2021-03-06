<?php
    get_header();
    $post_thumbnail_id = $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
    $img_ar =  wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
?>

<style>
    html {
        margin-top: unset !important;
    }
</style>

<section>
    <h2 class="title text-center"><?php echo the_title() ?></h2>
    <div class="col-12">
        <img class="col-12 image-single-recette my-3" src="<?php echo $img_ar[0] ?>"/>
    </div>
    <span><?php echo the_content() ?>
    <div>
        <?php
            comments_template()
        ?>

    </div>
</section>

<?php     get_footer(); ?>