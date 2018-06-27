<?php get_header(); ?>

<section class="container-fluid mt-5">
    <div class="row justify-content-center">
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

                <div class="f-medium">
                    <?php the_content(); ?>
                </div>

            </article>
            <?php endwhile; ?>
                <div class="pt-3">
                    <div class="nav-previous alignleft"><?php next_posts_link( 'Post Anterior' ); ?></div>
                    <div class="nav-next alignright"><?php previous_posts_link( 'Próximo Post' ); ?></div>
                </div>
            <?php endif; ?>
        
        </div>
    </div>
</section>

<?php get_footer(); ?>
