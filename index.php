<?php get_header();
?>

<!-- ===  ===  = Hero Section ===  ===  = -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
<?php
$value = get_field( 'texth1', 'option' );

;
?>
        <h1><?php echo $value;
?></h1>
        <h2>We are team of talented designers making websites with latest technology</h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=BEbVddOm2X8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ===  ===  = About Section ===  ===  = -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">
                        <?php if ( have_rows( 'addabout_section', 'option' ) ):?>
                        <?php while( have_rows ( 'addabout_section', 'option' ) ): the_row();
// Load sub field value.
$icon = get_sub_field( 'add_icon' );
$addtext = get_sub_field( 'addtext' );
$addnum = get_sub_field( 'addnum' );

?>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">

                            <div class="count-box">
                                <i class="<?php echo $icon; ?>"></i>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $addnum; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $addnum;
?></span>
                                <p><?php echo $addtext;
?></p>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $addnum; ?>" data-purecounter-duration="1" class="purecounter"></span>

                            </div>
                        </div>
                        <?php endwhile;
?>
                    </div> <?php endif;
?>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>

        </div>

        </div>
    </section><!-- End About Section -->

    <!-- ===  ===  = About Boxes Section ===  ===  = -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <?php if ( have_rows( 'add_about_us', 'option' ) ):?>
                <?php while( have_rows ( 'add_about_us', 'option' ) ): the_row();
// Load sub field value.
$h5text = get_sub_field( 'h5text' );
$ptext = get_sub_field( 'ptext' );
$add_icon_au = get_sub_field( 'add_icon_au' );
$addimageas = get_sub_field( 'addimage' );
?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="<?php echo $addimageas['url']; ?>" class="card-img-top" alt="<?php echo $addimageas['alt']; ?>">
                        <div class="card-icon">
                            <i class="<?php echo $add_icon_au; ?>"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href=""><?php echo $h5text;
?></a></h5>
                            <p class="card-text"><?php echo $ptext;
?></p>
                        </div>

                    </div>
                </div>
                <?php endwhile;
?>
            </div> <?php endif;
?>

        </div>

    </section><!-- End About Boxes Section -->

    <!-- ===  ===  = Clients Section ===  ===  = -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <?php if ( have_rows( 'add_about_us', 'option' ) ):?>
                <?php while( have_rows ( 'add_image_client', 'option' ) ): the_row();

$imageclients = get_sub_field( 'imageclients' );
?>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo $imageclients['url']; ?>" class="img-fluid" alt="<?php echo $imageclients['alt']; ?>">

                </div><?php endwhile;
?>
                <?php endif;
?>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ===  ===  = Features Section ===  ===  = -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <i class="ri-sun-line"></i>
                        <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <i class="ri-store-line"></i>
                        <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            </ul>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ===  ===  = Services Section ===  ===  = -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <?php
$h1valueservices = get_field( 'title_section', 'option' );
$paragraphservices = get_field( 'paragraph_section', 'option' );

;
?>

            <div class="section-title">
                <h2><?php echo $h1valueservices;
?></h2>
                <p><?php echo $paragraphservices;
?></p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <?php if ( have_rows( 'add_service', 'option' ) ):?>
                <?php while( have_rows ( 'add_service', 'option' ) ): the_row();
// Load sub field value.
$iconServices = get_sub_field( 'add_icon' );
$add_tittel = get_sub_field( 'add_tittel' );
$textServices = get_sub_field( 'add_paragraph' );

?>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">

                        <i class="<?php echo $iconServices; ?>"></i>
                        <h4><a href="#"><?php echo $add_tittel;
?></a></h4>

                        <p><?php echo $textServices;
?></p>

                    </div>
                </div>

                <?php endwhile;
?>
                <?php endif;
?>
            </div>
    </section><!-- End Services Section -->

    <!-- ===  ===  = Testimonials Section ===  ===  = -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'add_testimonial', 'option' ) ):?>
                    <?php while( have_rows ( 'add_testimonial', 'option' ) ): the_row();
// Load sub field value.
$h3title = get_sub_field( 'h3title' );
$h4title = get_sub_field( 'h4title' );
$texttestimonial = get_sub_field( 'texttestimonial' );
$imgtestimonial = get_sub_field( 'imgtestimonial' );

?>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo $imgtestimonial['url']; ?>" class="testimonial-img" alt="<?php echo $imgtestimonial['alt']; ?>">
                            <h3><?php echo $h3title;
?></h3>
                            <h4><?php echo $h4title;
?></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $texttestimonial;
?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <?php endwhile;
?>
                    <?php endif;
?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ===  ===  = Portfolio Section ===  ===  = -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ===  ===  = Team Section ===  ===  = -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
            </div>

            <div class="row">
                <?php if ( have_rows( 'add_team_section', 'option' ) ):?>
                <?php while( have_rows ( 'add_team_section', 'option' ) ): the_row();
// Load sub field value.
$team_title_img = get_sub_field( 'team_title_img' );
$team_title_sub_img = get_sub_field( 'team_title_sub_img' );
$add_img_team = get_sub_field( 'add_img_team' );
?>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="<?php echo $add_img_team['url']; ?>" class="img-fluid" alt="<?php echo $add_img_team['alt']; ?>"></div>
                        <div class="member-info">
                            <h4><?php echo $team_title_img;
?></h4>
                            <span><?php echo $team_title_sub_img;
?></span>
                            <div class="social">
                                <?php if ( have_rows( 'add_social_media_icon', 'option' ) ):?>
                                <?php while( have_rows ( 'add_social_media_icon', 'option' ) ): the_row();
// Load sub field value.
$add_icon_media = get_sub_field( 'add_icon_media' );
$add_icon_url = get_sub_field( 'add_icon_url' );
?>
                                <a href="<?php echo $add_icon_url; ?>"><i class="<?php echo $add_icon_media; ?>"></i></a>
                                <?php endwhile;
?>
                                <?php endif;
?>

                            </div>
                        </div>
                    </div>
                </div><?php endwhile;
?>
                <?php endif;
?>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ===  ===  = Contact Section ===  ===  = -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up"">

    <div class=" section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A202 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 07<br>+1 6678 254445 99</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php get_footer();
?>