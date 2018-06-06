
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
<section class="container-fluid">
    <div id="particles-js"></div>
    <div class="container-fluid p-5 white-text">
        <div class="row pt-5">
            <div class="col-md-6 p-5">
                <img src="<?= get_theme_file_uri('assets/img/logo.png'); ?>" class="img-fluid pt-5" alt="Logo Megusta Digital">
            </div>
            <div class="col-md-4 ">
                <span>social-links</span> <hr class="hr-50" > <ul class="list-inline">
                    <li class= "list-inline-item"><a href="#"><img src="<?= get_theme_file_uri('assets/img/facebook.png') ?>" alt=""></a></li>
                    <li class= "list-inline-item"><a href="#"><img src="<?= get_theme_file_uri('assets/img/instagram.png') ?>" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script src="<?= get_theme_file_uri('assets/js/particles.min.js') ?>"/></script>
<script src="<?= get_theme_file_uri('assets/js/app.js') ?>"/></script>
<?php wp_footer(); ?>