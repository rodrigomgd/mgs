<section class="container-fluid mt-5">
    <div class="row justify-content-around">
        <div class="col-lg-7 col-md-7 col-10">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article <?php post_class("row pl-3 posts d-block"); ?> >
               
               <?php if(has_post_thumbnail()) { ?>
                  <a href=" <?php echo get_permalink(); ?>"> <?php the_post_thumbnail( 'large', array("class" => "img-fluid m-auto d-block") ); ?> </a>
              <?php } else {
                    echo "Sem imagem."; 
                } ?>
                <a class="f-bold posts-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_category(); ?>

                <p class="text-muted f-medium"><?php the_author(); echo ", "; the_date('M Y'); ?></p>
                
                <div class="f-medium">
                    <?php the_excerpt(); ?>
                </div>

            </article>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-5 col-lg-3 sidebar bg-1">
            <?php get_sidebar(); ?>
        </div>
    </div>       
    <div class="container pt-3 pb-3">
        <?php the_posts_pagination( array(
                'screen_reader_text' => "  ",
                'mid_size' => 5,
                'prev_text' => __( 'Anterior', 'textdomain' ),
                'next_text' => __( 'Próximo', 'textdomain' ),
            ) ); ?>
    </div>
    <button class="btn-sidebar"><img src="<?php echo get_template_directory_uri().'/assets/img/arrow.png' ?>" alt="botao sidebar"></button>
</section>