<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'cplus_page_meta',
  'title'     => 'Page Settings',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Template Setting',
      'icon'  => 'fa fa-desktop',
      // begin: fields
      'fields' => array(
        // Drag and Drop
        array(
          'id'    => 'cplus_ed_breadcrumb',
          'type'  => 'switcher',
          'title' => 'Breadcrumb',
          'label' => 'Enable/Disable Breadcrumb',
          'default' => true,
        ),
        array(
          'id'    => 'cplus_text',
          'type'  => 'text',
          'title' => 'Breadcrumb',
          'label' => 'Enable/Disable Breadcrumb',
          'default' => 'hello',
        ),
        array(
          'id'    => 'cplus_ed_revslider',
          'type'  => 'switcher',
          'title' => 'Revolution Slider',
          'label' => 'Enable Revolution slider',
          'desc'  => 'Please disable breadcrumbs',
          'default' => false,
        ),
        array(
          'id'      => 'cplus_revslider',
          'type'    => 'text',
          'title'   => 'Revolution Slider Alias Name',
          'dependency' => array( 'cplus_ed_revslider', '==', '1' ), // dependency rule
        ),
        array(
          'id'      => 'cplus_revslider_under_header',
          'type'  => 'switcher',
          'title'   => 'Revolution Slider Under Top Header bar',
          'default' => false,
          'dependency' => array( 'cplus_ed_revslider', '==', '1' ), // dependency rule
        ),
        array(
        'id'    => 'cplus_header_bar_opacity',
        'type'  => 'number',
        'title' => 'Header Bar Opacity',
        'default' => 100,
        'dependency' => array( 'cplus_ed_revslider', '==', '1' ), // dependency rule
      ),
       
      ), // end: fields
    ), // end: a section

  ),
);

CSFramework_Metabox::instance( $options );
