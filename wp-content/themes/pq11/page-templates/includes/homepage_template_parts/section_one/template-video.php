<?php if(get_field('wistia_or_youtube_video') == "Wistia") { ?>

  <div id='sec_one_video' class="video_hover_styles">

      <div class='mywistia wistia_embed wistia_async_<?php the_field( 'section_one_video_id_wistia' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

      <picture>

      <?php $section_one_video_image_webp = get_field( 'section_one_video_image_webp' ); ?>

      <?php if ( $section_one_video_image_webp ) { ?>

        <source srcset='<?php echo $section_one_video_image_webp['url']; ?>' type="image/webp">

      <?php } ?>
      
      <?php $section_one_video_image = get_field( 'section_one_video_image' ); ?>

      <img src="<?php echo $section_one_video_image['url']; ?>" alt="<?php echo $section_one_video_image['alt']; ?>" />

      </picture>
      
    

    <div id='video_overlay'>

      <div class='play_button'></div><!-- play_button -->

    </div><!-- video_overlay -->

  </div><!-- sec_one_video -->

<?php } ?>


<?php if(get_field('wistia_or_youtube_video') == "Youtube") { ?>

<div id='sec_one_video' class="video_hover_styles">

    <a href="https://www.youtube.com/embed/<?php the_field( 'section_one_video_id_youtube' ); ?>" data-lity>

    <picture>

      <?php $section_one_video_image_webp = get_field( 'section_one_video_image_webp' ); ?>

      <?php if ( $section_one_video_image_webp ) { ?>

        <source srcset='<?php echo $section_one_video_image_webp['url']; ?>' type="image/webp">

      <?php } ?>
      
      <?php $section_one_video_image = get_field( 'section_one_video_image' ); ?>

      <img src="<?php echo $section_one_video_image['url']; ?>" alt="<?php echo $section_one_video_image['alt']; ?>" />

      </picture>

  <div id='video_overlay'>

    <div class='play_button'></div><!-- play_button -->

  </div><!-- video_overlay -->

  </a>

</div><!-- sec_one_video -->

<?php } ?>



