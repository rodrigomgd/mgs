<?php get_header(); ?>
<?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
        <p class="text-center f-medium p-3" id="breadcrumbs">','</p>
        ');
    }
?>
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
                <p class="text-muted f-medium"><?php the_author(); echo ", "; the_date('M Y'); ?></p>
                <div class="f-regular">
                    <?php the_content(); ?>
                </div>

            </article>
            <div class="f-light text-center posts-link pb-3">
                <?php the_post_navigation(array(
                    'screen_reader_text' => "Leia mais:"
                ));?> 
            </div>
            <?php endwhile; ?>
  
            <?php endif; ?>
        
        </div>
    </div>
</section>

<?php get_footer(); ?>
