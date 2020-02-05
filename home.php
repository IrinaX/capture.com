<?php
include_once ('index.php') ?>
<main>
    <section class="download-app">
        <div class="container">
            <div class="download-app__wrap">
                <div class="download-app__content">
                    <h1 class="download-app__title">Take photos like a pro.</h1>
                    <p class="download-app__subtitle">with only your iphone and capture app you can take stunning image
                        like a
                        professional photographer.
                    </p>
                    <button class="btn download-app__btn-for-iphone">
                        Iphone App
                    </button>
                    <button class="btn download-app__btn-for-android">Android App</button>
                </div>
            </div>
        </div>
    </section>
    <section class="brands">
        <div class="container">
            <div class="brands__wrap">
                <img src="images/google_logo.png" alt="">
                <img src="images/facebook_logo.png" alt="">
                <img src="images/yahoo_logo.png" alt="">
                <img src="images/paypal_logo.png" alt="">
            </div>
        </div>
    </section>

    <section class="container">
        <div class="about-app">
            <img src="images/iphone.png" alt="Iphone" class="about-app__img">
            <div class="about-app__content">
                <h1>Capture unforgettable moments.</h1>
                <p>Seuismod ligula ipsum vulputate tellus quisque dictum tortor at purus faucibus tincidunt,
                    pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="about-app__opportunities">
                    <div class="about-app__opportunities-item">
                        <img src="images/icon1.png" alt=""> Euismod ligula ipsum vulputate tellus.
                    </div>
                    <div class="about-app__opportunities-item">
                        <img src="images/icon2.png" alt=""> Morbi non efficitur nibh sit amet est eros.
                    </div>
                    <div class="about-app__opportunities-item">
                        <img src="images/icon3.png" alt=""> Fusce faucibus ante liberonec luctus egestas.
                    </div>
                    <div class="about-app__opportunities-item">
                        <img src="images/icon4.png" alt=""> Quisque pretium malesuada ornare.
                    </div>
                    <div class="about-app__opportunities-item">
                        <img class="px-1" src="images/icon5.png" alt=""> Cras interdum vestibulum dolor.
                    </div>
                </div>
                <button class="about-app__btn">about video</button>
                <a href="#" class="about-app__link">get the app</a>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="features__item">
                    <img src="images/f_icon1.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
                <div class="features__item">
                    <img src="images/f_icon2.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
                <div class="features__item">
                    <img src="images/f_icon3.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="features__item">
                    <img src="images/f_icon4.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
                <div class="features__item">
                    <img src="images/f_icon5.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
                <div class="features__item">
                    <img src="images/f_icon6.png" alt="" class="features__img">
                    <h3>Malesuada fames turpis.</h3>
                    <p>vel ultrices mauris libero id diam. vivamus tellus sagittis facilisis nisi quis mollis risus
                        quisque ultrices elit.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once ('swiper.php')
    ?>
    <section class="feedback">
        <div class="container">
            <h3>Join Our Liste and stay updated!</h3>
            <form action="form_processing.php" method="post">
                <input type="email" name="userEmail" id="userEmail" placeholder="Enter your email">
                <button type="submit" onclick="alertSuccess()"></button>
            </form>
        </div>
    </section>
</main>
