<?php get_header(); ?>

<div class="container">
    <div class="row">
        <header class="page-header">
            <?php if ( have_posts() ) : ?>
                <h1 class="page-title f-light"><?php printf( __( 'Sua pesquisa: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <?php else : ?>
                <h1 class="page-title f-light"><?php _e( 'Nada encontrado', 'twentyseventeen' ); ?></h1>
                <div class="f-medium">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </header><!-- .page-header -->
    </div>
</div>

<?php get_template_part('content','home') ?>

<?php get_footer(); ?>