<?php
/* Template Name: Grovfoder */
get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <?php
    // WP Query for at hente indlægget med sluggen 'grovfoder' fra CPT 'services'
    $args = array(
        'post_type' => 'service',
        'name' => 'grovfoder',
        'posts_per_page' => 1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="service-detail">
                <h2><?php the_field('titel_over_billede'); ?></h2>

                <?php 
                // Hent billeddata som array
                $billede_under_overskrift = get_field('billede_under_overskrift');
                if ($billede_under_overskrift && is_array($billede_under_overskrift)) : ?>
                    <img src="<?php echo esc_url($billede_under_overskrift['url']); ?>" alt="<?php echo esc_attr($billede_under_overskrift['alt']); ?>" class="service-image">
                <?php else : ?>
                    <p>Billedet er ikke tilgængeligt.</p>
                <?php endif; ?>

                <div class="service-introduction">
                    <p><?php the_field('introduktion'); ?></p>
                </div>

                <div class="service-description">
                    <p><?php the_field('beskrivelse'); ?></p>
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

                <?php if (get_field('video')) : ?>
    <div class="service-video">
        <video controls autoplay muted>
            <source src="<?php the_field('video'); ?>" type="video/mp4">
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
