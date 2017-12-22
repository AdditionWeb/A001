<?php
/**
 * Template Name: Homepage
 *
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>

   <div class="icon-section">
   		<div class="inner-wrap clearfix">
   			<div class="icon-section-header">
          <?php if( !empty( get_option( 'a001_icon_section_title' ) ) ) { ?>
   				<h3><?php echo esc_html( get_option( 'a001_icon_section_title' ) ); ?></h3>
          <?php } ?>
          <?php if( !empty( get_option( 'a001_icon_section_description' ) ) ) { ?>
   				<div class="icon-section-description">
   					<p><?php echo get_option( 'a001_icon_section_description' ); ?></p>
   				</div>
          <?php } ?>
   			</div>
   			<div class="icon-section-columns clearfix">
   				<div class="icon-column one-fourth">
            <a href="<?php echo esc_url( get_option( 'a001_first_icon_url' ) ); ?>" title="<?php echo esc_html( get_option( 'a001_first_icon_title' ) ); ?>">
     					<span class="icons"><i class="fa fa-aw <?php echo esc_html( get_option( 'a001_first_icon' ) ); ?> fa-3x"></i></span>
     					<h5><?php echo esc_html( get_option( 'a001_first_icon_title' ) ); ?></h5>
            </a>
   					<p><?php echo esc_textarea( get_option( 'a001_first_icon_description' ) ); ?></p>
   				</div>
          <div class="icon-column one-fourth">
   					<a href="<?php echo esc_url( get_option( 'a001_second_icon_url' ) ); ?>" target="_blank" title="<?php echo esc_html( get_option( 'a001_second_icon_title' ) ); ?>">
              <span class="icons"><i class="fa fa-aw <?php echo esc_html( get_option( 'a001_second_icon' ) ); ?> fa-3x"></i></span>
   					  <h5><?php echo esc_html( get_option( 'a001_second_icon_title' ) ); ?></h5>
            </a>
   					<p><?php echo esc_textarea( get_option( 'a001_second_icon_description' ) ); ?></p>
   				</div>
          <div class="icon-column one-fourth">
            <a href="<?php echo esc_url( get_option( 'a001_third_icon_url' ) ); ?>" target="_blank" title="<?php echo esc_html( get_option( 'a001_third_icon_title' ) ); ?>">
              <span class="icons"><i class="fa fa-aw <?php echo esc_html( get_option( 'a001_third_icon' ) ); ?> fa-3x"></i></span>
              <h5><?php echo esc_html( get_option( 'a001_third_icon_title' ) ); ?></h5>
            </a>
            <p><?php echo esc_textarea( get_option( 'a001_third_icon_description' ) ); ?></p>
          </div>
          <div class="icon-column one-fourth last">
            <a href="<?php echo esc_url( get_option( 'a001_fourth_icon_url' ) ); ?>" target="_blank" title="<?php echo esc_html( get_option( 'a001_fourth_icon_title' ) ); ?>">
              <span class="icons"><i class="fa fa-aw <?php echo esc_html( get_option( 'a001_fourth_icon' ) ); ?> fa-3x"></i></span>
              <h5><?php echo esc_html( get_option( 'a001_fourth_icon_title' ) ); ?></h5>
            </a>
            <p><?php echo esc_textarea( get_option( 'a001_fourth_icon_description' ) ); ?></p>
          </div>
   			</div>
   		</div>
   	</div>
    <div class="cta-section">
    	<section>
    		<div class="call-to-action-content-wrapper clearfix" style="background-color:#4e4e4e;">
    			<div class="inner-wrap">
    				<h3><?php echo get_option( 'a001_cta_text' ); ?> <a class="call-to-action-button" href="<?php echo get_option( 'a001_cta_btn_url' ); ?>" title="#"><?php echo get_option( 'a001_cta_btn_text' ); ?></a></h3>
    			</div>
    		</div>
    	</section>
    </div>

   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>
