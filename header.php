<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('');?></title>
     <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/fav.png" type="image/x-icon">
    <?php wp_head();?>

<body <?php body_class();?>>

    <header>
    
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-1">
                    <div class="button">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                    <menu>
                        <ul>
                            <?php 
                wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'menu'            => '', 
                        'items_wrap' => '%3$s',
                        'container'       => false, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'echo'            => true,
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'depth'           => 0,
                        'walker'          => '',
                        ) );
                    ?>
                        </ul>
                    </menu>
                </div>
                <div class="col-xs-3 logo">
                    <div class="img_container">
                        <!--<a href="index.html"><img src="images/LOGO.gif" alt=""></a>-->
                        <a class="logo_handmade" href="/">
                            Яші Шульмана <span>страхова лавка</span>
                        </a>
                        <a href="/">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="tel">
                        <?php echo get_theme_mod( 'true_footer_copyright_tel' );?>
                    </div>
                    <div class="calc">
                        калькулятор
                    </div>
                    <div class="calculator_shadow">
                        <div class="container">
                            <div class="calculator_popup">
                                <div class="close"></div>
                                <a href="<?php echo get_page_link('82');?>">Розрахуваты Автоцивілку</a>
                                <a href="<?php echo get_page_link('73');?>">Розрахуваты Зелену Карту</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </header>

