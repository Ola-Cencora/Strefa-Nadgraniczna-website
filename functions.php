<?php

/*
Enqueue scripts and styles.
*/
function strefa_assets()
{
    // Enqueue a Google font
    wp_enqueue_style('google-fonts-dm-serif-display', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap', false);

    // Załaduj Montserrat
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap', false);

    // Enqueue swiper CSS
    wp_enqueue_style('swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), false, 'all');

    // Enqueue the main stylesheet
    wp_enqueue_style('strefa', get_stylesheet_uri(), array('google-fonts-dm-serif-display', 'google-fonts-montserrat', 'swiper'), filemtime(get_template_directory() . '/style.css'), 'all');

    // Enqueue swiper JS
    wp_enqueue_script('swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Enqueue custom JS
    wp_enqueue_script('strefa-js', get_template_directory_uri() . '/app.js', array('swiper'), filemtime(get_template_directory() . '/app.js'), true);
}

add_action('wp_enqueue_scripts', 'strefa_assets');

/* Add customizer functionality */
require get_template_directory() . '/includes/customizer-strefa.php';
