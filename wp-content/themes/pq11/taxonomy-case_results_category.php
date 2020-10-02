<?php 

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>
	
	<div class="page_container">

		<div id='case_results_wrapper' class="internal_wrapper">

			<div id='select_wrapper'>
			
				<span id='select_category_title'>Select Category</span><!-- select_category_title -->

				<div id='select_dropdown_wrapper'>
				
					<div id='select_input'>
					
						<span id='select_input_title'><?php single_term_title();?></span><!-- class -->
					
					</div><!-- select_input -->

					<div id='select_dropdown'>
					
						<div id='select_dropdown_inner'>
						
						
							<?php $terms = get_terms( 'case_results_category' );
						
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						
								echo '<ul>';
							
								foreach ( $terms as $term ) {

									$term_link = get_term_link( $term );
								
									echo '<li><a href="'. esc_url( $term_link ) .'">' . $term->name . '</a></li>';
    						}
    					
								echo '<li><a href="'. get_the_permalink(54) . '">View All +</a></li></ul>';
					
							} ?>
						
						</div><!-- select_dropdown_inner -->
					
					</div><!-- select_dropdown -->
				
				</div><!-- select_dropdown_wrapper -->
			
			</div><!-- select_wrapper -->

			<div id='case_result_boxes'>

      <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );?>

      <?php $mymain_query = new WP_Query( 
				array(
					'post_type' => 'case_results',
					'posts_per_page' => -1, 
					'order' => 'ASC',
					'tax_query' => array(
						array(
          		'taxonomy' => 'case_results_category',
							'field' => 'slug',
							'terms' => array( $term->slug),
							'operator' => 'IN'
						)
					)
				) 
			); 
      
      while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
        <div class='single_cr'>
				
          <div class='single_cr_inner'>
        
            <span class='single_cr_title'><?php the_title();?></span><!-- single_cr_title -->

            <span class='double_line'></span><!-- double_line -->

            <ul class='single_cr_type'><li><?php echo $term->name;?></li></ul><!-- single_cr_type -->

            <div class='single_cr_content content'>
          
              <?php the_content();?>
          
            </div><!-- single_cr_type -->
        
          </div><!-- single_cr_inner -->
      
          </div><!-- single_cr -->
          
          
      <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>

			

			</div><!-- case_result_boxes -->

		</div><!-- case_results_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
						
<?php get_footer(); ?>

