<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

    <title>Strefa Nadgraniczna</title>
</head>

<body>
    <header class="header">
        <div class="menu">
            <a class="menu__logo" href="/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="Logo Strefy Nadgranicznej w Gorajcu" />
            </a>
            <nav class="menu__navigation">
                <ul class="menu__navigation__links">
                    <li><a href="#strefa">Strefa</a></li>
                    <li><a href="#my">My</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li><a href="#gdziejestesmy">Wskazówki dojazdu</a></li>
                </ul>
            </nav>
            <div class="hamburger">
                <div class="hamburger__inner"></div>
            </div>
        </div>
    </header>