<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) {
    exit;
}
// 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH . '/index.php';
    return;
}

include_once G5_THEME_PATH . '/head.php';
?>
<!-- Inspiro Slider -->
      <div
        id="slider"
        class="inspiro-slider arrows-large arrows-creative dots-creative"
        data-height-xs="360"
        data-autoplay-timeout="2600"
        data-animate-in="fadeIn"
        data-animate-out="fadeOut"
        data-items="1"
        data-loop="true"
        data-autoplay="true"
      >
        <!-- Slide 1 -->
        <div
          class="slide background-overlay-one"
          style="background-image:url('http://placehold.it/1600x550');"
        >
          <div class="container">
            <div class="slide-captions text-center">
              <!-- Captions -->
              <h6>PLACE YOUR MINI TITLE</h6>
              <div class="seperator seperator-small no-padding"></div>
              <h1 class="text-uppercase">PLACE YOUR SLIDE TITLE HERE</h1>
              <a class="btn btn-outline btn-light" href="#">Read more</a>
              <!-- end: Captions -->
            </div>
          </div>
        </div>
        <!-- end: Slide 1 -->
        <!-- Slide 2 -->
        <div
          class="slide background-overlay-one"
          style="background-image:url('http://placehold.it/1600x550');"
        >
          <div class="container">
            <div class="slide-captions text-center">
              <!-- Captions -->
              <h6>PLACE YOUR SECOND MINI TITLE</h6>
              <div class="seperator seperator-small no-padding"></div>
              <h1 class="text-uppercase">PLACE YOUR SECOND SLIDE TITLE HERE</h1>
              <a class="btn btn-outline btn-light" href="#">Read more</a>
              <!-- end: Captions -->
            </div>
          </div>
        </div>
        <!-- end: Slide 2 -->
      </div>
      <!--end: Inspiro Slider -->

      <!-- WELCOME -->
      <section class="p-b-0">
        <div class="container">
          <div
            class="heading-text heading-section text-center m-b-40"
            data-animate="fadeInUp"
          >
            <h2>WELCOME TO WIREFRAME POLO VERSION</h2>
            <span class="lead"
              >Create amam ipsum dolor sit amet, Beautiful nature, and rare
              feathers!.</span
            >
          </div>
          <div class="row" data-animate="fadeInUp">
            <div class="col-lg-12">
              <img
                class="img-fluid"
                src="/images/responsive-wireframe-1.jpg"
                alt="Welcome to POLO"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- end: WELCOME -->

      <!-- WHAT WE DO -->
      <section class="background-grey">
        <div class="container">
          <div
            class="heading-text heading-section text-center m-b-40"
            data-animate="fadeInUp"
          >
            <h2>SERVICES SECTION</h2>
            <span class="lead"
              >Create amam ipsum dolor sit amet, Beautiful nature, and rare
              feathers!.</span
            >
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon" data-animate="bounce infinite">
                  <a href="#"><i class="fa fa-car"></i></a>
                </div>
                <h4>Powerful template</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon" data-animate="pulse infinite">
                  <a href="#"><i class="fa fa-heart"></i></a>
                </div>
                <h4>Flexible Layouts</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon">
                  <a href="#"><i class="far fa-lightbulb"></i></a>
                </div>
                <h4>Retina Ready</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon">
                  <a href="#"><i class="fa fa-phone"></i></a>
                </div>
                <h4>100% Responsive Layout</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon">
                  <a href="#"><i class="fa fa-code"></i></a>
                </div>
                <h4>Clean Modern Code</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box medium fancy">
                <div class="icon" data-animate="flash infinite">
                  <a href="#"><i class="fa fa-life-ring"></i></a>
                </div>
                <h4>Free Updates & Support</h4>
                <p>
                  Lorem ipsum dolor sit amet, consecte adipiscing elit.
                  Suspendisse condimentum porttitor cursumus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END WHAT WE DO -->

      <!-- Portfolio -->
      <section id="page-content">
        <div class="container">
          <!-- Portfolio Filter -->
            <nav
              class="grid-filter gf-outline"
              data-layout="#portfolio"
            >
              <ul>
                <li class="active">
                  <a href="#" data-category="*">Show All</a>
                </li>
                <li><a href="#" data-category=".ct-branding">Branding</a></li>
                <li>
                  <a href="#" data-category=".ct-photography">Photography</a>
                </li>
                <li><a href="#" data-category=".ct-marketing">Marketing</a></li>
                <li><a href="#" data-category=".ct-media">Media</a></li>
                <li>
                  <a href="#" data-category=".ct-webdesign">Web design</a>
                </li>
              </ul>
              <div class="grid-active-title">Show All</div>
            </nav>
            <!-- end: Portfolio Filter -->
          <div class="portfolio">
            <!-- Portfolio -->
            <div
              id="portfolio"
              class="grid-layout portfolio-4-columns"
              data-margin="10"
            >
              <!-- portfolio item -->
              <div
                class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-slider">
                    <div
                      class="carousel dots-inside dots-dark arrows-dark"
                      data-items="1"
                      data-loop="true"
                      data-autoplay="true"
                      data-animate-in="fadeIn"
                      data-animate-out="fadeOut"
                      data-autoplay-timeout="1500"
                    >
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-photography ct-marketing ct-media"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a
                      title="Paper Pouch!"
                      data-lightbox="image"
                      href="images/portfolio/83l.jpg"
                      ><i class="fa fa-expand"></i
                    ></a>
                    <a href="portfolio-page-grid-gallery.html"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item large-width ct-photography ct-media ct-branding ct-Media ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-slider">
                    <div
                      class="carousel dots-inside-top arrows-only arrows-light dots-light"
                      data-items="1"
                      data-loop="true"
                      data-autoplay="true"
                      data-autoplay-timeout="1800"
                    >
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a href="portfolio-page-grid-gallery.html">
                      <h3>Let's Go Outside</h3>
                      <span>Illustrations / Graphics</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a href="portfolio-page-grid-gallery.html">
                      <h3>Last Iceland Sunshine</h3>
                      <span>Graphics</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a
                      title="Paper Pouch!"
                      data-lightbox="iframe"
                      href="https://www.youtube.com/watch?v=k6Kly58LYzY"
                      ><i class="fa fa-play"></i
                    ></a>
                    <a href="portfolio-page-grid-gallery.html"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-slider">
                    <div
                      class="carousel dots-inside dots-dark arrows-dark"
                      data-items="1"
                      data-loop="true"
                      data-autoplay="true"
                      data-animate-in="fadeIn"
                      data-animate-out="fadeOut"
                      data-autoplay-timeout="1500"
                    >
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                      <a href="#"
                        ><img src="http://placehold.it/600x400" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-photography ct-marketing ct-media"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a href="portfolio-page-grid-gallery.html">
                      <h3>Luxury Wine</h3>
                      <span>Graphics / Branding</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->

              <!-- portfolio item -->
              <div
                class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign"
              >
                <div class="portfolio-item-wrap">
                  <div class="portfolio-image">
                    <a href="#"
                      ><img src="http://placehold.it/600x400" alt=""
                    /></a>
                  </div>
                  <div class="portfolio-description">
                    <a href="portfolio-page-grid-gallery.html">
                      <h3>Last Iceland Sunshine</h3>
                      <span>Graphics</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- end: portfolio item -->
            </div>
            <!-- end: Portfolio -->
          </div>
        </div>
      </section>
      <!-- end: Portfolio -->

      <!-- COUNTERS -->
      <section class="background-grey p-t-150 p-b-150">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="text-center">
                <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                <div class="counter">
                  <span
                    data-speed="3000"
                    data-refresh-interval="50"
                    data-to="12416"
                    data-from="600"
                    data-seperator="true"
                  ></span>
                </div>
                <div class="seperator seperator-small"></div>
                <p>LINES OF CODE</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="text-center">
                <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                <div class="counter">
                  <span
                    data-speed="4500"
                    data-refresh-interval="23"
                    data-to="365"
                    data-from="100"
                    data-seperator="true"
                  ></span>
                </div>
                <div class="seperator seperator-small"></div>
                <p>CUPS OF COFFEE</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="text-center">
                <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                <div class="counter">
                  <span
                    data-speed="3000"
                    data-refresh-interval="12"
                    data-to="114"
                    data-from="50"
                    data-seperator="true"
                  ></span>
                </div>
                <div class="seperator seperator-small"></div>
                <p>FINISHED PROJECTS</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="text-center">
                <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                <div class="counter">
                  <span
                    data-speed="4550"
                    data-refresh-interval="50"
                    data-to="14825"
                    data-from="48"
                    data-seperator="true"
                  ></span>
                </div>
                <div class="seperator seperator-small"></div>
                <p>SATISFIED CLIENTS</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end: COUNTERS -->

      <!-- PRODUCT DETAILS -->
      <section class="p-t-150 p-b-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-b-30" style="height:556px">
              <div
                class="image-absolute"
                data-animate="fadeInLeft"
                data-animate-delay="800"
              >
                <img
                  src="/images/app-iphone-dark.png"
                  alt=""
                />
              </div>
              <div
                class="image-absolute"
                data-animate="fadeInLeft"
                data-animate-delay="400"
              >
                <img
                  src="/images/app-iphone-white.png"
                  alt=""
                />
              </div>
            </div>

            <div
              class="col-lg-6"
              data-animate="fadeInUp"
              data-animate-delay="1000"
            >
              <div class="m-b-40">
                <h1>PRODUCT SECTION</h1>
                <span class="lead"
                  >The most happiest time of the day!. Morbi sagittis, sem quis
                  lacinia faucibus, orci ipsum gravida tortor, vel interdum mi
                  sapien ut justo. Nulla varius consequat magna, id molestie
                  ipsum volutpat quis. A true story, that never been told!.
                  Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                  facilisis ut venenatis eu, sodales vel dolor.
                </span>
              </div>
              <a href="#" class="btn btn-dark"><span>Learn More</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- PRODUCT DETAILS -->

      <!-- PIE CHARTS -->
      <section class="background-grey p-b-60">
        <div class="container">
          <div class="heading-text heading-section text-center m-b-40">
            <h2>PIE CHARTS SECTION</h2>
            <span class="lead"
              >Beautiful nature, and rare feathers!. amam ipsum dolor sit
              amet.</span
            >
          </div>
          <div class="row">
            <div
              class="col-lg-3 text-center"
              data-animate="fadeInUp"
              data-animate-delay="100"
            >
              <div
                class="pie-chart"
                data-percent="90"
                data-color="#888"
                data-width="14"
              >
                <span class="percent"></span>
              </div>
              <h4>Performance</h4>
              <p>
                Lorem ipsum dolor sit amet, consecte adipiscing elit.
                Suspendisse condimentum cursumus.
              </p>
            </div>
            <div
              class="col-lg-3 text-center"
              data-animate="fadeInUp"
              data-animate-delay="200"
            >
              <div
                class="pie-chart"
                data-percent="65"
                data-color="#888"
                data-width="14"
              >
                <span class="percent"></span>
              </div>
              <h4>Content</h4>
              <p>
                Lorem ipsum dolor sit amet, consecte adipiscing elit.
                Suspendisse condimentum cursumus.
              </p>
            </div>
            <div
              class="col-lg-3 text-center"
              data-animate="fadeInUp"
              data-animate-delay="300"
            >
              <div
                class="pie-chart"
                data-percent="35"
                data-color="#888"
                data-width="14"
              >
                <span class="percent"></span>
              </div>
              <h4>Responsiove</h4>
              <p>
                Lorem ipsum dolor sit amet, consecte adipiscing elit.
                Suspendisse condimentum porttitor.
              </p>
            </div>
            <div
              class="col-lg-3 text-center"
              data-animate="fadeInUp"
              data-animate-delay="400"
            >
              <div
                class="pie-chart"
                data-percent="44"
                data-color="#888"
                data-width="14"
              >
                <span class="percent"></span>
              </div>
              <h4>Employees</h4>
              <p>
                Lorem ipsum dolor sit amet, consecte adipiscing elit.
                Suspendisse condimentum porttitor cursumus.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end: PIE CHARTS -->

      <!-- PRODUCT DETAILS 2 -->
      <section class="p-t-150 p-b-100">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-6"
              data-animate="fadeInUp"
              data-animate-delay="1000"
            >
              <div class="m-b-40">
                <h1>PRODUCT SECTION</h1>
                <span class="lead"
                  >The most happiest time of the day!. Morbi sagittis, sem quis
                  lacinia faucibus, orci ipsum gravida tortor, vel interdum mi
                  sapien ut justo. Nulla varius consequat magna, id molestie
                  ipsum volutpat quis. A true story, that never been told!.
                  Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                  facilisis ut venenatis eu, sodales vel dolor.
                </span>
              </div>
              <a href="#" class="btn btn-dark"><span>Learn More</span></a>
            </div>

            <div class="col-lg-6 m-b-30" style="height:556px">
              <div
                class="image-absolute"
                data-animate="fadeInRight"
                data-animate-delay="800"
              >
                <img
                  src="/images/apple-tablet-2.png"
                  alt=""
                />
              </div>
              <div
                class="image-absolute"
                data-animate="fadeInRight"
                data-animate-delay="400"
              >
                <img
                  src="/images/apple-tablet-1.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- PRODUCT DETAILS 2-->

      <section
        class="p-t-150 p-b-150"
        data-parallax-image="/images/parallax/1.jpg"
      >
        <div class="container">
          <div class="heading-text heading-section text-center m-b-40">
            <h2>PARALLAX SECTION</h2>
            <span class="lead"
              >Beautiful nature, and rare feathers!. amam ipsum dolor sit
              amet.</span
            >
          </div>
          <p class="lead text-center">
            We offer a range of services for both businesses and individuals
            companies, Beautiful nature, and rare feathers!. Morbi sagittis, sem
            quis lacinia faucibus, orci ipsum gravida tortor.
          </p>
        </div>
      </section>

      <!-- REVIEWS -->
      <section>
        <div class="container">
          <div class="heading-text heading-section text-center m-b-40">
            <h2>TESTIMONIAL SECTION</h2>
            <span class="lead"
              >Beautiful nature, and rare feathers!. amam ipsum dolor sit
              amet.</span
            >
          </div>
          <hr class="space" />
          <!-- Testimonials -->
          <div
            class="carousel equalize testimonial testimonial-box"
            data-margin="20"
            data-arrows="false"
            data-items="3"
            data-items-sm="2"
            data-items-xxs="1"
            data-equalize-item=".testimonial-item"
          >
            <!-- Testimonials item -->
            <div class="testimonial-item">
              <img src="http://placehold.it/70x70" alt="" />
              <p>
                Polo is by far the most amazing template out there! I literally
                could not be happier that I chose to buy this template!
              </p>
              <span>Alan Monre</span>
              <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
              <img src="http://placehold.it/70x70" alt="" />
              <p>
                Polo is by far the most amazing template out there! I literally
                could not be happier that I chose to buy this template!
              </p>
              <span>Alan Monre</span>
              <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
              <img src="http://placehold.it/70x70" alt="" />
              <p>
                The world is a dangerous place to live; not because of the
                people who are evil, but because of the people who don't do
                anything about it.
              </p>
              <span>Alan Monre</span>
              <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
              <img src="http://placehold.it/70x70" alt="" />
              <p>
                Art is the only serious thing in the world. And the artist is
                the only person who is never serious.
              </p>
              <span>Resa Smith</span>
              <span>Developer @Apple</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
              <img src="http://placehold.it/70x70g" alt="" />
              <p>
                The world is a dangerous place to live; not because of the
                people who are evil, but because of the people who don't do
                anything about it.
              </p>
              <span>Ariol Perry</span>
              <span>Creative Designer</span>
            </div>
            <!-- end: Testimonials item-->
          </div>
        </div>
      </section>
      <!-- end: REVIEWS -->

      <!-- BLOG -->
      <section class="background-grey p-b-40">
        <div class="container">
          <div class="heading-text heading-section text-center m-b-40">
            <h2>BLOG SECTION</h2>
            <span class="lead"
              >Beautiful nature, and rare feathers!. amam ipsum dolor sit
              amet.</span
            >
          </div>
          <div
            id="blog"
            class="grid-layout post-3-columns m-b-30"
            data-item="post-item"
          >
            <!-- Post item-->
            <div class="post-item border">
              <div class="post-item-wrap">
                <div class="post-image">
                  <a href="#">
                    <img alt="" src="http://placehold.it/600x400" />
                  </a>
                  <span class="post-meta-category"
                    ><a href="">Lifestyle</a></span
                  >
                </div>
                <div class="post-item-description">
                  <span class="post-meta-date"
                    ><i class="fa fa-calendar-o"></i>Jan 21, 2017</span
                  >
                  <span class="post-meta-comments"
                    ><a href=""
                      ><i class="fa fa-comments-o"></i>33 Comments</a
                    ></span
                  >
                  <h2><a href="#">Standard post with a single image </a></h2>
                  <p>
                    Curabitur pulvinar euismod ante, ac sagittis ante posuere
                    ac. Vivamus luctus commodo dolor porta feugiat. Fusce at
                    velit id ligula pharetra laoreet.
                  </p>

                  <a href="#" class="item-link"
                    >Read More <i class="fa fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
              <div class="post-item-wrap">
                <div class="post-image">
                  <a href="#">
                    <img alt="" src="http://placehold.it/600x400" />
                  </a>
                  <span class="post-meta-category"><a href="">Science</a></span>
                </div>
                <div class="post-item-description">
                  <span class="post-meta-date"
                    ><i class="fa fa-calendar-o"></i>Jan 21, 2017</span
                  >
                  <span class="post-meta-comments"
                    ><a href=""
                      ><i class="fa fa-comments-o"></i>33 Comments</a
                    ></span
                  >

                  <h2><a href="#">Standard post with a single image </a></h2>
                  <p>
                    Curabitur pulvinar euismod ante, ac sagittis ante posuere
                    ac. Vivamus luctus commodo dolor porta feugiat. Fusce at
                    velit id ligula pharetra laoreet.
                  </p>

                  <a href="#" class="item-link"
                    >Read More <i class="fa fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
              <div class="post-item-wrap">
                <div class="post-image">
                  <a href="#">
                    <img alt="" src="http://placehold.it/600x400" />
                  </a>
                  <span class="post-meta-category"><a href="">Science</a></span>
                </div>
                <div class="post-item-description">
                  <span class="post-meta-date"
                    ><i class="fa fa-calendar-o"></i>Jan 21, 2017</span
                  >
                  <span class="post-meta-comments"
                    ><a href=""
                      ><i class="fa fa-comments-o"></i>33 Comments</a
                    ></span
                  >

                  <h2><a href="#">Standard post with a single image </a></h2>
                  <p>
                    Curabitur pulvinar euismod ante, ac sagittis ante posuere
                    ac. Vivamus luctus commodo dolor porta feugiat. Fusce at
                    velit id ligula pharetra laoreet.
                  </p>

                  <a href="#" class="item-link"
                    >Read More <i class="fa fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- end: Post item-->
          </div>
        </div>
      </section>
      <!-- BLOG -->

      <!-- CLIENTS -->
      <section class="p-t-60">
        <div class="container">
          <div class="heading-text heading-section text-center">
            <h2>CLIENTS</h2>
            <span class="lead"
              >Our awesome clients we've had the pleasure to work with!
            </span>
          </div>
          <div class="carousel clients-carousel" data-items="6">
            <div>
              <a href="#"><img alt="" src="images/clients/1.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/2.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/3.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/4.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/5.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/6.png" /> </a>
            </div>
            <div>
              <a href="#"><img alt="" src="images/clients/7.png" /> </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end: CLIENTS -->

      <!-- TEAM -->
      <section class="background-grey">
        <div class="container">
          <div class="heading-text heading-section text-center">
            <h2>MEET OUR TEAM</h2>
            <p>
              Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse
              condimentum porttitor cursumus.
            </p>
          </div>
          <div class="row team-members m-b-40">
            <div class="col-lg-3">
              <div class="team-member">
                <div class="team-image">
                  <img src="http://placehold.it/260x260" />
                </div>
                <div class="team-desc">
                  <h3>Alea Smith</h3>
                  <span>Software Developer</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing tristique
                    hendrerit laoreet.
                  </p>
                  <div class="align-center">
                    <a class="btn btn-xs btn-slide btn-light" href="#">
                      <i class="fab fa-facebook-f"></i>
                      <span>Facebook</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="100"
                    >
                      <i class="fab fa-twitter"></i>
                      <span>Twitter</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="118"
                    >
                      <i class="fab fa-instagram"></i>
                      <span>Instagram</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="mailto:#"
                      data-width="80"
                    >
                      <i class="far fa-envelope"></i>
                      <span>Mail</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="team-member">
                <div class="team-image">
                  <img src="http://placehold.it/260x260" />
                </div>
                <div class="team-desc">
                  <h3>Ariol Doe</h3>
                  <span>Software Developer</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing tristique
                    hendrerit laoreet.
                  </p>
                  <div class="align-center">
                    <a class="btn btn-xs btn-slide btn-light" href="#">
                      <i class="fab fa-facebook-f"></i>
                      <span>Facebook</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="100"
                    >
                      <i class="fab fa-twitter"></i>
                      <span>Twitter</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="118"
                    >
                      <i class="fab fa-instagram"></i>
                      <span>Instagram</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="mailto:#"
                      data-width="80"
                    >
                      <i class="far fa-envelope"></i>
                      <span>Mail</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="team-member">
                <div class="team-image">
                  <img src="http://placehold.it/260x260" />
                </div>
                <div class="team-desc">
                  <h3>Emma Ross</h3>
                  <span>Software Developer</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing tristique
                    hendrerit laoreet.
                  </p>
                  <div class="align-center">
                    <a class="btn btn-xs btn-slide btn-light" href="#">
                      <i class="fab fa-facebook-f"></i>
                      <span>Facebook</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="100"
                    >
                      <i class="fab fa-twitter"></i>
                      <span>Twitter</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="118"
                    >
                      <i class="fab fa-instagram"></i>
                      <span>Instagram</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="mailto:#"
                      data-width="80"
                    >
                      <i class="far fa-envelope"></i>
                      <span>Mail</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="team-member">
                <div class="team-image">
                  <img src="http://placehold.it/260x260" />
                </div>
                <div class="team-desc">
                  <h3>Victor Loda</h3>
                  <span>Software Developer</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing tristique
                    hendrerit laoreet.
                  </p>
                  <div class="align-center">
                    <a class="btn btn-xs btn-slide btn-light" href="#">
                      <i class="fab fa-facebook-f"></i>
                      <span>Facebook</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="100"
                    >
                      <i class="fab fa-twitter"></i>
                      <span>Twitter</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="#"
                      data-width="118"
                    >
                      <i class="fab fa-instagram"></i>
                      <span>Instagram</span>
                    </a>
                    <a
                      class="btn btn-xs btn-slide btn-light"
                      href="mailto:#"
                      data-width="80"
                    >
                      <i class="far fa-envelope"></i>
                      <span>Mail</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end: TEAM -->

<?php
include_once G5_THEME_PATH . '/tail.php';
?>