<?php

function cplus_sc_button_shortcode($atts) {
	extract(shortcode_atts(array(
		'link' => '#',
		'text' => __('More', 'cplus'),
		'target' => '_self',
		'bgcolor' => '#191919',
		'color'   => '#fff'
	), $atts));
	$return_html = '<button class="btn2" href="'.$link.'" target="'.$target.'" style="background-color: '.$bgcolor.'; color: '.$color.'">'.$text.'</button>';
	return $return_html;
}

function cplus_sc_image_with_text($atts){
	extract(shortcode_atts(array(
		'link' => '#',
		'text' => __('Sample text', 'cplus'),
		'color'   => '#fff',
		'img_url' => ''
	), $atts));
	$return_html = '
		<div class="cat-box">
          <img src="'.$img_url.'" alt="">
          <div class="cat-details">
            <h2><a href="'.$link.'" style="color: '.$color.'; ">'.$text.'</a></h2>
          </div>
        </div>
	';
	return $return_html;
}
function cplus_sc_icon_box($atts){
	extract(shortcode_atts(array(
		'link' => '#',
		'text' => __('Sample text', 'cplus'),
		'color'   => '#fff',
		'img_url' => ''
	), $atts));
	$return_html = '
		<div class="cat-box">
          <img src="'.$img_url.'" alt="">
          <div class="cat-details">
            <h2><a href="'.$link.'" style="color: '.$color.'; ">'.$text.'</a></h2>
          </div>
        </div>
	';
	return $return_html;
}
add_shortcode('button', 'cplus_sc_button_shortcode');
add_shortcode('image_with_text', 'cplus_sc_image_with_text');
?>



