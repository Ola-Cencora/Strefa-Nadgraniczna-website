<?php

/**
 * Template part for displaying the gallery section
 */
?>

<div class="gallery">
    <div class="swiper">
        <div class="swiper-wrapper">

            <?php
            $gallery = get_theme_mod('strefa_gallery', []);

            if (!empty($gallery)) {
                foreach ($gallery as $slide) {
                    echo '<div class="swiper-slide">';
                    echo '<img src="' . esc_url($slide['image']) . '" alt="Strefa Nadgraniczna w Gorajcu" />';
                    echo '</div>';
                }
            }
            ?>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>