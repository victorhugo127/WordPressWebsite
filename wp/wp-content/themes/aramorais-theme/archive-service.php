<?php get_header(); ?>

<main class="services-archive">
    <div class="container">

        <h1>Nossos Serviços</h1>

        <?php
        // Buscar categorias de serviços
        $categories = get_terms([
            'taxonomy' => 'service_category',
            'hide_empty' => true
        ]);
        ?>

        <?php if (!empty($categories) && !is_wp_error($categories)) : ?>
            <div class="service-filters">
                <strong>Filter by category:</strong>
                <?php foreach ($categories as $cat) : ?>
                    <a href="<?php echo esc_url(get_term_link($cat)); ?>">
                        <?php echo esc_html($cat->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (have_posts()) : ?>
            <div class="services-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-item">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <?php the_excerpt(); ?>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Nenhum serviço encontrado.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>

