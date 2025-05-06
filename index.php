<?php
get_header();
?>

<main>
    <section id="strefa" class="strefa">
        <h1 class="sectionTitle">Strefa Nadgraniczna</h1>

        <?php get_template_part('template-parts/strefa', 'tekst'); ?>

        <?php get_template_part('template-parts/strefa', 'galeria'); ?>

    </section>
    <section id="my" class="about">
        <h2 class="sectionTitle">Gospodarze</h2>
        <div class="about__info">
            <div class="about__info___img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about.jpg" alt="Gospodarze Strefy Nadgranicznej w Gorajcu" />
            </div>
            <div class="about__info___txt">
                <p>Cześć!</p>
                <p>
                    Z tej strony Damian i Rozalia - gospodarze Strefy Nadgranicznej.
                </p>
                <p>
                    Los prowadził nas różnymi drogami i&nbsp;rzucał w&nbsp;różne
                    miejsca, ale to właśnie tutaj odnaleźliśmy swój dom (a&nbsp;przy
                    okazji dom dla różnej maści zwierzaków, które nieustannie się do
                    nas przybłąkują). Życie w rytmie natury dało nam radość i spokój –
                    poranne spacery wśród mglistych łąk, brodzenie w strumyku w upalne
                    dni, długie wędrówki po okolicy, obserwowanie zmieniających się
                    pór roku. A&nbsp;tworzenie Strefy i&nbsp;dzielenie się tym
                    magicznym zakątkiem dało nam spełnienie. Od kilku lat własnymi
                    rękami budujemy to miejsce i otwieramy drzwi dla każdego, kto
                    pragnie odpocząć, dobrze zjeść i&nbsp;zakosztować nieco tego
                    słynnego “slow life”.
                </p>
                <p>
                    Sielska okolica sprawia, że czas w&nbsp;Strefie płynie jak
                    w&nbsp;zwolnionym tempie. Tutaj posiłki przygotowujemy na bieżąco,
                    ze świeżych produktów - więc wybierając się do nas, zapomnij
                    o&nbsp;pośpiechu, a&nbsp;gwarantujemy, że wyjedziesz zadowolony i
                    zrelaksowany. Z chęcią porozmawiamy, podpowiemy, co warto zobaczyć
                    w&nbsp;okolicy, a jeśli wolisz ciszę i&nbsp;spokój – stworzymy Ci
                    do tego idealne warunki.
                </p>
                <p>
                    Przyjedź, posil ciało i ducha, poczuj magię tego miejsca. Czekamy
                    na Ciebie!
                </p>
            </div>
        </div>
    </section>
    <section id="kontakt" class="contact">
        <h2 class="sectionTitle">Kontakt</h2>
        <div class="contact__wrapper">
            <form
                class="contact__form"
                autocomplete="off"
                action="https://formspree.io/f/xgvozjpn"
                method="POST">
                <label for="name">twoje imię</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    autocomplete="new-password" />
                <label for="email">twój e-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    autocomplete="off" />
                <label for="message">twoje pytanie</label>
                <textarea id="message" name="message" rows="10" required></textarea>
                <button class="button-light" type="submit">Wyślij</button>
                <p class="contact__form___status"></p>
            </form>

            <div class="contact__info">
                <p>Rozalia <b>509 460 393</b></p>
                <p>Damian <b>509 966 225</b></p>
                <p>strefa.nadgraniczna@gmail.com</p>
            </div>
        </div>
    </section>
    <section id="gdziejestesmy" class="location">
        <div class="location__map">
            <h2 class="sectionTitle">Gdzie jesteśmy</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.900878742365!2d23.201818875407234!3d50.26935520038796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473b5404c156e93b%3A0x3e9e3b4fc7b0eb4c!2sGorajec%209%2C%2037-611%20Gorajec!5e1!3m2!1spl!2spl!4v1738763823483!5m2!1spl!2spl"
                width="400"
                height="300"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php
get_footer(); ?>