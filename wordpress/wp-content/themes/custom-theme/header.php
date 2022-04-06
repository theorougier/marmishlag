<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="site-header">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><img class="logo-navbar" src="https://medias.andromede.pics/img/5eace520-a05b-11.gif" alt="logo marque"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <?php if (is_user_logged_in()): ?>
            <a class="mx-3" href="<?php echo get_permalink( get_page_by_title( 'Formulaire de création de recette' ) ) ?>"><span class="dashicons dashicons-edit-page"></span>Créez votre recette</a>
            <a class="mx-3" href="<?php echo wp_logout_url() ?>"><span class="dashicons dashicons-admin-plugins"></span>Logout</a>
        <?php else: ?>
            <a class="mx-3" href="<?php echo wp_login_url() ?>"><span class="dashicons dashicons-admin-network"></span>Login</a>
            <a class="mx-3" href="<?php echo wp_registration_url() ?>"><span class="dashicons dashicons-admin-users"></span>Register</a>
        <?php endif ?>
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>


<div class="container p-5">