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
    <div class="container">
        <a class="navbar-brand" href="/"><img class="logo-navbar" src="https://medias.andromede.pics/img/5eace520-a05b-11.gif" alt="logo marque"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php wp_nav_menu([
                'theme_location' => 'custom_header',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                'container' => false
            ]); ?>

            <?php get_search_form(); ?>

        </div>
    </div>
</nav>


<div class="container p-5">