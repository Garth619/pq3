<?php if(get_field('enable_section_two') == "Yes") { ?>

  <section id='lp_section_two'>
  
    <div id='lp_sec_two_inner'>
  
      <?php if ( have_rows( 'section_two_testimonials' ) ) : ?>
    	  
    	  <div id='lp_sec_two_slider'>
    
          <?php while ( have_rows( 'section_two_testimonials' ) ) : the_row(); ?>
        
            <div class='lp_sec_two_slide'>
            
              <?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>
      
              <div id='lp_sec_two_descrip_wrapper'>
              
                <?php the_sub_field( 'description' ); ?>
              
              </div><!-- lp_sec_two_descrip_wrapper -->
      
              <span class='double_line'></span><!-- double_line -->
      
              <span id='lp_sec_two_name'><?php the_sub_field( 'name' ); ?></span><!-- lp_sec_two_name -->
            
            </div><!-- lp_sec_two_slide -->
    
          <?php endwhile; ?>
    
        </div><!-- lp_sec_two_slider -->
    
      <?php endif; ?>
    
    </div><!-- lp_sec_two_inner -->
  
  </section><!-- lp_section_two -->

<?php }?>