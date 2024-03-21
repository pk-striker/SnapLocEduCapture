<?php include_once('./backend/generate_token.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halloween Landing Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://assets.codepen.io/7773162/swiper-bundle.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
    <link rel="stylesheet" href="../../assets/css/echo.css" />
  </head>
<body>
    <!-- HEADER -->
 <header class="header" id="header">
  <nav class="nav container">
    <a href="#" class="nav__logo"> Spooky </a>
    <div class="nav__menu" id="nav-menu">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="#home" class="nav__link active-link">Graveyard</a>
        </li>
        <li class="nav__item">
          <a href="#about" class="nav__link">Track Record</a>
        </li>
        <li class="nav__item">
          <a href="#trick" class="nav__link">Services</a>
        </li>
        <li class="nav__item">
          <a href="#new" class="nav__link">Know More</a>
        </li>
        <a href="#" class="button button--ghost">Support</a>
      </ul>
      <div class="nav__close" id="nav-close">
        <i class='bx bx-x'></i>
      </div>
      <img src="https://assets.codepen.io/7773162/nav-img.png" alt="" class="nav__img">
    </div>
    <div class="nav__toggle" id="nav-toggle">
      <i class='bx bx-grid-alt'></i>
    </div>
  </nav>
</header>
<main class="main">
  <!-- HOME -->
  <section class="home container" id="home">
    <div class="swiper home-swiper">
      <div class="swiper-wrapper">
        <!-- HOME SLIDER 1 -->
        <section class="swiper-slide">
          <div class="home__content grid">
            <div class="home__group">
              <img src="https://assets.codepen.io/7773162/home3-img.png" alt="" class="home__img">
              <div class="home__indicator"></div>
              <div class="home__details-img">
                <h4 class="home__details-title">Captain Sem</h4>
                <span class="home__details-subtitle">Veteran Spooky Ghost</span>
              </div>
            </div>
            <div class="home__data">
              <h3 class="home__subtitle">#1 Top Scariest Ghost</h3>
              <h1 class="home__title">RESPAWN <br> THE SPOOKY <br> SKULL </h1>
              <p class="home__description">In search for cute little puppy, Captain Sem has come back from his tragic death. With his hogwarts certified power he promise to be a hero for all of <strong>ghostkind. </strong></p>
              <div class="home__buttons">
                <a href="#" class="book--now">
                  <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
                </a>
                <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- HOME SLIDER 2 -->
        <section class="swiper-slide">
          <div class="home__content grid">
            <div class="home__group">
              <img src="https://assets.codepen.io/7773162/home2-img.png" alt="" class="home__img">
              <div class="home__indicator"></div>
              <div class="home__details-img">
                <h4 class="home__details-title">Adino & Grahami</h4>
                <span class="home__details-subtitle">No words can describe them</span>
              </div>
            </div>
            <div class="home__data">
              <h3 class="home__subtitle">#2 top Best duo</h3>
              <h1 class="home__title">BRING BACK <br> MY COTTON <br> CANDY </h1>
              <p class="home__description">Adino steals cotton candy from his brother and eats them all in one bite, a hungry beast. Grahami can no longer contain his anger towards Adino. </p>
              <div class="home__buttons">
                <a href="#" class="book--now">
                  <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
                </a>
                <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- HOME SLIDER 3 -->
        <section class="swiper-slide">
          <div class="home__content grid">
            <div class="home__group">
              <img src="https://assets.codepen.io/7773162/home1-img.png" alt="" class="home__img">
              <div class="home__indicator"></div>
              <div class="home__details-img">
                <h4 class="home__details-title">The Labu “Reiza”</h4>
                <span class="home__details-subtitle">The Living Pumpkin</span>
              </div>
            </div>
            <div class="home__data">
              <h3 class="pumpkin__subtitle">#3 Top Scariest Ghost 2020</h3>
              <h1 class="home__title">UOOOO <br> TRICK OR <br> TREAT!! </h1>
              <p class="home__description">Hi I’m Reiza, people call me “The Labu” currently I’m trying to learn something new, building my own bike with parts only made from Malaysia. </p>
              <div class="home__buttons">
                <a href="#" class="book--now">
                  <img src="https://assets.codepen.io/7773162/svgviewer-output+%282%29_2.svg" alt="" />
                </a>
                <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- CATEGORY -->
  <section class="section category">
    <h2 class="section__title">Favorite Scare <br> Category </h2>
    <div class="category__container container grid">
      <div class="category__data">
        <img src="https://assets.codepen.io/7773162/category1-img.png" alt="" class="category__img">
        <h3 class="category__title">Ghosts</h3>
        <p class="category__description">Choose the ghosts, the scariest there are.</p>
      </div>
      <div class="category__data">
        <img src="https://assets.codepen.io/7773162/category2-img.png" alt="" class="category__img">
        <h3 class="category__title">Pumpkins</h3>
        <p class="category__description">You look at the scariest pumpkins there is.</p>
      </div>
      <div class="category__data">
        <img src="https://assets.codepen.io/7773162/category3-img.png" alt="" class="category__img">
        <h3 class="category__title">Witch Hat</h3>
        <p class="category__description">Pick the most stylish witch hats out there.</p>
      </div>
    </div>
  </section>
  <!-- ABOUT -->
  <section class="section about" id="about">
    <div class="about__container container grid">
      <div class="about__data">
        <h2 class="section__title about__title">About Halloween <br> Night </h2>
        <p class="about__description">Night of all the saints, or all the dead, is celebrated on October 31 and it is a very fun international celebration, this celebration comes from ancient origins, and is already celebrated by everyone. </p>
        <a href="#" class="book--now">
          <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
        </a>
      </div>
      <img src="https://assets.codepen.io/7773162/about-img.png" alt="" class="about__img">
    </div>
  </section>
  <!-- TRICK OR TREAT -->
  <section class="section trick" id="trick">
    <h2 class="section__title">Trick Or Treat</h2>
    <div class="trick__container container grid">
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat1-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Toffee</h3>
        <span class="trick__subtitle">Candy</span>
        <span class="trick__price">$11.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat2-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Bone</h3>
        <span class="trick__subtitle">Accessory</span>
        <span class="trick__price">$8.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat3-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Scarecrow</h3>
        <span class="trick__subtitle">Accessory</span>
        <span class="trick__price">$15.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat4-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Candy Cane</h3>
        <span class="trick__subtitle">Candy</span>
        <span class="trick__price">$7.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat5-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Pumpkin</h3>
        <span class="trick__subtitle">Candy</span>
        <span class="trick__price">$19.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
      <div class="trick__content">
        <img src="https://assets.codepen.io/7773162/trick-treat6-img.png" alt="" class="trick__img">
        <h3 class="trick__title">Ghost</h3>
        <span class="trick__subtitle">Accessory</span>
        <span class="trick__price">$17.99</span>
        <button class="button trick__button">
          <i class='bx bx-cart-alt trick__icon'></i>
        </button>
      </div>
    </div>
  </section>
  <!-- DISCOUNT -->
  <section class="section discount">
    <div class="discount__container container grid">
      <div class="discount__data">
        <h2 class="discount__title">50% Discount <br> On New Products </h2>
        <a href="#" class="book--now">
          <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
        </a>
      </div>
      <img src="https://assets.codepen.io/7773162/discount-img.png" alt="" class="discount__img">
    </div>
  </section>
  <!-- NEW ARRIVALS -->
  <section class="section new" id="new">
    <h2 class="section__title">New Arrivals</h2>
    <div class="new__container container">
      <div class="swiper new-swiper">
        <div class="swiper-wrapper">
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new1-img.png" alt="" class="new__img">
            <h3 class="new__title">Haunted House</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$14.99</span>
              <span class="new__discount">$29.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new2-img.png" alt="" class="new__img">
            <h3 class="new__title">Halloween Candle</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$11.99</span>
              <span class="new__discount">$21.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new3-img.png" alt="" class="new__img">
            <h3 class="new__title">Witch Hat</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$4.99</span>
              <span class="new__discount">$9.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new4-img.png" alt="" class="new__img">
            <h3 class="new__title">Rip</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$24.99</span>
              <span class="new__discount">$44.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new5-img.png" alt="" class="new__img">
            <h3 class="new__title">Terrifying Crystal Ball</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$5.99</span>
              <span class="new__discount">$12.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
          <div class="new__content swiper-slide">
            <div class="new__tag">
              <img src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg" alt="" />
            </div>
            <img src="https://assets.codepen.io/7773162/new6-img.png" alt="" class="new__img">
            <h3 class="new__title">Witch Broom</h3>
            <span class="new__subtitle">Accessory</span>
            <div class="new__prices">
              <span class="new__price">$7.99</span>
              <span class="new__discount">$14.99</span>
            </div>
            <button class="button new__button">
              <i class='bx bx-cart-alt new__icon'></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- OUR NEWSLETTER -->
  <section class="section newsletter">
    <div class="newsletter__container container">
      <h2 class="section__title">Our Newsletter</h2>
      <p class="newsletter__description"> Promotion new products and sales. Directly to your inbox </p>
      <form action="" class="newsletter__form">
        <input type="text" placeholder="Enter your email" class="newsletter__input">
        <a href="#" class="book--now">
          <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
        </a>
      </form>
    </div>
  </section>
</main>
<!-- SCROLL UP -->
<a href="#" class="scrollup" id="scroll-up">
  <i class='bx bx-up-arrow-alt scrollup__icon'></i>
</a>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js'></script>
    <script src="../../assets/js/script.js"></script>
  </body>
</html>