<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Topbar -->
    <?php 
$topbar_text = get_field('topbar_text', get_the_ID()); 
$topbar_link = get_field('topbar_link', get_the_ID()); 
$topbar_text_2 = get_field('topbar_text_2', get_the_ID()); 
$icon_1 = get_field('icon_1', get_the_ID()); 
$icon_2 = get_field('icon_2', get_the_ID());

if ($topbar_text || $topbar_text_2): ?>
    <div class="topbar">
        <?php if ($icon_1 && $topbar_text): ?>
            <div class="topbar-item">
                <img src="<?php echo esc_url($icon_1); ?>" alt="Ikon 1" class="topbar-icon">
                <span class="topbar-text-content"><?php echo esc_html($topbar_text); ?></span>
            </div>
        <?php endif; ?>

        <?php if ($icon_2 && $topbar_text_2): ?>
            <div class="topbar-item">
                <img src="<?php echo esc_url($icon_2); ?>" alt="Ikon 2" class="topbar-icon">
                <span class="topbar-text-content"><?php echo esc_html($topbar_text_2); ?></span>
            </div>
        <?php endif; ?>

        <?php if ($topbar_link): ?>
            <a href="<?php echo esc_url($topbar_link); ?>" class="topbar-link">Kontakt os idag!</a>
        <?php endif; ?>
    </div>
<?php endif; ?>


    <!-- Slut på topbar -->

    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <a href="<?php echo home_url(); ?>" class="site-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>

            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ));
                ?>
            </nav>  
        </div>
    </header>

   

    
    <div id="content" class="site-content">
   
