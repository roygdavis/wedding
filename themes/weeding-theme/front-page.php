<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<section>
    <div class="container">
        <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="background: linear-gradient(rgba(0,123,255,0.2), rgba(0,123,255,0.2)), url(&quot;<?php bloginfo('template_url') ?>/images/dna.png&quot;) center / cover;height: 500px;">
            <div class="row">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h1 class="text-uppercase fw-bold mb-3 text-white"><?php bloginfo('name') ?></h1>
                        <p class="mb-4 text-white">By donor conceived people, for donor conceived people, donors, their families, and all those impacted by it.</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container h-100 position-relative" style="top: -50px;">
        <div class="row gy-5 gy-lg-0 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card">
                    <div class="card-body pt-5 p-4">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon" style="top: -30px;"><i class="bi bi-chat-right-heart"></i></div>
                        <h4 class="card-title">Support</h4>
                        <h6 class="text-muted card-subtitle mb-2">Free counselling and resources</h6>
                        <p class="card-text">As a donor conceived person we can provide you with a free counselling service to help you through your emotional journey.  Our counsellors are dedicated to donor conceived people.</p>
                    </div>
                    <div class="card-footer p-4 py-3"><a href="/support">Learn more&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body pt-5 p-4">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon" style="top: -30px;"><i class="bi bi-pencil-square"></i></div>
                        <h4 class="card-title">Educate</h4>
                        <h6 class="text-muted card-subtitle mb-2">Better outcomes for all</h6>
                        <p class="card-text">The Donor Conceived Register is on a mission to ensure that everyone impacted by donor conception get the correct and modern information they deserve.</p>
                    </div>
                    <div class="card-footer p-4 py-3"><a href="/educate">Learn more&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body pt-5 p-4">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon" style="top: -30px;"><i class="bi bi-megaphone-fill"></i></div>
                        <h4 class="card-title">Advocate</h4>
                        <h6 class="text-muted card-subtitle mb-2">Fighting for your rights</h6>
                        <p class="card-text">Discovering you are donor conceived can be both a traumatic and fulfilling experience.  Ensuring consistent experience for all donor conceived people is at the heart of what we do.</p>
                    </div>
                    <div class="card-footer p-4 py-3"><a href="/advocate">Learn more&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1>Latest news</h1>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2">
          <?php $args = array('orderby' => 'date', 'order' => 'DESC','posts_per_page' => 4); $query = new WP_Query($args);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <div class="col">
            <div class="d-flex flex-column flex-lg-row">
              <div class="w-100">
                <!--<img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">-->
                <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'rounded img-fluid d-block w-100 fit-cover', 'style' => 'height: 200px;' ) ); ?>
              </div>
              <div class="py-4 py-lg-0 px-lg-4">
                <a href="<?php echo get_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                </a>
                <p><?php echo get_the_excerpt($post->ID); ?></p>
              </div>
            </div>
          </div>
          <?php endwhile;
          else : _e('Sorry, no posts matched your criteria.', 'textdomain');
          endif;
          wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                    <i class="fs-2 bi bi-collection p-2"></i>
                    </div>
                    <div class="px-3">
                        <h4>About the register</h4>
                        <p>This voluntary contact register, formerly known as UK DonorLink (UKDL), was set up to enable people conceived through donated sperm or eggs, their donors and half-siblings to exchange information and, where desired, to contact each other.</p>
                        <a href="/about/about-the-register/">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                      <i class="fs-2 bi bi-people-fill p-2"></i>
                    </div>
                    <div class="px-3">
                        <h4>Our community</h4>
                        <p>We are a growing community that has a growing presence on various online channels and also face-to-face. We have a growing number of registrants with a wide range of experiences and opinions about being donor conceived, donors and the industry.</p>
                        <a href="/about/our-community/">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                      <i class="fs-2 bi bi-fingerprint p-2"></i>
                    </div>
                    <div class="px-3">
                        <h4>DNA testing</h4>
                        <p>If you are thinking about proceeding with DNA testing, there are two main routes to be considered; through the DCR itself (through Kings College) or through a commercial DNA testing company.  We'll explain the differences and the best way to proceed.</p>
                        <a href="/about/dna-testing/">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>