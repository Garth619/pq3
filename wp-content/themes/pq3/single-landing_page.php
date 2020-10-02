<?php get_header(); ?>

<div id='landing_page_wrapper'>

  <div id='landing_page_left'>

   <?php get_template_part('page-templates/includes/template','header'); ?>

    <div id='landing_page_content_wrapper'>
    
     <?php get_template_part('page-templates/includes/landingpage/section','1'); ?>
     <?php get_template_part('page-templates/includes/landingpage/section','2'); ?>
     <?php get_template_part('page-templates/includes/landingpage/section','3'); ?>
     <?php get_template_part('page-templates/includes/landingpage/section','4'); ?>
     <?php get_template_part('page-templates/includes/landingpage/section','5'); ?>
     <?php get_template_part('page-templates/includes/landingpage/section','6'); ?>
    
    </div><!-- landing_page_content_wrapper -->

    <?php get_template_part('page-templates/includes/template','footer'); ?>
   
  </div><!-- landing_page_left -->

  <div id='landing_page_sidebar'>

   <div id='landing_page_sidebar_inner'>
   
     <div class='sidebar_form'>
 
       <span class='sidebar_form_title'>Request a free consultation</span><!-- sidebar_form_title -->
 
       <span class='double_line'></span><!-- double_line -->
 
       <?php gravity_form(5, false, false, false, '', true, 14433); ?>
 
       <span class='required'>Required Field</span><!-- sidebar_required -->
 
     </div><!-- sidebar_form -->
   
   </div><!-- landing_page_sidebar_inner -->
  
  </div><!-- landing_page_sidebar -->

</div><!-- landing_page_wrapper -->

<?php wp_footer();?>

<?php // local 

the_field('footer_scripts'); ?>

<?php // global in theme options

get_field('footer_scripts','option');?>

</body>
</html>


