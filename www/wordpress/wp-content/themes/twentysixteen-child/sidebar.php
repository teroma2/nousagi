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
  <aside id="secondary" class="sidebar widget-area" role="complementary">

<?php if (!is_home()) : ?>

  <!-- 特定のタグ(ピックアップ)が表示された時 -->
  <?php $wp_query = new WP_Query(array(
    'tag' => 'pickup',
    'posts_per_page' => 4
    ));
  ?>
  <?php if ($wp_query->have_posts()): ?>

      <div class="entry-list-pickup">
        <h2 class="entry-list-headline">PICK UP</h2>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
    <?php endwhile; ?>
      </div>

  <?php else : ?>
    コンテンツが見つかりませんでした。
  <?php endif;
    wp_reset_postdata();
   ?>
  <!-- /特定のタグ(ピックアップ)が表示された時 -->

<?php else : ?>



<?php endif; ?>

<!-- .sidebar .widget-area -->
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside><!-- /.sidebar .widget-area -->
<?php endif; ?>


