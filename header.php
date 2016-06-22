<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crunchplus
 */

global $post;
$meta_data = get_post_meta( $post->ID, 'cplus_page_meta', true );
$cplus_ed_revslider = @$meta_data['cplus_ed_revslider'];
$cplus_ed_breadcrumb = @$meta_data['cplus_ed_breadcrumb'];
$cplus_header_bar_opacity = @$meta_data['cplus_header_bar_opacity'];
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Header Top Bar -->
<div class="header-top-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<?php
								if ( is_front_page() && is_home() ) : ?>
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								<?php else : ?>
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								<?php endif;	?>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse">
						<?php
	                        wp_nav_menu( array(
	                            'theme_location'    => 'primary',
	                            'menu_class'           => 'nav navbar-nav navbar-right',
	                            'depth'             => 4,
	                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                            'walker'            => new cplus_navwalker()
	                        ) );
	                    ?>
	                    <div class="top-bar-nav">
	                    	<ul>
	                    		<li>
	                    			<a href="#facebook"><i class="fa fa-search"></i></a>
	                    		</li>
	                    		<li>
	                    			<a href="#facebook"><i class="fa fa-shopping-cart"></i></a>
	                    		</li>
	                    	</ul>
	                    </div>
	                    </div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- /Header Top Bar -->
<div class="main-wrapper">

<div class="Header-bottom-bar">
<div class="container"><div class="row">
<?php if( $cplus_ed_revslider): ?>
	<style>
		<?php if( $cplus_ed_revslider): ?>
		.main-wrapper{
			padding: 0;
		}
		<?php endif; ?>
		<?php if( $cplus_header_bar_opacity && $cplus_header_bar_opacity<100): $cplus_header_bar_opacity/=100; ?>
			.header-top-bar{
				background-color: rgba( 0,41,62, <?php echo $cplus_header_bar_opacity ?>);
			}
		<?php endif; ?>
		
	</style>
	<div class="slider-wrapper">
		<!-- Slider Revolution -->
		<?php 
			$slider_name = $meta_data['cplus_revslider'];
			putRevSlider($slider_name, $post->ID);
		?>
	</div></div></div>
<?php endif; ?>
<?php if( $cplus_ed_breadcrumb): ?>
	<div class="breadcrumb-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="breadcrumb-title">Main Page</h2>
				</div>
				<div class="col-sm-6">
					<ul class="cplus-breadcrumb">
						<li>Home</li>
						<li>Main Page</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
