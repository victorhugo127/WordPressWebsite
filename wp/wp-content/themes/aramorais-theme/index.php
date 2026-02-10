<?php get_header(); ?>

<main>
    <h2>Bem-vindo ao site Aramorais</h2>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>

    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    
</main>

<?php get_footer(); ?>
