<?php
// Footer
?>
      </div><!-- .main-wrapper -->

      <footer id="colophon">
         <div class="inner-wrap">
           <div class="footer-widgets-wrapper">
              <div class="footer-widgets-area clearfix">
                 <div class="footer-box tg-one-third">
                    <?php
                    if ( !dynamic_sidebar( 'left-footer-area' ) ):
                    endif;
                    ?>
                 </div>
                 <div class="footer-box one-third">
                    <?php
                    if ( !dynamic_sidebar( 'center-footer-area' ) ):
                    endif;
                    ?>
                 </div>
                 <div class="footer-box one-third last">
                    <?php
                    if ( !dynamic_sidebar( 'right-footer-area' ) ):
                    endif;
                    ?>
                 </div>
              </div>
           </div>

            <div class="footer-bottom clearfix">
               <div class="copyright-info">
                   <?php echo esc_html( get_option( 'a001_footer_text' ) . ' ' . date('Y') ); ?>
               </div>

               <div class="footer-nav">
               <?php
                  if ( has_nav_menu( 'footer' ) ) {
                     wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) );
                  }
               ?>
               </div>
            </div>
         </div>
      </footer>
      <a href="#masthead" id="scroll-up"><i class="fa fa-angle-up"></i></a>
   </div><!-- #page -->
   <?php wp_footer(); ?>
</body>
</html>
