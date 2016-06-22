<?php
if( !function_exists(vc_map)){
	return;
}
vc_add_param("vc_row", array(
  "type" => "dropdown",
"group" => "Row Width",
  "class" => "",
  "heading" => "Type",
  "param_name" => "type",
  "value" => array(
    "In Container" => "container_in",
    "Full Width Container" => "container_full_width",
  )
));
add_action( 'init', 'cplus_sc_VC_init' );
function cplus_sc_VC_init() {
	require_once(ABSPATH . 'wp-admin/includes/plugin.php');
	if(is_plugin_active('js_composer/js_composer.php')) {
		add_shortcode('button', 'cplus_sc_button_shortcode');
		vc_map(array(
			'name' => __("Button", "cplus"),
			"base" => "button",
			"icon" => "icon-wpb-ui-button",
			"category" => __('cplus elements', 'cplus'),
			"description" => __('Styled button element', 'cplus'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Link", "cplus"),
					"param_name" => "link",
				),
				array(
					"type" => "textfield",
					"heading" => __("Text", "cplus"),
					"param_name" => "text",
				),
				array(
					"type" => 'colorpicker',
					"heading" => __("Text Color", "cplus"),
					"param_name" => "color",
				),
				array(
					"type" => 'colorpicker',
					"heading" => __("Background Color", "cplus"),
					"param_name" => "bgcolor",
				),
			),
		));

		add_shortcode('image_with_text', 'cplus_sc_image_with_text');
		vc_map(array(
			'name' => __("Image With Text", "cplus"),
			"base" => "image_with_text",
			"icon" => "icon-wpb-ui-image",
			"category" => __('cplus elements', 'cplus'),
			"description" => __('Add Text in Image Background', 'cplus'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Text", "cplus"),
					"param_name" => "text",
				),
				array(
					"type" => "textfield",
					"heading" => __("Link", "cplus"),
					"param_name" => "link",
				),
				array(
					"type" => "textfield",
					"heading" => __("Image URL", "cplus"),
					"param_name" => "img_url",
				),
				array(
					"type" => 'colorpicker',
					"heading" => __("Text Color", "cplus"),
					"param_name" => "color",
				),
			),
		));

	}
}

