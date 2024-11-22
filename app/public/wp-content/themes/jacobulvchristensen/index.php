<?php
get_header();
?>

<div class="content">

<?php
$overskrift_forside = get_field('overskrift_forside');
$video_forside = get_field('video_forside');
$overskrift_under_video = get_field('overskrift_under_video');
?>

<div class="hero-section">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            // Video element
            $video_forside = get_field('video_forside');
            if ($video_forside) {
                echo '<div class="hero-video-wrapper">';
                echo '<video autoplay muted loop width="100%">'; 
                echo '<source src="' . esc_url($video_forside['url']) . '" type="' . esc_attr($video_forside['mime_type']) . '">';
                echo esc_html($your_browser_does_not_support_video); 
                echo '</video>';
                echo '</div>';
            }
            
            // Overskrift før video
            $overskrift_forside = get_field('overskrift_forside');
            if ($overskrift_forside) {
                echo '<div class="hero-title-before-video">';
                echo '<h1>' . esc_html($overskrift_forside) . '</h1>';
                echo '</div>';
            }

            // Overskrift efter video
            $overskrift_under_video = get_field('overskrift_under_video');
            if ($overskrift_under_video) {
                echo '<div class="hero-title-after-video">';
                echo '<h1>' . esc_html($overskrift_under_video) . '</h1>';
                echo '</div>';
            }

        endwhile;
    endif;
    ?>
</div>



<?php
$tilbud_1 = get_field('tilbud_1');
$tilbud_1_overskrift = get_field('tilbud_1_overskrift');
$tilbud_2 = get_field('tilbud_2');
$tilbud_2_overskrift = get_field('tilbud_2_overskrift');
$tilbud_3 = get_field('tilbud_3');
$tilbud_3_overskrift = get_field('tilbud_3_overskrift');
$tilbud_4 = get_field('tilbud_4');
$tilbud_4_overskrift = get_field('tilbud_4_overskrift');
$tilbud_5 = get_field('tilbud_5');
$tilbud_5_overskrift = get_field('tilbud_5_overskrift');
?>

<div class="box-section">
<div class="box-container">
<?php


// Box for tilbud 1
if ($tilbud_1) {
    $tilbud_1_billede = isset($tilbud_1['tilbud_1_billede']) ? $tilbud_1['tilbud_1_billede'] : null;
    $tilbud_1_link = isset($tilbud_1['tilbud_1_link']) ? $tilbud_1['tilbud_1_link'] : null;
    
    echo '<div class="box">';
    if ($tilbud_1_overskrift) {
        echo '<div class="box-title">' . esc_html($tilbud_1_overskrift) . '</div>';
    }
    if ($tilbud_1_billede) {
        if ($tilbud_1_link) {
            echo '<a href="' . esc_url($tilbud_1_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($tilbud_1_billede['url']) . '" alt="' . esc_attr($tilbud_1_billede['alt']) . '" class="box-image">';
        if ($tilbud_1_link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($tilbud_1_link) . '" class="box-link">';
    echo '</div>';
}

// Box for tilbud 2

if ($tilbud_2) {
    $tilbud_2_billede = isset($tilbud_2['tilbud_2_billede']) ? $tilbud_2['tilbud_2_billede'] : null;
    $tilbud_2_link = isset($tilbud_2['tilbud_2_link']) ? $tilbud_2['tilbud_2_link'] : null;
    
    echo '<div class="box">';
    if ($tilbud_2_overskrift) {
        echo '<div class="box-title">' . esc_html($tilbud_2_overskrift) . '</div>';
    }
    if ($tilbud_2_billede) {
        if ($tilbud_2_link) {
            echo '<a href="' . esc_url($tilbud_2_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($tilbud_2_billede['url']) . '" alt="' . esc_attr($tilbud_2_billede['alt']) . '" class="box-image">';
        if ($tilbud_2_link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($tilbud_2_link) . '" class="box-link">';
    echo '</div>';
}

// Box for tilbud 3

if ($tilbud_3) {
    $tilbud_3_billede = isset($tilbud_3['tilbud_3_billede']) ? $tilbud_3['tilbud_3_billede'] : null;
    $tilbud_3_link = isset($tilbud_3['tilbud_3_link']) ? $tilbud_3['tilbud_3_link'] : null;
    
    echo '<div class="box">';
    if ($tilbud_3_overskrift) {
        echo '<div class="box-title">' . esc_html($tilbud_3_overskrift) . '</div>';
    }
    if ($tilbud_3_billede) {
        if ($tilbud_3_link) {
            echo '<a href="' . esc_url($tilbud_3_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($tilbud_3_billede['url']) . '" alt="' . esc_attr($tilbud_3_billede['alt']) . '" class="box-image">';
        if ($tilbud_3_link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($tilbud_3_link) . '" class="box-link">';
    echo '</div>';
}

// Box for tilbud 4

if ($tilbud_4) {
    $tilbud_4_billede = isset($tilbud_4['tilbud_4_billede']) ? $tilbud_4['tilbud_4_billede'] : null;
    $tilbud_4_link = isset($tilbud_4['tilbud_4_link']) ? $tilbud_4['tilbud_4_link'] : null;
    
    echo '<div class="box">';
    if ($tilbud_4_overskrift) {
        echo '<div class="box-title">' . esc_html($tilbud_4_overskrift) . '</div>';
    }
    if ($tilbud_4_billede) {
        if ($tilbud_4_link) {
            echo '<a href="' . esc_url($tilbud_4_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($tilbud_4_billede['url']) . '" alt="' . esc_attr($tilbud_4_billede['alt']) . '" class="box-image">';
        if ($tilbud_4_link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($tilbud_4_link) . '" class="box-link">';
    echo '</div>';
}

// Box for tilbud 5

if ($tilbud_5) {
    $tilbud_5_billede = isset($tilbud_5['tilbud_5_billede']) ? $tilbud_5['tilbud_5_billede'] : null;
    $tilbud_5_link = isset($tilbud_5['tilbud_5_link']) ? $tilbud_5['tilbud_5_link'] : null;
    
    echo '<div class="box">';
    if ($tilbud_5_overskrift) {
        echo '<div class="box-title">' . esc_html($tilbud_5_overskrift) . '</div>';
    }
    if ($tilbud_5_billede) {
        if ($tilbud_5_link) {
            echo '<a href="' . esc_url($tilbud_5_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($tilbud_5_billede['url']) . '" alt="' . esc_attr($tilbud_5_billede['alt']) . '" class="box-image">';
        if ($tilbud_5_link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($tilbud_5_link) . '" class="box-link">';
    echo '</div>';
}



?>
</div>
</div>


<?php get_footer(); ?>
