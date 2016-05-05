<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<li class="search-entry-list-item">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- .lentry-list-item -->
	<dl class="c-entry-meta">
		<dt class="c-entry-thumbnail">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</dt>
		<dd class="c-entry-information">

			<?php if ( 'post' === get_post_type() ) : ?>

				<footer class="entry-footer">
					<?php twentysixteen_entry_meta(); ?>
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->

			<?php else : ?>

				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
							get_the_title()
						),
						'<footer class="entry-footer"><span class="edit-link">',
						'</span></footer><!-- .entry-footer -->'
					);
				?>

			<?php endif; ?>

			<?php the_title( sprintf( '<h2 class="c-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</dd>
	</dl>
	<!-- /.c-entry-item -->

	<div class="c-entry-summary">
		<?php twentysixteen_excerpt(); ?>
	</div>



</article><!-- #post-## -->
</li>
