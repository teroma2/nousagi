<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/common.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main"><!-- .site-header-main -->
				<div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<!-- .site-header-search -->
				<div class="site-header-search">
					<?php get_search_form(); ?>
				</div>
				<!-- /.site-header-search -->
			</div><!-- .site-header-main -->

			<div class="site-header-sub"><!-- .site-header-sub -->
			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
				<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>
				<div id="site-header-menu" class="site-header-menu">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<!-- .main-navigation -->
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
						</nav>
<nav class="main-navigation">
	<div class="menu-header-navigation-container">
    <ul id="menu-header-navigation" class="primary-menu">
<?php
$args=array(
  'hide_empty' => '0',
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<li class=""><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
  } 
?>
		</ul>
	</div>
</nav>

ーーーー
<!-- test -->
  <div class="mask">
    <ul class="list">
      <li><a href="/">Alpha</a></li>
      <li><a href="/">Beta</a></li>
      <li><a href="/">Gamma</a></li>
      <li><a href="/">Delta</a></li>
      <li><a href="/">Alpha</a></li>
      <li><a href="/">Beta</a></li>
      <li><a href="/">Gamma</a></li>
      <li><a href="/">Delta</a></li>
      <li><a href="/">Alpha</a></li>
      <li><a href="/">Beta</a></li>
      <li><a href="/">Gamma</a></li>
      <li><a href="/">Delta</a></li>
    </ul>
  </div>
<!-- /test -->
ーーー
<!-- 自作ナビゲーション -->
▼ここ
<nav class="nav_sp">
	<div class="navigation_sp_wrap">
		<ul class="navigation_sp">
			<li class="cat-item">
				<a href="<?php echo home_url('/column'); ?>">INTERVIEW</a>
			</li>
			<li class="cat-item">
				<ul class="children">
					<li class="cat-item"><a href="<?php echo home_url('/column/side-business-column/'); ?>">副業</a>
					</li>
						<li class="cat-item"><a href="<?php echo home_url('/column/column-child-care/'); ?>">子育て</a>
					</li>
				</ul>
			</li>
			<li class="cat-item">
				<a href="<?php echo home_url('/column'); ?>">JOBS</a>
				<ul class="children">
					<li class="cat-item"><a href="<?php echo home_url('/column/side-business-column/'); ?>">副業</a>
					</li>
						<li class="cat-item"><a href="<?php echo home_url('/column/column-child-care/'); ?>">子育て</a>
					</li>
					<li class="cat-item"><a href="<?php echo home_url('/column/side-business-column/'); ?>">副業</a>
					</li>
						<li class="cat-item"><a href="<?php echo home_url('/column/column-child-care/'); ?>">子育て</a>
					</li>
				</ul>
			</li>
			<li class="cat-item">
				<a href="<?php echo home_url('/column'); ?>">COLUMN</a>
				<ul class="children">
					<li class="cat-item"><a href="<?php echo home_url('/column/side-business-column/'); ?>">副業</a>
					</li>
						<li class="cat-item"><a href="<?php echo home_url('/column/column-child-care/'); ?>">子育て</a>
					</li>
				</ul>
			</li>
			<li class="cat-item">
				<a href="<?php echo home_url('/column'); ?>">NEWS</a>
				<ul class="children">
					<li class="cat-item"><a href="<?php echo home_url('/column/side-business-column/'); ?>">メディア露出情報</a>
					</li>
						<li class="cat-item"><a href="<?php echo home_url('/column/column-child-care/'); ?>">HARESニュース</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
ああああ
<nav class="nav_sp">
<div class="navigation_sp_wrap">
<ul class="navigation_sp">
<?php 
    $args = array(
	'child_of'           => 0,
	'hide_empty'         => 0,
	'title_li'           => __( '' )
    );
    wp_list_categories( $args );
?>
</ul>
</div>
</nav>
▲まで
<!-- /自作ナビゲーション -->



						<!-- /.main-navigation -->
					<?php endif; ?>

					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<!-- .social-navigation -->
						<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>',
								) );
							?>
						</nav><!-- /.social-navigation -->
					<?php endif; ?>
				</div><!-- .site-header-menu -->
			<?php endif; ?>
			</div><!-- .site-header-sub -->
			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
