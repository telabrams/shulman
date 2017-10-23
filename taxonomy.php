<?php get_header();?>
 
 <section class="news_all">

        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </ul>
                <h1><?php  wp_title('');?></h1>
            </div>
        </div>

        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                <?php
            while ( have_posts() ) : the_post();

                ?>
                    <div class="news_item">
                        <a href="<?php the_permalink();?>">
                            <div class="row clearfix">
                                <div class="col-md-2">
                                    <div class="img_container">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h3><?php the_title();?></h3>
                                    <?php the_excerpt();?>
                                    <span><?php the_date();?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php


            endwhile; // End of the loop.
            wp_reset_query(); 
            ?>
                    
                </div>
                <div class="clearfix"></div>
                <div class="button_more">
                    Показати ще
                </div>
            </div>
        </div>

    </section>
<?php get_footer();?>