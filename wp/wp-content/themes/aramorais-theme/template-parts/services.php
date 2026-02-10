<section class="services">
    <div class="container">
        <h2>Our Services</h2>

        <div class="services-grid">
            <?php
            $query = new WP_Query([
                'post_type' => 'service',
                'posts_per_page' => 6
            ]);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                <div class="service-card">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Saiba mais</a>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p>Nenhum serviço cadastrado.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
