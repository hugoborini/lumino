<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php  require("components/header_landpage.php") ?>


    <section class="hero">
        <article class="hero__title">
            <h1>WATCH YOUR MOVIES IN ONE PLACE</h1>
        </article>

        <article class="hero__infos">
            <p>Start your free trial and watch thousands of movies wherever you want starting</p>
            <p class="price"> at <em> 6.99$ </em>/month</p>
        </article>

        <article class="hero__CTA">
            START YOUR FREE TRIAL
        </article>
    </section>

    <section class="hero__bottom">
        <svg class="downIcon" width="30" height="12" viewBox="0 0 30 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L15 11L29 1" stroke="#f0f1f3" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </section>

    <section class="landingpage">
        <section class="watch">
            <article class="watch__text">
                <p class="watch__title">Watch movies wherever, wheneveryou want.</p>
                <p class="watch__body">On your desktop, on your laptop, your tablet or your phone, we are available
                    everywhere, on any device.
                    No need for internet connection to watch your favorite movies, juste download them and whatch them
                    later.</p>
            </article>

            <article>
                <img src="assets/img/mockups.png" alt="" class="watch__mockup">
            </article>

        </section>

        <section class="movies">
            <article class="movies__mockup">
                <img src="assets/img/movies_posters.png" alt="" class="movies__mockup">
            </article>

            <article class="movies__text">
                <p class="movies__title">New movies continuously added.</p>
                <p class="movies__body">We are doing everything we can to provide you new movies as often as possible.
                    We have a large library of movies that will grow weeks after weeks.</p>
            </article>


        </section>

        <section class="download">
            <article class="download__text">
                <p class="download__title">Download all your favorite movies to watch them offline.</p>
                <p class="download__body">Our large number of servers allow you to download up to 10
                    Go of movies on your account for 15 days.</p>
            </article>

            <article class="download__mockup">
                <img src="assets/img/phone_download.png" alt="" class="download__mockup">
                <img src="assets/img/download-icon.gif" alt="" class="download__gif">
            </article>



        </section>


    </section>

    <?php  require("components/footer.php") ?>

</body>

</html>