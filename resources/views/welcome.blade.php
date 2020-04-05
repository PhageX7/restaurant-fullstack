<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <section id="welcome">
    <div class="welcome-menu">
      <div class="logo">
        <img src="/img/burger-logo-png-5.png">
      </div>
      <div class="menu">
        <div class="menu-title">
          Menu
        </div>
        <ul class="links">
          <li>
            <a href="#">Menu</a>
          </li>
          <li>
            <a href="#">Waitlist</a>
          </li>
          <li>
            <a href="#">Offers</a>
          </li>
          <li>
            <a href="#">Gift Cards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>
        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          Westgate Plaza <br>
          235 Main Street<br>
          Edison, NJ 11563
        </div>
        <div class="phone-number">
          <a href="tel:7097539541">(709)-753-9541</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">
        NEW
      </div>
      <h1>Billy Burger</h1>
      <img  class="burger-fries" src="/img/burger-png-the-eatery-steak-special-16.png" alt="burger and fries image">
    </div>
  </section>
  <section id="information">
    <div class="restaurant-image">
      <img src="img/restaurant-image.jpg" alt="">
    </div>
    <div class="info">
      <h2>We started from the bottom in 1987</h2>
      <div class="paragraghs">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <a class="about-link" href="#">
        Learn more about our restaurant
        <div class="circle-right">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
        </div>
      </a>
    </div>
  </section>
  <section id="food-preview">
    <h2>We have everything you need to kill your hunger</h2>
    <div class="button-rounded">
      View Our Menu
    </div>
    <div class="container">
      <div class="left-btn">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Starters
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/CHIPS.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Burgers
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/burger-png-the-eatery-steak-special-16.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Entrees
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/entr%C3%A9e-png-2.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Sides
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/potato_chips_PNG82.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Desserts
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/218-2181118_fudge-stuffed-cookie-dairy-queen-desserts.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Servings
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/bbq-ribs-png-13.png" alt="Starter foods">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Drinks
            </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
            <div class="food-image">
              <img src="/img/drink-clipart-transparent-background-18.png" alt="Starter foods">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    </body>
</html>
