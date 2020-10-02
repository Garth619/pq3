<?php if(get_field('enable_section_one') == "Yes") { ?>

<section id='lp_section_one'>

  <div id='lp_section_one_inner'>
  
    <?php if(get_field('lp_wistia_or_youtube_video') == "Wistia") { ?>

      <div id='lp_sec_one_video' class="video_hover_styles">

        <div class='mywistia wistia_embed wistia_async_<?php the_field( 'lp_section_one_video_id_wistia_new' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

        <picture>
  
          <?php $section_one_video_image_webp = get_field( 'lp_section_one_video_image_webp' ); ?>
  
          <?php if ( $section_one_video_image_webp ) { ?>
  
            <source srcset='<?php echo $section_one_video_image_webp['url']; ?>' type="image/webp">
  
          <?php } ?>
      
          <?php $section_one_video_image = get_field( 'lp_section_one_video_image' ); ?>
  
            <img src="<?php echo $section_one_video_image['url']; ?>" alt="<?php echo $section_one_video_image['alt']; ?>" />
  
        </picture>
    
        <div id='video_overlay'>
  
          <div class='play_button'></div><!-- play_button -->
  
        </div><!-- video_overlay -->

      </div><!-- lp_sec_one_video -->

    <?php } ?>

    <?php if(get_field('lp_wistia_or_youtube_video') == "Youtube") { ?>
  
      <div id='lp_sec_one_video' class="video_hover_styles">
  
        <a href="https://www.youtube.com/embed/<?php the_field( 'lp_section_one_video_id_youtube' ); ?>" data-lity>
  
          <picture>
  
            <?php $section_one_video_image_webp = get_field( 'lp_section_one_video_image_webp' ); ?>
  
            <?php if ( $section_one_video_image_webp ) { ?>
  
              <source srcset='<?php echo $section_one_video_image_webp['url']; ?>' type="image/webp">
  
            <?php } ?>
      
            <?php $section_one_video_image = get_field( 'lp_section_one_video_image' ); ?>
  
            <img src="<?php echo $section_one_video_image['url']; ?>" alt="<?php echo $section_one_video_image['alt']; ?>" />
  
          </picture>
  
          <div id='video_overlay'>
  
            <div class='play_button'></div><!-- play_button -->
  
          </div><!-- video_overlay -->
  
        </a>
  
      </div><!-- sec_one_video -->
  
    <?php } ?>
  
    <?php if(get_field('lp_section_one_large_title')) { ?>

      <span id="lp_sec_one_title"><?php the_field( 'lp_section_one_large_title' ); ?></span>

    <?php } ?>
  
    <?php if ( have_rows( 'lp_section_one_selling_items' ) ) : ?>
            
      <ul id='lp_sec_one_selling_points'> 
            
        <?php while ( have_rows( 'lp_section_one_selling_items' ) ) : the_row(); ?>
  
          <li><?php the_sub_field( 'list_item' ); ?></li>
  
        <?php endwhile; ?>
  
      </ul>
  
    <?php endif; ?>

    <?php if ( have_rows( 'lp_section_one_logo_slider' ) ) : ?>
          
    <div id='lp_sec_one_logos'>
        
      <span id='lp_sec_one_logo_title'><?php the_field( 'lp_section_one_logos_title' ); ?></span><!-- lp_sec_one_logo_title -->
  
        <div id='lp_sec_one_slider'>
  
          <?php while ( have_rows( 'lp_section_one_logo_slider' ) ) : the_row(); ?>
  
              <div class='lp_sec_one_slide <?php the_sub_field('class');?>'>
  
                <div class='lp_sec_one_slide_inner'>
  
                  <?php $logos = get_sub_field( 'logo' ); ?>
            
                    <?php if ( $logos ) { ?>
              
                      <img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
            
                    <?php } ?>
  
                </div><!-- lp_sec_one_slide_inner -->
  
              </div><!-- lp_sec_one_slide -->
        
            <?php endwhile; ?>
  
          </div><!-- lp_sec_one_slider -->
        
        </div><!-- lp_sec_one_logos -->

      <?php endif; ?>

      </div><!-- lp_section_one_inner -->
      
      <picture>
  
        <?php $section_one_image_laptop_webp = get_field( 'lp_section_one_background_image_desktop_webp' ); ?>
  
          <?php if ( $section_one_image_laptop_webp ) { ?>
  
            <source media='(min-width: 1170px)' srcset='<?php echo $section_one_image_laptop_webp['url']; ?>' type="image/webp">
  
          <?php } ?>
  
          <?php $section_one_image_laptop = get_field( 'lp_section_one_background_image_desktop' ); ?>
  
          <?php if ( $section_one_image_laptop ) { ?>
  
            <source media='(min-width: 1170px)' srcset='<?php echo $section_one_image_laptop['url']; ?>'>
  
          <?php } ?>
  
          <?php $section_one_image_tablet_webp = get_field( 'lp_section_one_background_image_tablet_webp' ); ?>
  
          <?php if ( $section_one_image_tablet_webp ) { ?>
  
            <source media='(min-width: 768px)' srcset='<?php echo $section_one_image_tablet_webp['url']; ?>' type="image/webp">
      
          <?php } ?>
  
          <?php $section_one_image_tablet = get_field( 'lp_section_one_background_image_tablet' ); ?>
  
          <?php if ( $section_one_image_tablet ) { ?>
    
            <source media='(min-width: 768px)' srcset='<?php echo $section_one_image_tablet['url']; ?>'>
  
          <?php } ?>
  
          <?php $section_one_image_mobile_webp = get_field( 'lp_section_one_background_image_mobile_webp' ); ?>
      
          <?php if ( $section_one_image_mobile_webp ) { ?>
      
            <source srcset='<?php echo $section_one_image_mobile_webp['url']; ?>' type="image/webp">
      
          <?php } ?>
      
          <?php $section_one_image_mobile = get_field( 'lp_section_one_background_image_mobile' ); ?>
      
          <img id='lp_hero' src="<?php echo $section_one_image_mobile['url']; ?>" alt="<?php echo $section_one_image_mobile['alt']; ?>" /><!-- hero -->
        
        </picture>

    </section><!-- lp_section_one -->

  <?php }?>