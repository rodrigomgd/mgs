<?php /* Template Name: Digital Front-Page */ ?>
<?php get_header(); ?>

    <section class="container pt-5">
        <div class="row text-center f-light">
            <p class="lead">
            A Me Gusta Digital é um braço criativo de soluções web para marcas, criando desde soluções pontuais e funcionais a estratégias complexas com o objetivo de promover melhores resultados e maior visibilidade ao cliente no meio digital. Precisa de ajuda em um projeto ou campanha? <a href="<?php echo site_url('/contato') ?>">Entre em contato!</a></p>
        </div>
    </section>

    <section class="container pt-5">
        <div class="row justify-content-around text-center">
            <?php $trabalhos = json_decode(file_get_contents(get_theme_file_uri('assets/json/trabalhos.json')),true); ?>
            <?php foreach($trabalhos as $trabalho) : ?>
            <div class="col-md-2 col-sm-4 col-6 mb-5 mr-4 ml-4">
                <img src="<?php echo get_theme_file_uri('assets/img/'.$trabalho['img']) ?>" alt="<?php echo $trabalho['alt'] ?>" class="img-fluid p-2">
                <h3 class="mt-3 f-medium"><?php echo $trabalho['name'] ?></h3>
                <hr class="hr-25">
                <p class="f-regular">
                    <?php echo $trabalho['description'] ?>
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
                    foreach( $recent_posts as $recent ): ?>
                    
                    <div class="col-md-4 col-10 mb-4">
                    <?php	if ( has_post_thumbnail( $recent['ID'])) {
                            echo "<a href='".get_permalink($recent['ID'])."'>".get_the_post_thumbnail($recent['ID'],'large',array("class" => "img-fluid"))."</a>";
                            }else{ echo "Sem imagem.";} ?>
                                <div class="post-categories">
                                    <?php echo get_the_category_list(', ', '', $recent["ID"] ); ?>
                                </div>
                                <a class="f-bold posts-link" href="<?php echo get_permalink($recent['ID']) ?>"><?php echo $recent['post_title'] ?></a>
                                <p class="f-medium"><?php echo wp_trim_words( $recent['post_content'], 30); ?></p>
                                <p class="text-muted f-medium"><?php echo get_the_author($recent['ID']); echo ", ".get_the_date('M Y',$recent['ID']); ?></p>
                    </div>
                <?php endforeach; wp_reset_query(); ?>
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

    <?php get_template_part( 'content' , 'contato' ) ?>

<?php get_footer(); ?>
