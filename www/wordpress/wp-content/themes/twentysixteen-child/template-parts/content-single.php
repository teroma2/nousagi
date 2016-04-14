<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"><!-- .entry-header -->
		<?php twentysixteen_post_thumbnail(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php twentysixteen_excerpt(); ?>

	</header><!-- /.entry-header -->

	<footer class="entry-footer"><!-- .entry-footer -->
		<?php twentysixteen_entry_meta(); ?>
	</footer><!-- /.entry-footer -->



	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
