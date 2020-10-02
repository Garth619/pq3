
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div id="blog_feed">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post">

		<?php if(get_field('banner_h1_blog','option') == "Yes") : ?>
			
			<h2 class="blog_header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<?php else:?>
		
			<h1 class="blog_header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		
		<?php endif;?>

		<span class='double_line'></span><!-- double_line -->
		
		<div class="blog_meta">
		
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<div class="blog_content content">
			
			<?php echo wp_trim_words( get_the_content(), 54, '...' );?>
		
		</div><!-- blog_content -->
		
		<a class="button_two read_more" href="<?php the_permalink();?>">Read More</a>
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- blog_post -->
			
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- blog_feed -->

<?php wpbeginner_numeric_posts_nav(); ?>


