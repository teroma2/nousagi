<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if (!is_home()) : ?><!-- !is_home -->

	<li class="archive-entry-list-item">
	<!-- .lentry-list-item -->
		<dl class="entry-meta">
			<dt class="entry-list-thumbnail">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			</dt>
			<dd class="entry-list-information">
				<ul class="entry-list-information-sub">
					<li class="entry-list-category">
						<?php the_category(' '); ?>
					</li>
					<li class="entry-list-date">
						<?php the_time('Y/m/d（D）'); ?>
					</li>
				</ul>
			</dd>
		</dl>
	<!-- /.entry-list-item -->

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-list-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</li>

<?php else : ?><!-- !is_home -->
<aside id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- .list-item-entry -->
		<dl class="list-item-entry">
			<dt class="list-entry-thumbnail">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			</dt>
			<dd class="list-entry-information">
				<ul class="list-entry-information-sub">
					<li class="list-entry-category">
						<?php the_category(' '); ?>
					</li>
					<li class="list-entry-date">
						<?php the_time('Y/m/d（D）'); ?>
					</li>
				</ul>
				<h2 class="list-entry-title">
					<a href="<?php the_permalink() ?>">
						<?php the_title(); ?></a>
				</h2>
			</dd>
		</dl>
	<!-- /.list-item-entry -->


</aside><!-- #post-## -->

<?php endif; ?><!-- /!is_home -->