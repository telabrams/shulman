<?php
/**
 * Template Name: FAQ
 */

?>
<?php get_header(); ?>
<section class="faqs">

    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="faqs_tabs">
                    <!--                       <div class="tab button_more current-tab">Автоцивілка</div>-->
                    <!--                       <div class="tab button_more">Зелена карта</div>-->
                    <!--                       <div class="tab button_more">ДТП в Україні</div>-->
                    <!--                       <div class="tab button_more">ДТП за кордоном</div>-->

                    <?php
                    $faqs = get_terms(array(
                        'taxonomy' => 'faq-category',
                        'hide_empty' => false,
                    ));
                    $i = '0';
                    foreach ($faqs as $faq) {
                        if ($i == '0') {
                            $current = 'current-tab';
                        } else {
                            $current = '';
                        }
                        print '<div class="tab button_more ' . $current . '">' . $faq->name . '</div>';
                        $i++;
                    }
                    ?>
                </div>

                <?php

                foreach ($faqs as $faq){
                if ($i == '0') {
                    $current = 'current-tab';
                } else {
                    $current = '';
                }

                $args1 = array(
                    'post_type' => 'faq',
                    'showposts' => '-1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq-category',
                            'field' => 'term_id',
                            'terms' => $faq->term_id,
                        )
                    )
                );
                $i++;
                $acsessuar = get_posts($args1);
                print '<div class="question_block">';
                foreach ($acsessuar as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="question_item">
                        <div class="arrow"></div>
                        <span><?php the_title(); ?></span>
                        <div class="answer"><?php the_content(); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            }
            ?>




            <?php echo do_shortcode('[contact-form-7 id="57" title="Запитання-відповіді"]'); ?>
        </div>
    </div>
    </div>

</section>
<?php get_footer(); ?>
