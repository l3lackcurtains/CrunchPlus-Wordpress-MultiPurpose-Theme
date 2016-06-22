<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crunchplus
 */
?>

<div class="col-md-3 footer-sidebar1">
	<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) { dynamic_sidebar( 'footer-sidebar-1' ); }?>
</div>
<div class="col-md-3 footer-sidebar2">
	<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { dynamic_sidebar( 'footer-sidebar-2' ); }?>
</div>
<div class="col-md-3 footer-sidebar3">
	<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) { dynamic_sidebar( 'footer-sidebar-3' ); }?>
</div>
<div class="col-md-3 footer-sidebar4">
	<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) { dynamic_sidebar( 'footer-sidebar-4' ); }?>
</div>