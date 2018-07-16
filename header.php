<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/css/styles.css') ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark navbar-megusta">
    <a class="navbar-brand" href="<?php echo site_url() ?> "><img src="<?= get_theme_file_uri('assets/img/short-logo.png') ?>" alt="Logo reduzido Me Gusta Digital" class="img-fluid"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu(['menu'=>'menu home', 'menu_class' => 'navbar-nav m-auto' ]) ?>
        <?php get_search_form(); ?>
    </div>
</nav>

<div class="container-fluid pt-5 pb-5 white-text position-relative">
    <div id="particles-js"></div>
    <div class="row pt-5 pb-5 justify-content-around">
        <div class="col-md-6 col-lg-5 p-5">
            <a href="<?php echo site_url() ?>"> <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" class="img-fluid" alt="Logo Megusta Digital"></a>
        </div>
        <div class="header-social-links">
            <span>social-links</span> 
            <hr class="hr-50" > 
            <ul class="list-inline">
                <li class= "list-inline-item"><a href="http://fb.com/agenciamegusta"><img src="<?php echo get_theme_file_uri('assets/img/facebook.png') ?>" alt=""></a></li>
                <li class= "list-inline-item"><a href="http://instagr.am/agenciamegusta/"><img src="<?php echo get_theme_file_uri('assets/img/instagram.png') ?>" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>




