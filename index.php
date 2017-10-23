
<?php get_header();?>
    <section class="main">
    <?php
    $args = array(
        'post_type' => 'banner',
        'showposts'=> '1'
    );
    $acsessuar = get_posts($args);
    $i = 0;
    foreach ($acsessuar as $post) :
        setup_postdata($post);
    ?>
        <div class="banner container-max">
            <div class="description">
                <div class="container">
                    <h1>
                       <?php the_title();?>
                    </h1>
                </div>
            </div>
            <div class="img_container">
                <?php the_post_thumbnail();?>
            </div>
        </div>
    <?php endforeach; ?>

        <div class="online container-max">
            <div class="container">
                <h2>Страхування Онлайн</h2>
                <div class="row clearfix">
                <?php
                    $args = array(
                        'post_type' => 'insurance_online',
                        'showposts'=> '4'
                    );
                    $acsessuar = get_posts($args);
                    $i = 0;
                    foreach ($acsessuar as $post) :
                        setup_postdata($post);
                    ?>
                    <div class="col-md-3 col-xs-6 car_icon">
                        <a href="<?php the_field('anchor');?>">
                            <div class="img_container">
                                <div class="img_wrapper">
                                    <?php the_post_thumbnail();?>
                                </div>
                            </div>
                            <div class="description"><?php the_title();?></div>
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>
                <h2 class="without_bottom">Як замовити поліс?</h2>
                <h3>Легко та невимушено. Всього 5 хвилин часу</h3>
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="square_wrapper">
                            <div class="square">
                                <div class="number">1</div>
                                <div class="description">
                                    розрахувати
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with_line">
                        <div class="square_wrapper">
                            <div class="square">
                                <div class="number">2</div>
                                <div class="description">
                                    Вибрати
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with_line">
                        <div class="square_wrapper">
                            <div class="square">
                                <div class="number">3</div>
                                <div class="description">
                                    Надати
                                    інформацію
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="square_wrapper">
                            <div class="square">
                                <div class="number">4</div>
                                <div class="description">
                                    Отримати
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="partners">
            <div class="container">
                <h2 class="without_bottom">Вибір серед СК партнерів</h2>
                <h3>Виключно надійні, виключно іноземні</h3>
                <div class="row clearfix">
                <?php
                    $args = array(
                        'post_type' => 'partners',
                        'showposts'=> '4'
                    );
                    $acsessuar = get_posts($args);
                    $i = 0;
                    foreach ($acsessuar as $post) :
                        setup_postdata($post);
                    ?>
                   <div class="col-md-3 col-sm-6">
                        <div class="img_container"><?php the_post_thumbnail();?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="road container-max">
            <img src="<?php echo get_template_directory_uri();?>/images/phones_with_road.png" alt="">
            <div class="container">
                <div class="row clearfix">
                    <!--<div class="img_container">-->
                    <!--<img src="images/phone.png" alt="">-->
                    <!--</div>-->
                    <div class="text">
                        <h2>Наші переваги</h2>
                        <ul>
                            <li>#ВсеОнлайн</li>
                            <li>#МаксимальноЗручно</li>
                            <li>#Надійність100%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php get_footer();?>