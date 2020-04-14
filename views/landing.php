<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <?php  require("components/header_landpage.php") ?>


    <section class="hero">
        <article class="hero__title" data-aos="fade" data-aos-delay="500" data-aos-duration="850">
            <h1>WATCH YOUR MOVIES IN ONE PLACE</h1>
        </article>

        <article class="hero__infos" data-aos="fade" data-aos-delay="1000" data-aos-duration="850">
            <h3>Start your free trial and watch thousands of movies wherever you want starting <br> at <em> 6.99</em>$
                /month</h3>
            <!-- <h3>Start your free trial and watch thousands of movies wherever you want starting</h3>
            <h3 class="price"> at <em> 6.99</em>$ /month</h3> -->
        </article>

        <article class="buttonLP">
            <button class="cta__noradius--yb">
                <a href="index.php?action=signup">START YOUR FREE TRIAL</a>
            </button>
        </article>
    </section>

    <section class="hero__bottom" >
        <a href="#firstSection">
        <svg class="downIcon"  width="30" height="12" viewBox="0 0 30 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L15 11L29 1" stroke="#f0f1f3" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        </a>
    </section>

    <section class="landingpage">
        <section class="watch" id="firstSection">
            <article class="watch__text">
                <h3 class="watch__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Watch movies
                    wherever, <br> whenever you want.</h3>
                <h3 class="watch__body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">On your
                    desktop,
                    on your laptop, your tablet or your phone, we are
                    available everywhere, on any device. No need for internet connection to watch your favorite movies,
                    juste download them and whatch themlater.</h3>
            </article>

            <article class="watch__mockup">
                <img src="assets/img/mockups.png" alt="" class="watch__mockup" data-aos="fade" data-aos-duration="2000"
                    data-aos-delay="200">
            </article>

        </section>

        <section class="movies">
            <article class="movies__mockup">
                <img src="assets/img/movies_posters.png" alt="" class="movies__mockup" data-aos="fade"
                    data-aos-duration="2000" data-aos-delay="200">
            </article>

            <article class="movies__text">
                <h3 class="movies__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">New movies
                    continuously added.</h3>
                <h3 class="movies__body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">We are doing
                    everything we can to provide you new movies as often as possible.
                    We have a large library of movies that will grow weeks after weeks.</h3>
            </article>


        </section>

        <section class="download">
            <article class="download__text">
                <h3 class="download__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Download
                    all
                    your favorite movies to watch them offline.</h3>
                <h3 class="download__body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">Our large
                    number of servers allow you to download up to 10Go of movies on your
                    account for 15 days.</h3>


            </article>

            <article class="download__mockup">
                <img src="assets/img/phone_download.png" alt="" class="download__mockup" data-aos="fade"
                    data-aos-duration="800" data-aos-delay="200">
                <!-- <img src="assets/img/download-icon.gif" alt="" class="download__gif"> -->
            </article>



        </section>
        <article class="buttonDown">
            <button class="cta__noradius--yb">
                <a href="index.php?action=signup">7 FREE DAYS</a>
            </button>
        </article>

    </section>

    <?php  require("components/footer.php") ?>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>