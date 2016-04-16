<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

  <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
    <aside id="secondary" class="sidebar widget-area" role="complementary"><!-- .sidebar .widget-area -->
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- /.sidebar .widget-area -->
  <?php endif; ?>



<?php if (!is_home()) : ?>

<?php else : ?>

  <!-- 特定のタグ(ピックアップ)が表示された時 -->
  <?php $wp_query = new WP_Query(array(
    'tag_id' => 'pickup',
    'posts_per_page' => 4
    ));
  ?>
  <?php if ($wp_query->have_posts()): ?>

      <div class="list-entry-pickup">
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <dl class="list-item-entry">
          <dt class="list-entry-thumbnail">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
          </dt>
          <dd class="list-entry-information">
            <ul class="list-entry-information-sub">
              <li class="list-entry-category"><?php the_category(' '); ?></li>
              <li class="list-entry-date"><?php the_time('Y/m/d'); ?></li>
            </ul>
            <p class="list-entry-title">
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
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

<?php endif; ?>
