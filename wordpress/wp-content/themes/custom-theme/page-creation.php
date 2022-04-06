<?php /* Template Name: pageCreation */ ?>
<?php
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == "Recettes") {

        //store our post vars into variables for later use
        //now would be a good time to run some basic error checking/validation
        //to ensure that data for these values have been set
        $title     = $_POST['title'];
        $content   = $_POST['recette'];
        $post_type = 'Recettes';
        $image = get_the_ID($_POST['image']);
        print($image);

        //the array of arguements to be inserted with wp_insert_post
        $new_post = array(
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => $post_type,
        );
        //insert the the post into database by passing $new_post to wp_insert_post
        //store our post ID in a variable $pid
        $pid = wp_insert_post($new_post);
    }
?>
<?php get_header() ?>

<?php if(is_user_logged_in()): ?>
    <h2 class="text-center my-3">Créez votre propre recette</h2>
    <div>
        <form id="new_post" name="new_post" action="" method="post">
            <div class="form-group my-3">
                <label for="title">Titre de la recette</label>
                <input class="form-control" id="title" type="text" name="title" placeholder="votre titre" />
            </div>
            <div class="form-group my-3">
                <label for="recette">Recette</label>
                <textarea class="form-control" id="recette" name="recette"> </textarea>
            </div>
            <div class="form-group my-3">
                <label for="image">Image de votre recette</label>
                <input class="form-control" id="image" type="file" name="image"/>
            </div>
            <div class="form-group my-3">
                <input id="submit" type="submit" name="envoi" value="Envoyer" />
            </div>
            <input type="hidden" name="action" value="Recettes" />
        </form>
    </div>
<?php endif ?>

<? get_footer() ?>