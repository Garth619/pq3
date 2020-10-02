<?php if(get_field('enable_section_six') == "Yes") { ?>

<section id='lp_section_six'>

  <div id='lp_sec_six_inner'>
  
    <div id='lp_sec_six_img_wrapper'>
    
      <?php $lp_section_six_image = get_field( 'lp_section_six_image' ); ?>
      
      <?php if ( $lp_section_six_image ) { ?>
	      
        <img class="lazyload" data-src="<?php echo $lp_section_six_image['url']; ?>" alt="<?php echo $lp_section_six_image['alt']; ?>" />
      
      <?php } ?>

      <?php if ( get_field( 'lp_section_six_image_quote' ) ) { ?>

        <span class="double_line"></span>
  
        <div id='lp_sec_six_descrip'>
        
          <?php the_field( 'lp_section_six_image_quote' ); ?>
        
        </div><!-- lp_sec_six_descrip -->

      <?php } ?>
    
    </div><!-- lp_sec_six_img_wrapper -->

    <div id='lp_sec_six_inner_content' class="content lp_content">
    
      <?php the_field( 'lp_section_six_content' ); ?>
    
    </div><!-- lp_sec_six_inner_content  class="content lp_content"-->
  
  </div><!-- lp_sec_six_inner -->

</section><!-- lp_section_six -->

<?php } ?>