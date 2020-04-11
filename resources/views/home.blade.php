
@extends('layouts/landing')

@section('content')
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
@endsection
