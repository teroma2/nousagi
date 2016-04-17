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

		<!-- .list-item-entry -->
			<dl class="list-item-entry">
				<dt class="list-entry-thumbnail">
					<a href="<?php the_permalink() ?>"><?php twentysixteen_post_thumbnail(); ?></a>
					<h1 class="list-entry-title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h1>
				</dt>
				<dd class="list-entry-information">
					<ul class="list-entry-information-sub">
						<li class="list-entry-category"><?php the_category(' '); ?></li>
						<li class="list-entry-date"><span class="genericon genericon-day"></span><?php the_time('Y/m/d（D）'); ?></li>
					</ul>
				</dd>
			</dl>
		<!-- /.list-item-entry -->

	</header><!-- /.entry-header -->

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
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer"><!-- .entry-footer -->
		<?php
			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</footer><!-- /.entry-footer -->


</article><!-- #post-## -->
