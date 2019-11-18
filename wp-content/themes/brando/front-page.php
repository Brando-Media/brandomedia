<?php 
/*
Template Name: Front Page
*/
get_header(); ?>
    <section class="section homeblue-bg" data-section-name="home">
    <div style="margin:auto 0;"><!--<img class="white-logo" style="max-height: 100%;  max-width: 100%; width: auto;height: auto;position: absolute;  top: 0;  bottom: 0;  left: 0;  right: 0;  margin: auto;" src="<?php bloginfo('template_url') ?>/assets/images/home.gif" alt="Brando Media"  />--><div>
    </section>
  
    <?php 
    if(have_rows('content')){
        while(have_rows('content')){
            the_row();
            if(get_row_layout() == 'content') get_template_part('templates/content');
            if(get_row_layout() == 'services') get_template_part('templates/services');
            if(get_row_layout() == 'contact') get_template_part('templates/contact');
            if(get_row_layout() == 'featured_work') get_template_part('templates/featured_work');
        }
    }
    ?>
<?php get_footer(); ?>    