<?php get_header();?>
 
 <section class="news_one">

        <div class="container">
            <div class="breadcrumbs">
                   <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                <h1><?php the_title();?></h1>
            </div>
        </div>

        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
             <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                ?>
                <div class="news_one_item">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="img_container">
                                    <div class="date">

                                        <span><?php echo get_the_date('d'); ?></span>
                                        <p><?php echo get_the_date('M'); ?></p>
                                        <span><?php echo get_the_date('Y'); ?></span>
                                    </div>
                                    <?php the_post_thumbnail();?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                 <?php
      // End of the loop.
    endwhile;
    ?>
    </div>
            </div>
        </div>

    </section>
   
<?php get_footer();?>