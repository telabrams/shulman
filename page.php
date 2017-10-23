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
             <?php
                    // Start the loop.
                while ( have_posts() ) : the_post();

        ?>
                <div class="col-md-12 news_one_item img_container">
                    <?php the_content();?>
                </div>
                 <?php
      // End of the loop.
    endwhile;
    ?>
            </div>
        </div>

    </section>
    
   
<?php get_footer();?>