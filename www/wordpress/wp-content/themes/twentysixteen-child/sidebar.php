<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if (!is_home()) : ?>
  トップの時のサイドバーだよ
<?php else : ?>

  <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  	<aside id="secondary" class="sidebar widget-area" role="complementary"><!-- .sidebar .widget-area -->
  		<?php dynamic_sidebar( 'sidebar-1' ); ?>
  	</aside><!-- /.sidebar .widget-area -->
  <?php endif; ?>

  <!-- 特定のタグ(ピックアップ)が表示された時 -->
  <?php $wp_query = new WP_Query(array('tag_id' => 'pickup')); ?>
  <?php if ($wp_query->have_posts()): ?>

    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <?php endwhile; ?>

  <?php else : ?>

  <?php endif; ?>
  <!-- /特定のタグ(ピックアップ)が表示された時 -->

<?php endif; ?>
