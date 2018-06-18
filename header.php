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


<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="<?= get_theme_file_uri('assets/img/short-logo.png') ?>" alt="Logo reduzido Me Gusta Digital" class="img-fluid"></a>
   <?php get_search_form(); ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu(['menu'=>'menu home', 'menu_class' => 'navbar-nav mr-auto' ]) ?> 
  </div>
</nav>



