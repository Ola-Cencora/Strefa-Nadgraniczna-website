<?php

if (!class_exists('Kirki')) {
    return;
}

new \Kirki\Panel(
    'strefa_theme_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Strefa Nadgraniczna', 'strefa-nadgraniczna'),
        'description' => esc_html__('Tutaj zmieniasz tekst i galerię', 'strefa-nadgraniczna'),
    ]
);

/* Text section */

new \Kirki\Section(
    'strefa_tekst',
    [
        'title'       => esc_html__('Strefa tekst', 'strefa-nadgraniczna'),
        'description' => esc_html__('Strefa tekst', 'strefa-nadgraniczna'),
        'panel'       => 'strefa_theme_panel',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Textarea([
    'settings'    => 'strefa_p1',
    'label'       => esc_html__('Paragraf 1', 'strefa-nadgraniczna'),
    'section'     => 'strefa_tekst',
    'default'     => 'Sielska STREFA w maleńkiej NADGRANICZNEJ wsi, położona wśród łąk, lasów i&nbsp;pól, z&nbsp;widokiem na XVI-wieczną drewnianą cerkwiew.',
]);

new \Kirki\Field\Textarea([
    'settings'    => 'strefa_p2',
    'label'       => esc_html__('Paragraf 2', 'strefa-nadgraniczna'),
    'section'     => 'strefa_tekst',
    'default'     => 'Malownicze ścieżki spacerowe i&nbsp;rowerowe. Cisza, spokój, relaks na łonie natury.',
]);

new \Kirki\Field\Textarea([
    'settings'    => 'strefa_p3',
    'label'       => esc_html__('Paragraf 3', 'strefa-nadgraniczna'),
    'section'     => 'strefa_tekst',
    'default'     => 'Rozsmakuj się w gorajeckich wariacjach kuchni gruzińskiej, tureckiej i&nbsp;polskiej: wegetariański chaczapur serowy, zawijaniec z&nbsp;mięsem, wegański bobowiec, swojskie zapiekanki.',
]);

new \Kirki\Field\Textarea([
    'settings'    => 'strefa_p4',
    'label'       => esc_html__('Paragraf 4', 'strefa-nadgraniczna'),
    'section'     => 'strefa_tekst',
    'default'     => 'Orzeźwij się lokalnymi napojami: domowa kombucha i sok jabłkowy, rzemieślniczy cydr i piwo.',
]);

new \Kirki\Field\Textarea([
    'settings'    => 'strefa_p5',
    'label'       => esc_html__('Paragraf 5', 'strefa-nadgraniczna'),
    'section'     => 'strefa_tekst',
    'default'     => '',
]);

/* Gallery section */

new \Kirki\Section(
    'strefa_galeria',
    [
        'title'       => esc_html__('Strefa galeria', 'strefa-nadgraniczna'),
        'description' => esc_html__('Dodaj zdjęcia do galerii', 'strefa-nadgraniczna'),
        'panel'       => 'strefa_theme_panel',
        'priority'    => 170,
    ]
);

new \Kirki\Field\Repeater([
    'settings' => 'strefa_gallery',
    'label'    => esc_html__('Galeria zdjęć', 'strefa-nadgraniczna'),
    'section'  => 'strefa_galeria',
    'fields'   => [
        'image' => [
            'type'        => 'image',
            'label'       => esc_html__('Zdjęcie', 'strefa-nadgraniczna'),
            'default'     => '',
        ],
    ],
]);
