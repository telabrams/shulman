    <footer>
    
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-3">
                    
                   <?php
    if ( function_exists('dynamic_sidebar') )
        dynamic_sidebar('sidebar');
?>
                    <p>
                        <?php echo get_theme_mod( 'true_footer_copyright_tel' );?><br>
                        <?php echo get_theme_mod( 'true_footer_copyright_email' );?>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="click">СА Яша Шульман <i class="fa fa-chevron-down" aria-hidden="true"></i></h4>
                    <div class="off">
                    <ul>
                        <?php 
                            wp_nav_menu( array(
                            'theme_location'  => 'footer_menu1',
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
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="click">Інформація <i class="fa fa-chevron-down" aria-hidden="true"></i></h4>
                    <div class="off">
                    <?php
echo strip_tags(wp_nav_menu(
        array('theme_location' => 'footer_menu2',
            'container_class' => 'user_menu',//custom container class
            'echo' => false,
            'items_wrap' => '%3$s<div class="clear"></div>')
), '<a><div>');
?></div>
                </div>
                <div class="col-md-3">
                    <h4 class="click">Страхові продукти <i class="fa fa-chevron-down" aria-hidden="true"></i></h4>
                    <div class="off">
                    <?php
echo strip_tags(wp_nav_menu(
        array('theme_location' => 'footer_menu3',
            'container_class' => 'user_menu',//custom container class
            'echo' => false,
            'items_wrap' => '%3$s<div class="clear"></div>')
), '<a><div>');
?></div>
                   <div class="calc">
                        калькулятор
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bottom">
            <div class="container">
                <div class="row clearfix">
                    <div class="left">
                        <a href="<?php echo get_theme_mod( 'true_footer_copyright_fb' );?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod( 'true_footer_copyright_youtube' );?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod( 'true_footer_copyright_g' );?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                    <div class="right">
                        <a href="http://web-intellectus.com/" target="_blank">Создание и разработка сайта<br>
                            © Intellectus-studio 2016</a>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>

   <?php wp_footer();?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96019718-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>