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

  <?php if(is_category()): /* カテゴリーアーカイブ */ 
    get_template_part( '/archive_side', 'none' );
  ?>


  <?php endif; ?>


<!-- .sidebar .widget-area -->
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside><!-- /.sidebar .widget-area -->

<?php endif; ?>


