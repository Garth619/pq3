<?php if(get_field('enable_section_four') == "Yes") { ?>

<section id='lp_section_four'>

  <div id='lp_sec_four_inner'>
  
    <span id='lp_sec_four_title'><?php the_field( 'lp_section_four_title' ); ?></span><!-- lp_sec_four_title -->

    <span class='double_line'></span><!-- doible_line -->

    <?php if ( have_rows( 'lp_section_four_case_results' ) ) : ?>

      <div id='lp_sec_four_slider'>
	    
      <?php while ( have_rows( 'lp_section_four_case_results' ) ) : the_row(); ?>

        <div class='lp_sec_four_slide'>

          <?php $icon = get_sub_field( 'icon' ); ?>
		      
          <?php if ( $icon ) { ?>
			      
            <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
		      
          <?php } ?>

          <span class="amount"><?php the_sub_field( 'amount' ); ?></span>

          <span class='double_line'></span><!-- double_line -->

          <span class='type'><?php the_sub_field( 'description' ); ?></span><!-- type -->

        </div><!-- sec_four_slide -->
		
	    <?php endwhile; ?>

      </div><!-- sec_four_slider -->
    
    <?php endif; ?>

  </div><!-- lp_sec_four_inner -->

</section><!-- lp_section_four -->

<?php } ?>