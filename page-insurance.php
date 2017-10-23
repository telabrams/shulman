<?php
/**
 * Template Name: Шаблон для сторінки страхування
 */

?>
<?php get_header();?>
 <section class="green_card">

        <div class="banner container-max">
            <div class="description">
            <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                ?>
                <div class="container">
                    <h1>
                       <?php the_content();?>
                    </h1>
                    <a class="calc_n" href="<?php echo the_field('anchor');?>">Розрахувати автоцивілку</a>
                </div>
            </div>
            <div class="img_container">
                <?php the_post_thumbnail();?>
            </div>
        </div>
 <?php
      // End of the loop.
    endwhile;
    ?>
        <div class="online container-max">
            <div class="container">
                <h2>про Автоцивілку</h2>
                <div class="subheader col-md-8">
                    поліс ОСЦПВ – це обов’язкове страхування на випадок заподіяння шкоди життю, здоров'ю або майну, авто інших осіб при експлуатації ТЗ.
                </div>
            </div>
        </div>

        <div class="limit">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 bordered">
                        <div class="header">
                            <h3>Ліміти в межах яких буде здійснюватися відшкодування шкоди</h3>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-10">
                                <div class="row clearfix cut">
                                    <div class="col-md-6">
                                        <div class="limit_item">
                                            <p>Ліміт покриття завданих збитків
                                                авто / майну потерпілого</p>
                                            <span>
                                                100 000 <span class="arno">₴</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="limit_item">
                                            <p>Ліміт покриття завданої шкоди
                                                життю / здоров'ю потерпілого</p>
                                            <span>
                                                200 000 <span class="arno">₴</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="limit_banner container-max" style="background: url(<?php echo get_template_directory_uri();?>/images/limit_banner.jpg) no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-10">
                        <div class="grey_block">
                            <h3 class="tac">Якщо Ви будете винуватцем ДТП, то ваша СК,
                                в межах лімітів, відшкодує вартість лікування
                                та вартість ремонту авто потерпілій стороні.</h3>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-10">
                        <div class="grey_block">
                            <div class="info_graphic">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div class="top"></div>
                                <div class="bottom"></div>
                            </div>
                            <h3 class="fs125">Страховка розповсюджується на любого водія,
                                який керує, зазначеним в полісі, авто.
                                <br>
                                <br>
                                Поліс діє на території України
                                <br>
                                <br>
                                Франшиза – сума коштів, яку не виплачує СК.
                                Є чотири варіанти франшизи: : 0 <span class="arno">₴</span>, 500 <span class="arno">₴</span>, 1000 <span class="arno">₴</span> та 2000 <span class="arno">₴</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-10">
                        <div class="grey_block">
                            <h3 class="tac">При франшизі 500/1000/2000 <span class="arno">₴</span> у випадку ДТП,
                                Ви будете доплачувати потерпілому, власними коштами, 500/1000/2000 <span class="arno">₴</span>.
                                При франшизі 0 <span class="arno">₴</span>  - всю суму збитків відшкодовує СК.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_cuvilka container-max">
            <div class="container">
                <h2>про Добровільну цивілку / ДЦВ</h2>
                <div class="row clearfix">
                    <div class="col-md-10">
                        <div class="subheader">
                            поліс ДЦВ – додаткове підвищення лімітів відповідальності / покриття.
                        </div>
                        <div class="grey_block">
                            <div class="info_graphic">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div class="top"></div>
                                <div class="bottom"></div>
                            </div>
                            <h3>Розмір додаткового ліміту вибирається самостійно
                                і варіюється від 50 000 <span class="arno">₴</span> до 1 000 000 <span class="arno">₴</span>
                                <br>
                                <br>
                                Рішення про придбання, чи не придбання полісу ДЦВ прийметься страхувальником добровільно.
                            </h3>
                        </div>
                        <div class="grey_block">
                            <h3>В разі ДТП та пошкодження дорогого авто,
                                ліміту 100 000 <span class="arno">₴</span> (згідно полісу ОСЦПВ) може бути не достатньо.
                                Тому ліміт відповідальності краще завчасно підвищити,
                                придбавши поліс ДЦВ.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="online">
                    <div class="container">
                        <h3>ЯК ПРИДБАТИ АВТОЦИВІЛКУ НА САЙТІ ?</h3>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-sm-6">
                                <div class="square_wrapper">
                                    <div class="square">
                                        <div class="number">1</div>
                                        <div class="description">
                                            <a href="<?php echo get_page_link('82');?>">
                                                Розрахуйте
                                            </a>
                                            <a href="<?php echo get_page_link('82');?>">
                                                ОСЦПВ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 with_line">
                                <div class="square_wrapper">
                                    <div class="square">
                                        <div class="number">2</div>
                                        <div class="description">
                                            Виберіть кращий
                                            варіант
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 with_line">
                                <div class="square_wrapper">
                                    <div class="square">
                                        <div class="number">3</div>
                                        <div class="description">
                                            Надайте
                                            інформацію
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="square_wrapper">
                                    <div class="square">
                                        <div class="number">4</div>
                                        <div class="description">
                                            Отримайте <br>
                                            поліс
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sea container-max" style="background: url(<?php echo get_template_directory_uri();?>/images/sea_banner.png) no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-10">
                    <h2>Чому саме СА Яша Шульман?</h2>
                    <h3>Тому що це логічно.</h3>
                    <div class="text">
                        Займайтеся своєю сім’єю, роботою, <br>
                        приділяйте більше часу своїм хобі, коханкам…
                        <br>
                        <br>
                        <span>Вашою страховкою, її наслідками <br>та іншою рутиною - займемося ми.</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php get_footer();?>