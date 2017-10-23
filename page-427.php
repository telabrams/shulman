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
                    $query = new WP_Query('cat=3&nopaging=1');
                    if( $query->have_posts() ){
                        while( $query->have_posts() ){ $query->the_post();
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
                        }
                        wp_reset_postdata(); // сбрасываем переменную $post
                    }
                    else echo 'Записей нет.';
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