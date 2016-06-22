<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crunchplus
 */

?>
<div class="blog_post_classic">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if( has_post_thumbnail() ):	?>
			<div class="post-thumbnail">
				<img src="<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); echo $img[0]; ?>" alt="">
			</div>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="blog-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="cplus_sep"></div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php crunchplus_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<div class="entry-content">
		 <?php
	         the_content();
         ?>
	</article>
</div>