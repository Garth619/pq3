<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if(get_field('host_google_fonts_locally','option') == "Yes") :?>

	<style>

<?php if ( have_rows( 'locally_hosted_google_fonts_repeater','option') ) : ?>
	<?php while ( have_rows( 'locally_hosted_google_fonts_repeater','option') ) : the_row(); ?>
		
	@font-face {
  	font-family: '<?php the_sub_field( 'font_family','option'); ?>';
  	font-style: <?php the_sub_field( 'font_style','option'); ?>;
  	font-weight: <?php the_sub_field( 'font_weight','option'); ?>;
  	font-display: <?php the_sub_field( 'font_display','option'); ?>;
  	src: local('<?php the_sub_field( 'src: local','option'); ?>'), local('<?php the_sub_field( 'local','option'); ?>'),
       url('<?php the_sub_field( 'font_file_woff2','option'); ?>') format('woff2');
	}

	<?php endwhile; ?>
<?php endif; ?>

		<?php the_field('locally_hosted_google_fonts','option');?>

	</style>

<?php else:?>

	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

	<style>

		<?php if(get_field('fonts','option')): ?>
	 
   		<?php while(has_sub_field('fonts','option')): ?>
  
     		@import url(<?php the_sub_field( 'font_url' ); ?>);
     
   		<?php endwhile; ?>
  
		 <?php endif; ?>
		 
		 </style>

		<?php endif; ?>

		

<style>
	
<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>

<header>

	<div id='header-inner'>

	 <div id='header-left'>
	 
		 <a href="<?php bloginfo('url');?>">
		 
				<?php echo file_get_contents( get_template_directory() . '/images/logo.svg') ?>
		 
		 </a>
	 
	 </div><!-- header_left -->

	 <div id='header-right'>
	 
		 <div id='cta-wrapper'>
		 
			 <span>Call for a free consultation</span>

			 <a href="tel:+19149930393">(914) 993-0393</a>
		 
		 </div><!-- cta-wrapper -->

		 <div id='menu-wrapper'>
		 
			 <span></span>
			 <span></span>
			 <span></span>
		 
		 </div><!-- menu-wrapper -->

		 <nav><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>
	 
	 </div><!-- header-right -->

	</div><!-- header-inner -->

</header>


		
		
		
