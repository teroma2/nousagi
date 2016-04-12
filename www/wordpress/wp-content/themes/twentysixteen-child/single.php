<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
    <?php if ( comments_open() || get_comments_number() ): ?>
      <?php comments_template(); ?>
    <?php endif; ?>
    <?php if ( is_singular( 'attachment' ) ): ?>
        the_post_navigation( array(
          'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
    <?php elseif ( is_singular( 'post' ) ): ?>
			▼記事のページャー
			<ul class="post-pager">
				<li class="post-title">
					<?php previous_post_link('&laquo; %link', '前の記事へ', true); ?>
				</li>
				<li class="post-title">
					<?php next_post_link('%link &raquo;', '次の記事へ', true); ?>
				</li>
			</ul>
    <?php endif; ?>
    <?php endwhile; ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
