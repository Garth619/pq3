<?php if(get_field('enable_section_five') == "Yes") { ?>

<section id='lp_section_five'>

  <div id='lp_sec_five_inner'>
  
    <span class='lp_sec_five_header lp_sec_header'><?php the_field( 'lp_section_five_title' ); ?></span><!-- lp_sec_header -->

    <span class='double_line'></span><!-- double_line -->

    <div id='lp_sec_five_bullets'>

    <?php if ( have_rows( 'section_five_bullets_col_one' ) ) : ?>

      <div class='lp_sec_five_col'>
	    
        <?php while ( have_rows( 'section_five_bullets_col_one' ) ) : the_row(); ?>
  
          <div class='lp_sec_five_bullet'>
          
            <span class='lp_sec_five_bullet_number'><?php the_sub_field( 'number' ); ?></span><!-- lp_sec_five_bullet_number -->
    
            <div class='lp_sec_five_bullet_content_wrapper'>

              <?php if(get_sub_field('title')) { ?>
            
                <span class='lp_sec_five_bullet_title'><?php the_sub_field( 'title' ); ?></span><!-- lp_sec_five_bullet_title -->

              <?php } ?>
    
              <div class='lp_sec_five_content content lp_content'>
              
                <?php the_sub_field( 'description' ); ?>
              
              </div><!-- lp_sec_five_content -->
            
            </div><!-- lp_sec_five_bullet_content -->
          
          </div><!-- lp_sec_five_bullet -->
  		
  	    <?php endwhile; ?>

      </div><!-- lp_sec_five_col -->
    
    <?php endif; ?>

  <?php if ( have_rows( 'section_five_bullets_col_two' ) ) : ?>

    <div class='lp_sec_five_col'>

      <?php while ( have_rows( 'section_five_bullets_col_two' ) ) : the_row(); ?>
      
        <div class='lp_sec_five_bullet'>
        
          <span class='lp_sec_five_bullet_number'><?php the_sub_field( 'number' ); ?></span><!-- lp_sec_five_bullet_number -->
      
          <div class='lp_sec_five_bullet_content_wrapper'>
          
            <?php if(get_sub_field('title')) { ?>
            
              <span class='lp_sec_five_bullet_title'><?php the_sub_field( 'title' ); ?></span><!-- lp_sec_five_bullet_title -->

            <?php } ?>
      
            <div class='lp_sec_five_content content lp_content'>
            
              <?php the_sub_field( 'description' ); ?>
            
            </div><!-- lp_sec_five_content -->
          
          </div><!-- lp_sec_five_bullet_content -->
        
        </div><!-- lp_sec_five_bullet -->
      
      <?php endwhile; ?>

    </div><!-- lp_sec_five_col -->

    <?php endif; ?>
    
    </div><!-- lp_sec_five_bullets -->
  
  </div><!-- lp_sec_five_inner -->

</section><!-- lp_section_five -->

<?php } ?>
