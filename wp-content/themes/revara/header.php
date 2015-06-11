<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header container" role="banner">
		<div class="row">
		<div class="site-branding col-sm-4">
			
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" class="navbar-brand" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

			
		</div>
		
		<div class="col-sm-8 mainmenu">
		<div class="mobilenavi"></div>
		<?php /* Primary navigation */
			wp_nav_menu( array(
			  'menu' => 'top_menu',
			  'depth' => 2,
			  'theme_location' => 'primary',
			  'menu_id'=>'topmenu' ,
			  'container' => false,
			  'menu_class' => 'nav',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
		?>
		</div>
		
		</div> <!-- end row -->
	</header><!-- #masthead -->
	
	
	<?php if( is_page_template('homepage.php') ){ get_template_part( 'inc/feature' ); } ?>

	<div id="content" class="site-content ">
	