<?php
    $widget_args = array(
        'before_title'  => '<h6><small>',
        'after_title'   => '</small></h6>'
    );

    $check_footer_theme_copyright_enable = get_theme_mod('regina_lite_footer_theme_copyright_enable', 1);
    $text_footer_theme_copyright_message = get_theme_mod('regina_lite_footer_copyright', esc_html__( '&copy; Copyright 2016. All Rights Reserved.', 'regina-lite' ) )

?>
<footer id="footer" style="clear:both;">
    <div class="container">
        <div class="row">
            <?php if( is_active_sidebar( 'footer-sidebar-1' ) ){ ?>
                <div class="col-sm-6 col-xs-12">
                    <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                </div><!--.col-sm-3-->
            <?php  } else { ?>
                <div class="col-sm-6 col-xs-12">
                    <?php the_widget( 'WP_Widget_Text', 'title=Sobre o BCT&text=O Curso de Bacharelado Interdisciplinar em Ciência e Tecnologia tem características generalista e interdisciplinar, que visam agregar uma formação geral, humanística e científica ao aprofundamento no campo das Ciências e das Tecnologias, que inclui a matemática, as ciências naturais e a computação.', $widget_args ); ?>
                </div><!--/.col-sm-3-->
            <?php } ?>
<!--
            <?php //if( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
                <div class="col-sm-3 col-xs-12">
                    <?php //dynamic_sidebar( 'footer-sidebar-2' ); ?>
                </div><!--.col-sm-3-->
            <?php //} else { ?>
<!--                <div class="col-sm-3 col-xs-12">
                    <?php //the_widget( 'WP_Widget_Meta', NULL, $widget_args ); ?>
                </div><!--.col-sm-3-->
            <?php //} ?>

            <?php if( is_active_sidebar( 'footer-sidebar-3' ) ){ ?>
                <div class="col-sm-3 col-xs-12">
                    <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                </div><!--.col-lg-3-->
            <?php } else { ?>
                <div class="col-sm-3 col-xs-12">
                    <?php the_widget( 'Regina_Lite_Widget_Contact', 'title=Contato&phone=(98) 3272-9166&email=ufmabict@gmail.com&facebook_link=#&twitter_link=#&linkedin_link=#&youtube_link=#&instagram_link=#', $widget_args ); ?>
                </div><!--.col-lg-3-->
            <?php } ?>

            <?php if( is_active_sidebar( 'footer-sidebar-4' ) ) { ?>
                <div class="col-sm-3 col-xs-12">
                    <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                </div><!--.col-lg-3-->
            <?php } else { ?>
                <div class="col-sm-3 col-xs-12">
                    <?php the_widget( 'Regina_Lite_Widget_Address', 'title=Endereço&address=Av. dos Portugueses, 1966<br />Vila Bacanga, São Luís - MA<br />Cep: 65065-545<br />Ufma - Paulo Freire', $widget_args ); ?>
                </div><!--.col-lg-3-->
            <?php } ?>
            <a href="#" class="back-to-top"><span class="nc-icon-glyph arrows-1_bold-up"></span></a>
        </div><!--.row-->
    </div><!--.container-->
</footer><!--#footer-->

<footer id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <?php
                    if( $check_footer_theme_copyright_enable == 1 ) {
                        echo sprintf( 'Theme: <a href="%s" target="_blank" rel="nofollow" title="Regina Lite">Regina Lite</a>', esc_url( 'http://www.machothemes.com/themes/regina-lite/' ) ) . ' &middot; ';
                        echo 'Built by: <a href="https://www.machothemes.com/" rel="dofollow" title="Professional Responsive WordPress Themes">Macho Themes</a> ';
                    }
                    if( $text_footer_theme_copyright_message ) {
                        echo $text_footer_theme_copyright_message;
                    }
                ?>
            </div>
        </div><!--.row-->
    </div><!--.container-->
</footer><!--#sub-footer-->
<?php wp_footer(); ?>
</body>
</html>
