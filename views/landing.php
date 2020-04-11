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
        <path d="M1 1L15 11L29 1" stroke="#f0f1f3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</section>

<section class="landingpage">
<section class="watch">
    <article>
    <p class="watch__title">Watch movies wherever, wheneveryou want.</p>
    <p class="watch__body">On your desktop, on your laptop, your tablet or your phone, we are available everywhere, on any device. 
No need for internet connection to watch your favorite movies, juste download them and whatch them later.</p>
    </article>

    <article class="mockup">
        <img src="assets/img/mockups.png" alt="" class="mockups">
    </article>
</section>
</section>
    <?php  require("components/footer.php") ?>

</body>
</html>