<?php get_header(); ?>

<main class="services-by-category">
    <div class="container">

        <h1>
            Category:
            <?php single_term_title(); ?>
        </h1>

        <div class="services-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="service-card">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">View service</a>
                </div>
            <?php endwhile; else : ?>
                <p>No services found for this category.</p>
            <?php endif; ?>
        </div>

        <a href="<?php echo get_post_type_archive_link('service'); ?>">
            ← Back to all services
        </a>

    </div>
</main>

<?php get_footer(); ?>
