<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<!-- home -->
<header id="home" class="text-center text-white bg-secondary masthead">
  <div class="container">
    <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url') ?>/images/us.png" />
    <!-- <h1 style="margin-bottom: 0em">Roy & Carole's Wedding</h1> -->
  </div>
</header>

<!-- Our story -->
<section id="aboutus" class="text-white bg-primary mb-0">
  <div class="container">
    <h2 class="text-uppercase text-center text-white pt-5">Our story</h2>
    <hr class="star-light m-5" />
    <div class="row">
      <div class="col-lg-4 ms-auto">
        <h2>Carole</h2>
        <p class="lead">Freelancer is a free bootstrap theme. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
      </div>
      <div class="col-lg-4 me-auto">
        <h2>Roy</h2>  
        <p class="lead">Long commutes from Folkestone to the depths of West London every day called for the frequent need to walk above ground between train connections. This was enough for me to walk by a bar near my end of London (St Pancras) for the the app to just Happn to cross us. A few short messages about takeaways resulted in our first date at Spiritland KX. It was from that moment that I knew we had something. One heel-click and several dates later and we've never looked back!</p>
      </div>
    </div>
  </div>
</section>

<!-- location -->
<section id="location" class="bg-tertiary mb-0">
  <div class="container">
    <h2 class="text-uppercase text-center pt-5">Venue location</h2>
    <hr class="star-light m-5" />
    <div class="row">
        <div class="col-lg-4 ms-auto">
          <a href="https://goo.gl/maps/yiyrAFob6EvXKYteA" target="_blank">
            <img class="img-fluid d-block mx-auto mb-5" src="<?php bloginfo('template_url') ?>/images/map.png" />
          </a>
        </div>
        <div class="col-lg-4 me-auto">
            <p class="lead">Located in on the outskirts of Saltwood within the heart of the Kent Downs AONB - and not far from where we call home - is where you'll find the picturesque setting of Hayne House, its Orangery and Hunting Lodge. We felt that the location and natural landscape of the venue perfectly encaptulated why we chose this area of Kent to be our home and what better way to show it off then picking the perfect example!</p>
            <a class="text-secondary" href="https://haynehouse.co.uk/gallery/" target="_blank">Hayne House</a>
        </div>
    </div>
  </div>
</section>

<!-- places to stay -->
<section id="stay" class="portfolio bg-secondary">
  <div class="container">
      <h2 class="text-uppercase text-center text-primary pt-5">Places to stay</h2>
      <hr class="star-dark m-5" />
      <div class="row">
        <h3 class="text-center">Our favourites</h3>
        <div class="col-md-6 col-lg-4">
          <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-1" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
              <div class="text-center text-white my-auto portfolio-item-caption-content w-100">
                </div>
              </div>
            <img style="" class="img-fluid" src="<?php bloginfo('template_url') ?>/images/theviewhotel.jpg">
          </a>
        </div>
        <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-2" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100"><h3 class="text-white">Some text here</h3>
                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"></div>
            </div><img class="img-fluid" src="<?php bloginfo('template_url') ?>/images/10to12hotel.jpg" />
        </a></div>
        <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-3" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"><i class="fa fa-search-plus fa-3x"></i></div>
            </div><img class="img-fluid" src="<?php bloginfo('template_url') ?>/images/burlingtonhotel.jpg" />
        </a></div>
        <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-4" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"><i class="fa fa-search-plus fa-3x"></i></div>
            </div><img class="img-fluid" src="portfolio/game.png" />
        </a></div>
        <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"><i class="fa fa-search-plus fa-3x"></i></div>
            </div><img class="img-fluid" src="portfolio/safe.png" />
        </a></div>
        <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-bs-toggle="modal">
            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"><i class="fa fa-search-plus fa-3x"></i></div>
            </div><img class="img-fluid" src="portfolio/submarine.png" />
        </a></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>