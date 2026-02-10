<?php get_header(); ?>

<main class="search-results">
    <h1>
        Resultados para: "<?php echo esc_html(get_search_query()); ?>"
    </h1>

    <?php if (have_posts()) : ?>
        <div class="search-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="search-item">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                    <small>
                        Tipo: <?php echo get_post_type(); ?>
                    </small>
                </article>
            <?php endwhile; ?>
        </div>

    <?php else : ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
