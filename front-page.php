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

<body class="white-text">
<div class="container-fluid pt-5 pb-5 white-text position-relative">
<div id="particles-js"></div>
    <div class="row pt-5 pb-5 justify-content-around">
        <div class="col-md-6 col-lg-5 p-5">
            <a href="<?php echo site_url() ?>"> <img src="<?= get_theme_file_uri('assets/img/logo.png'); ?>" class="img-fluid" alt="Logo Megusta Digital"></a>
        </div>
        <div class="header-social-links">
            <span>social-links</span> 
            <hr class="hr-50" > 
            <ul class="list-inline">
                <li class= "list-inline-item"><a href="#"><img src="<?= get_theme_file_uri('assets/img/facebook.png') ?>" alt=""></a></li>
                <li class= "list-inline-item"><a href="#"><img src="<?= get_theme_file_uri('assets/img/instagram.png') ?>" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>

<section class="container pt-5">
    <div class="row text-center f-light">
        <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, explicabo beatae facere nihil aliquam ullam quibusdam sunt perspiciatis impedit soluta odit sequi asperiores voluptatum modi, praesentium rem nemo neque repellat!Iste laudantium nihil aspernatur pariatur laboriosam harum doloribus deleniti laborum minus eaque consectetur voluptatibus quas perferendis, impedit totam fuga odio! Ullam quas aut tempora expedita distinctio nulla debitis cum quod!
        </p>
        <p class="lead text-muted">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, iure! Similique provident soluta, cupiditate dolorem, consequuntur libero repudiandae maxime, nemo repellendus maiores fuga. Culpa beatae quo architecto facere itaque pariatur!Omnis aliquid ut maxime nobis in, quam vel cupiditate magnam veritatis et, voluptas molestiae quis harum minima quas provident aperiam? Possimus a asperiores animi molestiae, ex et nobis voluptas laboriosam?
        </p>
    </div>
</section>

<section class="container pt-5">
    <div class="row justify-content-around text-center">
        <?php $trabalhos = json_decode(file_get_contents(get_theme_file_uri('assets/json/trabalhos.json')),true); ?>
        <?php foreach($trabalhos as $trabalho) : ?>
        <div class="col-md-2 col-sm-4 col-6 mb-5 mr-4 ml-4">
            <img src="<?= get_theme_file_uri('assets/img/'.$trabalho['img']) ?>" alt="<?= $trabalho['alt'] ?>" class="img-fluid p-2">
            <h3 class="mt-3 f-medium"><?= $trabalho['name'] ?></h3>
            <hr class="hr-25">
            <p class="f-regular">
                <?= $trabalho['description'] ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="container posts pt-5">
    <h2 class="mt-3 mb-3 text-center f-bold">Notícias</h2>
    <div class="row justify-content-around">
            <?php
                $args = array( 'numberposts' => '6' );
                $recent_posts = wp_get_recent_posts( $args ); 
                foreach( $recent_posts as $recent ): the_post();?>
                
                <div class="col-md-4 col-8 mb-4">
                <?php	if ( has_post_thumbnail( $recent["ID"]) ) {
                        echo  get_the_post_thumbnail($recent["ID"],'large',array("class" => "img-fluid"));
                        }else{ echo "Sem imagem.";} ?>
                            <?php the_category(); ?>
                            <a class="f-bold posts-link" href="<?= get_permalink($recent['ID']) ?>"><?= $recent['post_title'] ?></a>
                            <?php the_excerpt(array("class"=>"f-medium")) ?>
                            <p class="text-muted f-medium"><?php the_author() ?>, <?php the_date('M Y') ?></p>
                </div>
            <?php endforeach; wp_reset_query() ?>
        </div>
    </div>
</section>

<section class="container text-center p-5">
    <div class="row d-block f-medium">
        <h3>Rua Professor Júlio Gustavo Fehrenbach, 224, Pelotas-RS</h3>
        <h3>digital@megusta.com.br</h3>
        <h3> +55 53 3342.3413</h3>
    </div>
</section>

<section class="container mb-5">
    <h3 class="text-center f-medium pb-4">Entre em contato</h3>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="<?= get_theme_file_uri('mail.php') ?>" method="post" class="form-megusta f-light">
                <div class="row pb-3">
                    <div class="col-sm mb-3">
                        <input type="text" name="name" class="form-control p-3 pl-4" placeholder="Nome" required>
                    </div>
                    <div class="col-sm mb-3">
                        <input type="text" name="email" class="form-control p-3 pl-4" placeholder="E-mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="" name="message" cols="30" rows="8" placeholder="Sua mensagem" class="form-control p-3 pl-4" required></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-light d-block mt-4">Enviar</button>
            </form>
            <p id="return-message" class="f-medium p-3 text-center"></p>
        </div>
    </div>
</section>
<script src="<?= get_theme_file_uri('assets/js/particles.min.js') ?>"/></script>
<script src="<?= get_theme_file_uri('assets/js/app.js') ?>"/></script>
<?php get_footer(); ?>
