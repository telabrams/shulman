<?php
/**
 * Template Name: Контакти
 */

?>
<?php get_header();?>
<section class="contacts">

        <div class="container">
            <div class="breadcrumbs">
                 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                <h1><?php the_title();?></h1>
            </div>
        </div>

        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="contacts_icon">
                        <div class="icon_item">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span><?php echo get_theme_mod( 'true_footer_copyright_address' );?></span>
                        </div>
                        <div class="icon_item">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <span><?php echo get_theme_mod( 'true_footer_copyright_tel' );?></span>
                        </div>
                        <div class="icon_item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span><?php echo get_theme_mod( 'true_footer_copyright_email' );?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                   <?php echo do_shortcode('[contact-form-7 id="48" title="Контактна форма 1"]');?>
                </div>
            </div>
        </div>

        <div id="map"><?php echo do_shortcode('[wpgmza id="1"]');?></div>

    </section>

<?php get_footer();?>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA82yeRybJuw-9ehyzCuHLgSqmLFMuqhKY&callback=initMap"
            async defer></script> -->