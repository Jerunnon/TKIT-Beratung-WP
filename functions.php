<?php

function theme_slug_setup() {
   add_theme_support( 'title-tag' );
   add_theme_support('custom-logo');
   add_theme_support('custom-header', array(
     'default-image' => get_template_directory_uri() . '/img/header-normal2.jpg',
     'flex-width' => true,
     'flex-height' => true,
   ));
}
add_action( 'after_setup_theme', 'theme_slug_setup' );


function enqueue_my_custom_styles(){
  wp_enqueue_style('style', get_template_directory_uri(). '/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('flexbox', get_template_directory_uri() . '/css/flexboxgrid.css', array(), '1.0.0', 'all');
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato|Raleway');
}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_styles');

// function pix_debug_head() {
//   echo '<!-- ####### Frisch eingefügt ###### -->';
// }
//
// add_action( 'wp_head', 'pix_debug_head' );

// function mytheme_customize_register( $wp_customize ) {
//    //All our sections, settings, and controls will be added here
//
//    //  =============================
//     //  = Select Box                =
//     //  =============================
//      $wp_customize->add_setting('themename_theme_options[header_select]', array(
//         'default'        => 'value2',
//         'capability'     => 'edit_theme_options',
//         'type'           => 'option',
//
//     ));
//     $wp_customize->add_control( 'example_select_box', array(
//         'settings' => 'themename_theme_options[header_select]',
//         'label'   => 'Select Something:',
//         'section' => 'themename_color_scheme',
//         'type'    => 'select',
//         'choices'    => array(
//             'value1' => 'Choice 1',
//             'value2' => 'Choice 2',
//             'value3' => 'Choice 3',
//         ),
//     ));
//    //  =============================
//        //  = Image Upload              =
//        //  =============================
//        $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
//            'default'           => 'image.jpg',
//            'capability'        => 'edit_theme_options',
//            'type'           => 'option',
//
//        ));
//
//        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
//            'label'    => __('Image Upload Test', 'themename'),
//            'section'  => 'themename_color_scheme',
//            'settings' => 'themename_theme_options[image_upload_test]',
//        )));
// }
// add_action( 'customize_register', 'mytheme_customize_register' );



?>
