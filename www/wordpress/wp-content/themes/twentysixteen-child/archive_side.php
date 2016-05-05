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