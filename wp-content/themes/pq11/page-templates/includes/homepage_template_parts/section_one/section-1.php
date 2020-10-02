<section id='section_one'>

  <div id='sec_one_left'>
  
    <div id='sec_one_left_inner'>
    
      <div id='sec_left_top'>
        
        <?php get_template_part('page-templates/includes/homepage_template_parts/section_one/template','video'); ?>

        <span id="sec_one_title"><?php the_field( 'section_one_large_title' ); ?></span>

        <div id='laptop_content'>

          <?php get_template_part('page-templates/includes/homepage_template_parts/section_one/template','video'); ?>

          <?php if ( have_rows( 'section_one_selling_points' ) ) : ?>
            
            <ul id='sec_one_selling_points'> 
	          
            <?php while ( have_rows( 'section_one_selling_points' ) ) : the_row(); ?>

              <li><?php the_sub_field( 'list_item' ); ?></li>

	          <?php endwhile; ?>

            </ul>

          <?php endif; ?>

        </div><!-- laptop_content -->

        <div>
            
            <a class='button free_consult_button' href='#consultation'><span><?php the_field( 'section_one_button_verbiage' ); ?></span></a><!-- button free_consult_button -->
          
          </div>
            
      </div><!-- sec_left_top -->

      <div id='sec_left_bottom'>
      
        <div id='sec_one_logos' class="preload_section">
        
          <span id='sec_one_logo_title'><?php the_field( 'section_one_logos_title' ); ?></span><!-- sec_one_logo_title -->

          <div id='sec_one_slider' class="preload_slider">

          <?php if ( have_rows( 'section_one_logo_slider' ) ) : ?>
	        
          <?php while ( have_rows( 'section_one_logo_slider' ) ) : the_row(); ?>

          <div class='sec_one_slide <?php the_sub_field('class');?>'>

            <div class='sec_one_slide_inner'>

              <?php $logos = get_sub_field( 'logo' ); ?>
            
              <?php if ( $logos ) { ?>
              
                <img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
            
              <?php } ?>

            </div><!-- sec_one_slide_inner -->

          </div><!-- sec_one_slide -->
        
          <?php endwhile; ?>

        <?php endif; ?>
          
            

        </div><!-- sec_one_slider -->
        
        </div><!-- sec_one_logos -->
      
      </div><!-- sec_left_bottom -->
    
    </div><!-- sec_one_left_inner -->

    <picture>

      <?php $section_one_image_laptop_webp = get_field( 'section_one_image_laptop_webp' ); ?>

      <?php if ( $section_one_image_laptop_webp ) { ?>

        <source media='(min-width: 1170px)' srcset='<?php echo $section_one_image_laptop_webp['url']; ?>' type="image/webp">

      <?php } ?>

      <?php $section_one_image_laptop = get_field( 'section_one_image_laptop' ); ?>

      <?php if ( $section_one_image_laptop ) { ?>

        <source media='(min-width: 1170px)' srcset='<?php echo $section_one_image_laptop['url']; ?>'>

      <?php } ?>

      <?php $section_one_image_tablet_webp = get_field( 'section_one_image_tablet_webp' ); ?>

      <?php if ( $section_one_image_tablet_webp ) { ?>

        <source media='(min-width: 768px)' srcset='<?php echo $section_one_image_tablet_webp['url']; ?>' type="image/webp">
      
      <?php } ?>

      <?php $section_one_image_tablet = get_field( 'section_one_image_tablet' ); ?>

      <?php if ( $section_one_image_tablet ) { ?>
    
        <source media='(min-width: 768px)' srcset='<?php echo $section_one_image_tablet['url']; ?>'>

      <?php } ?>

      <?php $section_one_image_mobile_webp = get_field( 'section_one_image_mobile_webp' ); ?>

      <?php if ( $section_one_image_mobile_webp ) { ?>

        <source srcset='<?php echo $section_one_image_mobile_webp['url']; ?>' type="image/webp">

      <?php } ?>

      <?php $section_one_image_mobile = get_field( 'section_one_image_mobile' ); ?>

      <img id='hero' src="<?php echo $section_one_image_mobile['url']; ?>" alt="<?php echo $section_one_image_mobile['alt']; ?>" /><!-- hero -->
    
    </picture>

  </div><!-- sec_one_left -->

  <div id='sec_one_right'>

    <div id='sec_one_right_inner'>
    
      <span id='sec_one_form_title'><?php the_field( 'section_one_form_title' ); ?></span><!-- sec_one_form_title -->

      <span class='double_line'></span><!-- double_line -->

      <?php gravity_form(1, false, false, false, '', true, 1234); ?>

      <span class='required'>Required Fields</span><!-- required -->

    </div><!-- sec_one_right_inner -->
  
  </div><!-- sec_one_right -->

</section><!-- sec_one -->