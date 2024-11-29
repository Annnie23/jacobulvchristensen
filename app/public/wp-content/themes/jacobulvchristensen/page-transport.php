<?php
get_header(); ?>

<div class="service-container">
    <h1 class="service-overskrift"><?php the_title(); ?></h1>

    <?php
    // WP Query for at hente indlægget med sluggen 'transport' fra CPT 'services'
    $args = array(
        'post_type' => 'service',
        'name' => 'transport',
        'posts_per_page' => 1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="service-detail">
                

                <?php 
                // Hent billeddata som array
                $billede_under_overskrift = get_field('billede_under_overskrift');
                if ($billede_under_overskrift && is_array($billede_under_overskrift)) : ?>
                    <img src="<?php echo esc_url($billede_under_overskrift['url']); ?>" alt="<?php echo esc_attr($billede_under_overskrift['alt']); ?>" class="service-image hero-image">
                <?php else : ?>
                    <p>Billedet er ikke tilgængeligt.</p>
                <?php endif; ?>

                <h2 class="service-title"><?php the_field('underoverskrift_1'); ?></h2>

                <div class="service-introduction">
                    <p><?php the_field('tekst_1'); ?></p>
                </div>

                <h2 class="service-title"><?php the_field('underoverskrift_2'); ?></h2>

                <div class="service-introduction">
                    <p><?php the_field('tekst_2'); ?></p>
                </div>

                <h2 class="service-title"><?php the_field('underoverskrift_3'); ?></h2>

                <div class="service-introduction">
                    <p><?php the_field('tekst_3'); ?></p>
                </div>

                <h2 class="service-title"><?php the_field('underoverskrift_4'); ?></h2>

                <div class="service-introduction">
                    <p><?php the_field('tekst_4'); ?></p>
                </div>

                <h2 class="service-title"><?php the_field('underoverskrift_5'); ?></h2>

                <div class="service-introduction">
                    <p><?php the_field('tekst_5'); ?></p>
                </div>

                <div class="service-gallery">
                    <?php 
                    // Billede 1
                    $billede_1 = get_field('billede_1'); 
                    if ($billede_1 && is_array($billede_1)) : ?>
                        <img src="<?php echo esc_url($billede_1['url']); ?>" alt="<?php echo esc_attr($billede_1['alt']); ?>">
                    <?php endif; ?>

                    <?php 
                    // Billede 2
                    $billede_2 = get_field('billede_2'); 
                    if ($billede_2 && is_array($billede_2)) : ?>
                        <img src="<?php echo esc_url($billede_2['url']); ?>" alt="<?php echo esc_attr($billede_2['alt']); ?>">
                    <?php endif; ?>

                     <?php 
                    // Billede 3
                    $billede_3 = get_field('billede_3'); 
                    if ($billede_3 && is_array($billede_3)) : ?>
                        <img src="<?php echo esc_url($billede_3['url']); ?>" alt="<?php echo esc_attr($billede_3['alt']); ?>">
                    <?php endif; ?>
                </div>

                <?php 
                $video = get_field('video'); 
                if ($video) : 
                ?>
                    <div class="service-video">
                        <video autoplay muted loop width="100%">
                            <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
                            <?php _e('Din browser understøtter ikke denne video.', 'text-domain'); ?>
                        </video>
                    </div>
                <?php endif; ?>


            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Der er ingen indhold at vise for "Grovfoder".</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
