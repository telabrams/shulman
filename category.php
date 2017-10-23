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
              <div id="ajax-posts" class="row">
        <?php
            $postsPerPage = 3;
            $cat_id = get_query_var('cat');
            $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $postsPerPage,
                    'cat' => $cat_id
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
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
                                    <span><?php the_time('F j, Y');?></span>
                                </div>
                            </div>
                        </a>
                    </div>

         <?php
                endwhile;
        wp_reset_postdata();
         ?>
    </div>
                    
                </div>
                <div class="clearfix"></div>
                <div class="button_more" id="more_posts" data-category="<?php echo $cat_id; ?>">
                    Показати ще
                </div>
            </div>
        </div>

    </section>
    
<?php get_footer();?>