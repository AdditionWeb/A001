<?php

  function a001_new_widgets() {

    $args = array(
    'name'          => __( 'Left Footer Area', 'a001' ),
    'id'            => 'left-footer-area',
    'description'   => '',
          'class'         => '',
    'before_widget' => '',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );

    register_sidebar( $args );

    $args = array(
    'name'          => __( 'Center Footer Area', 'a001' ),
    'id'            => 'center-footer-area',
    'description'   => '',
          'class'         => '',
    'before_widget' => '',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );

    register_sidebar( $args );

    $args = array(
    'name'          => __( 'Right Footer Area', 'a001' ),
    'id'            => 'right-footer-area',
    'description'   => '',
          'class'         => '',
    'before_widget' => '',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );

    register_sidebar( $args );

}

add_action( 'widgets_init', 'a001_new_widgets', 11 );

 ?>
