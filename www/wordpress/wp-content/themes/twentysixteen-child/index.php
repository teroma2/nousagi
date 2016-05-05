<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 ?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- .latest-wrap -->
			<div class="entry-latest-wrap content-block">
        <?php if ( have_posts() ) : ?>
				<div class="entry-large-latest">
					<h2 class="c-entry-headline">NEW</h2>
					<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-large-latest_inner">
							<dl class="c-entry-meta">
								<dt class="c-entry-thumbnail"><?php twentysixteen_post_thumbnail(); ?></dt>
								<dd class="c-entry-information">
									<ul class="c-entry-information-sub">
										<li class="c-entry-category">	<?php the_category(' '); ?>
										</li>
										<li class="c-entry-date">
											<span class="genericon genericon-month"></span>
											<?php the_time('Y/m/d'); ?>
										</li>
									</ul>
									<h2 class="c-entry-title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</h2>
								</dd>
							</dl><?php the_excerpt(); ?>
							<div class="entry-list-content"><?php twentysixteen_excerpt(); ?></div>
						</div>
					</section><!-- #post-## -->
				</div>

				<div class="entry-list-latest"><!-- 2件目以降 -->	
					<h2 class="entry-list-headline">RECENT</h2>
          <?php while ( have_posts() ) : the_post(); ?>
						<?php if (!is_first()) : ?>
					<dl class="entry-list-item">
						<dt class="entry-list-thumbnail">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
						</dt>
						<dd class="entry-list-information">
            <p class="entry-list-category"><?php the_category(' '); ?></p>
							<p class="entry-list-date"><?php the_time('Y/m/d'); ?></p>
							<h4 class="entry-list-title">
								<a href="<?php the_permalink() ?>">
									<?php 
										if(mb_strlen($post->post_title)>20) { 
											$title= mb_substr($post->post_title,0,20) ; echo $title. '…' ; 
										} else { 
											echo $post->post_title;
										} 
									?>
								</a>
							</h4>

						</dd>
					</dl>
						<?php endif; ?>
					<?php endwhile; ?>
				</div><!-- 2件目以降 -->

				<?php endif; ?>

			</div>
			<!-- /.latest-wrap -->

			<div class="content-block top-pickup">
					<!-- 特定のタグ(ピックアップ)が表示された時 -->
				<?php $wp_query = new WP_Query(array(
				'tag' => 'pickup',
				'posts_per_page' => 4
				));
				?>
				<?php if ($wp_query->have_posts()): ?>
					<h2 class="entry-list-headline">PICK UP</h2>
					<div class="entry-list-pickup">
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<dl class="entry-list-item">
						<dt class="entry-list-thumbnail">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
						</dt>
						<dd class="entry-list-information">
							<ul class="entry-list-information-sub">
								<li class="entry-list-category"><?php the_category(' '); ?></li>
							</ul>
							<p class="entry-list-title">
								<a href="<?php the_permalink() ?>">
									<?php 
										if(mb_strlen($post->post_title)>20) { 
											$title= mb_substr($post->post_title,0,18) ; echo $title. '…' ; 
										} else { 
											echo $post->post_title;
										} 
									?>

								</a>
							</p>
						</dd>
					</dl>
					<?php endwhile; ?>
					</div>

				<?php else : ?>

					コンテンツが見つかりませんでした。

				<?php endif;
				wp_reset_postdata();
				?>
				<!-- /特定のタグ(ピックアップ)が表示された時 -->
			</div>


		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
