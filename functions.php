<?php


 include 'inc/theme-options.php';



function add_styles () {

wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

wp_enqueue_style( 'aos'  , get_template_directory_uri() . '/assets/vendor/aos/aos.css');
wp_enqueue_style( 'bootstrap.min'   , get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap-icons'  , get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
wp_enqueue_style( 'boxicons'  , get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
wp_enqueue_style( 'glightbox'  , get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
wp_enqueue_style( 'remixicon'  , get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
wp_enqueue_style( 'swiper'  , get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
wp_enqueue_style( 'style'  , get_template_directory_uri() . '/assets/css/style.css');

}

add_action('wp_enqueue_scripts', 'add_styles');





















function add_script () {

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array(), 'false', true );
wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), 'false', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 'false', true );
wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), 'false', true );
wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), 'false', true );
wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), 'false', true );
wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), 'false', true );
wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/main.js', array(), 'false', true );




}
add_action('wp_enqueue_scripts', 'add_script');
































