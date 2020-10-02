<?php if(get_field('enable_section_three') == "Yes") { ?>

<section id='lp_section_three'>

  <div id='lp_sec_three_inner' class="content lp_content">
  
    <h1 class="lp_sec_header"><?php the_field( 'lp_section_three_title' ); ?></h1>

    <span class='double_line'></span><!-- double_line -->

    <div id='lp_sec_three_content'>

      <?php if(get_field('lp_section_three_content_top_half')) {

        the_field( 'lp_section_three_content_top_half' );

      } ?>

    <?php if(get_field('enable_blockquote') == "Yes") { ?>
  
      <div id='lp_sec_three_info'>
      
        <div id='lp_sec_three_info_image'>

          <?php $lp_section_three_blockquote_image = get_field( 'lp_section_three_blockquote_image' ); ?>
          
          <?php if ( $lp_section_three_blockquote_image ) { ?>
	          
            <img class="lazyload" data-src="<?php echo $lp_section_three_blockquote_image['url']; ?>" alt="<?php echo $lp_section_three_blockquote_image['alt']; ?>" />
          
          <?php } ?>
        
        </div><!-- lp_sec_three_info_image -->

        <div id='lp_sec_three_info_text'>

          <div id='lp_sec_three_info_text_inner'>
         
           <span id='lp_sec_three_info_title'><?php the_field( 'lp_section_three_blockquote_title' ); ?></span><!-- lp_sec_three_info_title -->
 
           <span class='double_line'></span><!-- double_line -->
 
           <div id='lp_sec_three_info_caption'>
           
            <?php the_field( 'lp_section_three_blockqoute' ); ?>
             
           </div><!-- lp_sec_three_info_caption -->
         
         </div><!-- lp_sec_three_info_text_inner -->
        
       </div><!-- lp_sec_three_info_text -->
      
      </div><!-- lp_sec_three_info -->

    <?php } ?>

      <?php if(get_field('lp_section_three_content_bottom_half')) {

        the_field( 'lp_section_three_content_bottom_half' );

      } ?>

    </div><!-- lp_sec_three_content -->

  </div><!-- sec_three_inner -->

</section><!-- section_three -->

<?php }?>